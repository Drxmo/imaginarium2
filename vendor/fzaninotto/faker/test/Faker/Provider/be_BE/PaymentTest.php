<?php

namespace Faker\Test\Provider\be_BE;

use Faker\Generator;
use Faker\Provider\be_BE\Payment;

class PaymentTest extends \PHPUnit_Framework_TestCase {

  /**
   * @var Generator
   */
  private $faker;

  public function setUp() {
    $faker = new Generator();
    $faker->addProvider(new Payment($faker));
    $this->faker = $faker;
  }

  public function testVatIsValid() {
    $vat = $this->faker->vat();
    $unspacedVat = $this->faker->vat(false);
    $this->assertRegExp('/^(BE 0\d{9})$/', $vat);
    $this->assertRegExp('/^(BE0\d{9})$/', $unspacedVat);
  }

}
