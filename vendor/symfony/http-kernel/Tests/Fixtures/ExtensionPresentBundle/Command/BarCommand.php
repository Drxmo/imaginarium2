<?php

namespace Symfony\Component\HttpKernel\Tests\Fixtures\ExtensionPresentBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\HttpKernel\Bundle;

/**
 * This command has a required parameter on the constructor and will be ignored by the default Bundle implementation.
 *
 * @see Bundle::registerCommands()
 */
class BarCommand extends Command {

  public function __construct($example, $name = 'bar') {
    
  }

}
