<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\EventListener;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\Routing\Matcher\RequestMatcherInterface;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RequestContextAwareInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Initializes the context from the request and sets request attributes based on a matching route.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RouterListener implements EventSubscriberInterface {

  private $matcher;
  private $context;
  private $logger;
  private $requestStack;

  /**
   * Constructor.
   *
   * @param UrlMatcherInterface|RequestMatcherInterface $matcher      The Url or Request matcher
   * @param RequestStack                                $requestStack A RequestStack instance
   * @param RequestContext|null                         $context      The RequestContext (can be null when $matcher implements RequestContextAwareInterface)
   * @param LoggerInterface|null                        $logger       The logger
   *
   * @throws \InvalidArgumentException
   */
  public function __construct($matcher, RequestStack $requestStack, RequestContext $context = null, LoggerInterface $logger = null) {
    if (!$matcher instanceof UrlMatcherInterface && !$matcher instanceof RequestMatcherInterface) {
      throw new \InvalidArgumentException('Matcher must either implement UrlMatcherInterface or RequestMatcherInterface.');
    }

    if (null === $context && !$matcher instanceof RequestContextAwareInterface) {
      throw new \InvalidArgumentException('You must either pass a RequestContext or the matcher must implement RequestContextAwareInterface.');
    }

    $this->matcher = $matcher;
    $this->context = $context ? : $matcher->getContext();
    $this->requestStack = $requestStack;
    $this->logger = $logger;
  }

  private function setCurrentRequest(Request $request = null) {
    if (null !== $request) {
      $this->context->fromRequest($request);
    }
  }

  /**
   * After a sub-request is done, we need to reset the routing context to the parent request so that the URL generator
   * operates on the correct context again.
   *
   * @param FinishRequestEvent $event
   */
  public function onKernelFinishRequest(FinishRequestEvent $event) {
    $this->setCurrentRequest($this->requestStack->getParentRequest());
  }

  public function onKernelRequest(GetResponseEvent $event) {
    $request = $event->getRequest();

    $this->setCurrentRequest($request);

    if ($request->attributes->has('_controller')) {
      // routing is already done
      return;
    }

    // add attributes based on the request (routing)
    try {
      // matching a request is more powerful than matching a URL path + context, so try that first
      if ($this->matcher instanceof RequestMatcherInterface) {
        $parameters = $this->matcher->matchRequest($request);
      } else {
        $parameters = $this->matcher->match($request->getPathInfo());
      }

      if (null !== $this->logger) {
        $this->logger->info(sprintf('Matched route "%s".', isset($parameters['_route']) ? $parameters['_route'] : 'n/a'), array(
            'route_parameters' => $parameters,
            'request_uri' => $request->getUri(),
        ));
      }

      $request->attributes->add($parameters);
      unset($parameters['_route'], $parameters['_controller']);
      $request->attributes->set('_route_params', $parameters);
    } catch (ResourceNotFoundException $e) {
      $message = sprintf('No route found for "%s %s"', $request->getMethod(), $request->getPathInfo());

      if ($referer = $request->headers->get('referer')) {
        $message .= sprintf(' (from "%s")', $referer);
      }

      throw new NotFoundHttpException($message, $e);
    } catch (MethodNotAllowedException $e) {
      $message = sprintf('No route found for "%s %s": Method Not Allowed (Allow: %s)', $request->getMethod(), $request->getPathInfo(), implode(', ', $e->getAllowedMethods()));

      throw new MethodNotAllowedHttpException($e->getAllowedMethods(), $message, $e);
    }
  }

  public static function getSubscribedEvents() {
    return array(
        KernelEvents::REQUEST => array(array('onKernelRequest', 32)),
        KernelEvents::FINISH_REQUEST => array(array('onKernelFinishRequest', 0)),
    );
  }

}
