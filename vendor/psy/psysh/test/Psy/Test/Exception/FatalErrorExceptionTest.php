<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2015 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Test\Exception;

use Psy\Exception\Exception;
use Psy\Exception\FatalErrorException;

class FatalErrorExceptionTest extends \PHPUnit_Framework_TestCase {

  public function testInstance() {
    $e = new FatalErrorException();

    $this->assertTrue($e instanceof Exception);
    $this->assertTrue($e instanceof \ErrorException);
    $this->assertTrue($e instanceof FatalErrorException);
  }

  public function testMessage() {
    $e = new FatalErrorException('{msg}', 0, 0, '{filename}', 13);

    $this->assertEquals('{msg}', $e->getRawMessage());
    $this->assertContains('{msg}', $e->getMessage());
    $this->assertContains('{filename}', $e->getMessage());
    $this->assertContains('line 13', $e->getMessage());
  }

  public function testMessageWithNoFilename() {
    $e = new FatalErrorException('{msg}');

    $this->assertEquals('{msg}', $e->getRawMessage());
    $this->assertContains('{msg}', $e->getMessage());
    $this->assertContains('eval()\'d code', $e->getMessage());
  }

}
