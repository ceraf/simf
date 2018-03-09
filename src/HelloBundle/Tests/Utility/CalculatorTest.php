<?php
// src/Acme/DemoBundle/Tests/Utility/CalculatorTest.php
namespace HelloBundle\Tests\Utility;

use HelloBundle\Utility\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $result = $calc->add(30, 12);
        // assert that our calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }
}
