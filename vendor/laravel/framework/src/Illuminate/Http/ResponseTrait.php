<?php

namespace Illuminate\Http;

trait ResponseTrait {

  /**
   * Get the status code for the response.
   *
   * @return int
   */
  public function status() {
    return $this->getStatusCode();
  }

  /**
   * Get the content of the response.
   *
   * @return string
   */
  public function content() {
    return $this->getContent();
  }

  /**
   * Set a header on the Response.
   *
   * @param  string  $key
   * @param  string  $value
   * @param  bool    $replace
   * @return $this
   */
  public function header($key, $value, $replace = true) {
    $this->headers->set($key, $value, $replace);

    return $this;
  }

  /**
   * Add an array of headers to the response.
   *
   * @param  array  $headers
   * @return $this
   */
  public function withHeaders(array $headers) {
    foreach ($headers as $key => $value) {
      $this->headers->set($key, $value);
    }

    return $this;
  }

  /**
   * Add a cookie to the response.
   *
   * @param  \Symfony\Component\HttpFoundation\Cookie|mixed  $cookie
   * @return $this
   */
  public function cookie($cookie) {
    return call_user_func_array([$this, 'withCookie'], func_get_args());
  }

  /**
   * Add a cookie to the response.
   *
   * @param  \Symfony\Component\HttpFoundation\Cookie|mixed  $cookie
   * @return $this
   */
  public function withCookie($cookie) {
    if (is_string($cookie) && function_exists('cookie')) {
      $cookie = call_user_func_array('cookie', func_get_args());
    }

    $this->headers->setCookie($cookie);

    return $this;
  }

}
