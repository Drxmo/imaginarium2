<?php

namespace Illuminate\Foundation\Testing;

use Exception;

trait WithoutMiddleware {

  /**
   * @throws \Exception
   */
  public function disableMiddlewareForAllTests() {
    if (method_exists($this, 'withoutMiddleware')) {
      $this->withoutMiddleware();
    } else {
      throw new Exception('Unable to disable middleware. CrawlerTrait not used.');
    }
  }

}
