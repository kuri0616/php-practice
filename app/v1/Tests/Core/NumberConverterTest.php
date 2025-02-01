<?php

namespace Tests\Core;

use FizzBuzz\Core\NumberConverter;
use PHPUnit\Framework\TestCase;

class NumberConverterTest extends TestCase
{
    public function testConvert()
    {
        $fizzBuzz = new NumberConverter();
        $this->assertEquals('1', $fizzBuzz->convert(1));

        $this->assertEquals('2', $fizzBuzz->convert(2));

        $this->assertEquals('Fizz', $fizzBuzz->convert(3));

        $this->assertEquals('Buzz', $fizzBuzz->convert(5));

        $this->assertEquals('Fizz', $fizzBuzz->convert(6));

        $this->assertEquals('Buzz', $fizzBuzz->convert(10));

        $this->assertEquals('FizzBuzz', $fizzBuzz->convert(15));

        $this->assertEquals('FizzBuzz', $fizzBuzz->convert(30));
    }
}