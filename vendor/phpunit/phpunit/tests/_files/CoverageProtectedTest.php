<?php

class CoverageProtectedTest extends PHPUnit_Framework_TestCase {

  /**
   * @covers CoveredClass::<protected>
   */
  public function testSomething() {
    $o = new CoveredClass;
    $o->publicMethod();
  }

}
