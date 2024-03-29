<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Tests\Dumper;

use Symfony\Component\Translation\MessageCatalogue;
use Symfony\Component\Translation\Dumper\IniFileDumper;

class IniFileDumperTest extends \PHPUnit_Framework_TestCase {

  public function testFormatCatalogue() {
    $catalogue = new MessageCatalogue('en');
    $catalogue->add(array('foo' => 'bar'));

    $dumper = new IniFileDumper();

    $this->assertStringEqualsFile(__DIR__ . '/../fixtures/resources.ini', $dumper->formatCatalogue($catalogue, 'messages'));
  }

}
