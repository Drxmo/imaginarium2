<?php

namespace Illuminate\Foundation\Testing;

use Mockery;
use PHPUnit_Framework_TestCase;

abstract class TestCase extends PHPUnit_Framework_TestCase {

  use Concerns\InteractsWithContainer,
      Concerns\MakesHttpRequests,
      Concerns\ImpersonatesUsers,
      Concerns\InteractsWithConsole,
      Concerns\InteractsWithDatabase,
      Concerns\InteractsWithSession,
      Concerns\MocksApplicationServices;

  /**
   * The Illuminate application instance.
   *
   * @var \Illuminate\Foundation\Application
   */
  protected $app;

  /**
   * The callbacks that should be run after the application is created.
   *
   * @var array
   */
  protected $afterApplicationCreatedCallbacks = [];

  /**
   * The callbacks that should be run before the application is destroyed.
   *
   * @var array
   */
  protected $beforeApplicationDestroyedCallbacks = [];

  /**
   * Indicates if we have made it throught the base setUp function.
   *
   * @var bool
   */
  protected $setUpHasRun = false;

  /**
   * Creates the application.
   *
   * Needs to be implemented by subclasses.
   *
   * @return \Symfony\Component\HttpKernel\HttpKernelInterface
   */
  abstract public function createApplication();

  /**
   * Setup the test environment.
   *
   * @return void
   */
  public function setUp() {
    if (!$this->app) {
      $this->refreshApplication();
    }

    $this->setUpTraits();

    foreach ($this->afterApplicationCreatedCallbacks as $callback) {
      call_user_func($callback);
    }

    $this->setUpHasRun = true;
  }

  /**
   * Refresh the application instance.
   *
   * @return void
   */
  protected function refreshApplication() {
    putenv('APP_ENV=testing');

    $this->app = $this->createApplication();
  }

  /**
   * Boot the testing helper traits.
   *
   * @return void
   */
  protected function setUpTraits() {
    $uses = array_flip(class_uses_recursive(get_class($this)));

    if (isset($uses[DatabaseTransactions::class])) {
      $this->beginDatabaseTransaction();
    }

    if (isset($uses[DatabaseMigrations::class])) {
      $this->runDatabaseMigrations();
    }

    if (isset($uses[WithoutMiddleware::class])) {
      $this->disableMiddlewareForAllTests();
    }

    if (isset($uses[WithoutEvents::class])) {
      $this->disableEventsForAllTests();
    }
  }

  /**
   * Clean up the testing environment before the next test.
   *
   * @return void
   */
  public function tearDown() {
    if (class_exists('Mockery')) {
      Mockery::close();
    }

    if ($this->app) {
      foreach ($this->beforeApplicationDestroyedCallbacks as $callback) {
        call_user_func($callback);
      }

      $this->app->flush();

      $this->app = null;
    }

    $this->setUpHasRun = false;

    if (property_exists($this, 'serverVariables')) {
      $this->serverVariables = [];
    }

    $this->afterApplicationCreatedCallbacks = [];
    $this->beforeApplicationDestroyedCallbacks = [];
  }

  /**
   * Register a callback to be run after the application is created.
   *
   * @param  callable  $callback
   * @return void
   */
  protected function afterApplicationCreated(callable $callback) {
    $this->afterApplicationCreatedCallbacks[] = $callback;

    if ($this->setUpHasRun) {
      call_user_func($callback);
    }
  }

  /**
   * Register a callback to be run before the application is destroyed.
   *
   * @param  callable  $callback
   * @return void
   */
  protected function beforeApplicationDestroyed(callable $callback) {
    $this->beforeApplicationDestroyedCallbacks[] = $callback;
  }

}
