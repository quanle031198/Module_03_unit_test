<?php
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 12/20/17
 * Time: 8:09 PM
 */

use PHPUnit\Framework\TestCase;
use FizzBuzz;
require_once 'FizzBuzz.php';

class FizzBuzzTest extends TestCase
{
    function testInvalidNumber()
    {
        $number = 0;
        $expected = 0;
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }

    function testNotFizzBuzzNumber() {
        $number = 1;
        $expected = 1;
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }

    function testFizzNumber() {
        $number = 3;
        $expected = 3;
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }

    function testBuzzNumber() {
        $number = 5;
        $expected = 5;
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }

    function testFizzBuzzNumber() {
        $number = 15;
        $expected = 15;
        $actual = FizzBuzz::read($number);
        $this->assertEquals($expected, $actual);
    }
}