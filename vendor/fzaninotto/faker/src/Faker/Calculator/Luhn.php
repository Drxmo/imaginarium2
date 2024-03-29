<?php

namespace Faker\Calculator;

/**
 * Utility class for generating Luhn checksum and validating a number
 *
 * Luhn algorithm is used to validate credit card numbers, IMEI numbers, and
 * National Provider Identifier numbers.
 *
 * @see http://en.wikipedia.org/wiki/Luhn_algorithm
 */
class Luhn {

  /**
   * @return int
   */
  private static function checksum($number) {
    $number = (string) $number;
    $length = strlen($number);
    $sum = 0;
    for ($i = $length - 1; $i >= 0; $i -= 2) {
      $sum += $number{$i};
    }
    for ($i = $length - 2; $i >= 0; $i -= 2) {
      $sum += array_sum(str_split($number{$i} * 2));
    }

    return $sum % 10;
  }

  /**
   * @return string
   */
  public static function computeCheckDigit($partialNumber) {
    $checkDigit = self::checksum($partialNumber . '0');
    if ($checkDigit === 0) {
      return 0;
    }

    return (string) (10 - $checkDigit);
  }

  /**
   * Checks whether a number (partial number + check digit) is Luhn compliant
   *
   * @return boolean
   */
  public static function isValid($number) {
    return self::checksum($number) === 0;
  }

}
