<?php

/*
 * This file is part of the PHPUnit_MockObject package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use SebastianBergmann\Exporter\Exporter;

/**
 * Represents a static invocation.
 *
 * @since Class available since Release 1.0.0
 */
class PHPUnit_Framework_MockObject_Invocation_Static implements PHPUnit_Framework_MockObject_Invocation, PHPUnit_Framework_SelfDescribing {

  /**
   * @var array
   */
  protected static $uncloneableExtensions = array(
      'mysqli' => true,
      'SQLite' => true,
      'sqlite3' => true,
      'tidy' => true,
      'xmlwriter' => true,
      'xsl' => true
  );

  /**
   * @var array
   */
  protected static $uncloneableClasses = array(
      'Closure',
      'COMPersistHelper',
      'IteratorIterator',
      'RecursiveIteratorIterator',
      'SplFileObject',
      'PDORow',
      'ZipArchive'
  );

  /**
   * @var string
   */
  public $className;

  /**
   * @var string
   */
  public $methodName;

  /**
   * @var array
   */
  public $parameters;

  /**
   * @param string $className
   * @param string $methodname
   * @param array  $parameters
   * @param bool   $cloneObjects
   */
  public function __construct($className, $methodName, array $parameters, $cloneObjects = false) {
    $this->className = $className;
    $this->methodName = $methodName;
    $this->parameters = $parameters;

    if (!$cloneObjects) {
      return;
    }

    foreach ($this->parameters as $key => $value) {
      if (is_object($value)) {
        $this->parameters[$key] = $this->cloneObject($value);
      }
    }
  }

  /**
   * @return string
   */
  public function toString() {
    $exporter = new Exporter;

    return sprintf(
            '%s::%s(%s)', $this->className, $this->methodName, implode(
                    ', ', array_map(
                            array($exporter, 'shortenedExport'), $this->parameters
                    )
            )
    );
  }

  /**
   * @param  object $original
   * @return object
   */
  protected function cloneObject($original) {
    $cloneable = null;
    $object = new ReflectionObject($original);

    // Check the blacklist before asking PHP reflection to work around
    // https://bugs.php.net/bug.php?id=53967
    if ($object->isInternal() &&
            isset(self::$uncloneableExtensions[$object->getExtensionName()])) {
      $cloneable = false;
    }

    if ($cloneable === null) {
      foreach (self::$uncloneableClasses as $class) {
        if ($original instanceof $class) {
          $cloneable = false;
          break;
        }
      }
    }

    if ($cloneable === null && method_exists($object, 'isCloneable')) {
      $cloneable = $object->isCloneable();
    }

    if ($cloneable === null && $object->hasMethod('__clone')) {
      $method = $object->getMethod('__clone');
      $cloneable = $method->isPublic();
    }

    if ($cloneable === null) {
      $cloneable = true;
    }

    if ($cloneable) {
      try {
        return clone $original;
      } catch (Exception $e) {
        return $original;
      }
    } else {
      return $original;
    }
  }

}
