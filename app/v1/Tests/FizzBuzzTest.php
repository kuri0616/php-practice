<?php

namespace Tests;

use FizzBuzz\Core\NumberConverter;
use FizzBuzz\Spec\CyclicNumberRule;
use FizzBuzz\Spec\PassThroughRule;

class FizzBuzzTest extends \PHPUnit\Framework\TestCase
{
    public function testFizzBuzz()
    {
        $rules = [
            new CyclicNumberRule(3, 'Fizz'),
            new CyclicNumberRule(5, 'Buzz'),
            new PassThroughRule()
        ];

        $fizzBuzz = new NumberConverter($rules);
        
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