<?php

namespace Tests\Core;

use FizzBuzz\Core\NumberConverter;
use FizzBuzz\Core\ReplaceRuleInterface;
use PHPUnit\Framework\TestCase;

class NumberConverterTest extends TestCase
{
//    public function testConvert()
//    {
//        $fizzBuzz = new NumberConverter();
//        $this->assertEquals('1', $fizzBuzz->convert(1));
//
//        $this->assertEquals('2', $fizzBuzz->convert(2));
//
//        $this->assertEquals('Fizz', $fizzBuzz->convert(3));
//
//        $this->assertEquals('Buzz', $fizzBuzz->convert(5));
//
//        $this->assertEquals('Fizz', $fizzBuzz->convert(6));
//
//        $this->assertEquals('Buzz', $fizzBuzz->convert(10));
//
//        $this->assertEquals('FizzBuzz', $fizzBuzz->convert(15));
//
//        $this->assertEquals('FizzBuzz', $fizzBuzz->convert(30));
//    }

    public function testConvertWithEmptyRules()
    {
        $fizzBuzz = new NumberConverter([]);
        $this->assertEquals('', $fizzBuzz->convert(1));
    }

    public function testConvertWithSingleRule()
    {
        $rule = $this->createMock(ReplaceRuleInterface::class);
        $rule->expects($this->atLeastOnce())
            ->method('replace')
            ->with(1)
            ->willReturn('replaced');

        $fizzBuzz = new NumberConverter([$rule]);
        $this->assertEquals('replaced', $fizzBuzz->convert(1));
    }

    public function testConvertWithDoubleRule()
    {
        $FizzRule = $this->createMockRule(1, 'Fizz');

        $BuzzRule = $this->createMockRule(1, 'Buzz');

        $fizzBuzz = new NumberConverter([$FizzRule, $BuzzRule]);
        $this->assertEquals('FizzBuzz', $fizzBuzz->convert(1));
    }

    public function testConvertWithTripleRule()
    {
        $FizzRule = $this->createMockRule(1, '');

        $BuzzRule = $this->createMockRule(1, '');

        $FizzBuzzRule = $this->createMockRule(1, '1');

        $fizzBuzz = new NumberConverter([$FizzRule, $BuzzRule, $FizzBuzzRule]);
        $this->assertEquals('1', $fizzBuzz->convert(1));
    }

    private function createMockRule(int $expectedNumber, string $replaceValue): ReplaceRuleInterface
    {
        $rule = $this->createMock(ReplaceRuleInterface::class);
        $rule->expects($this->atLeastOnce())
            ->method('replace')
            ->with($expectedNumber)
            ->willReturn($replaceValue);
        return $rule;
    }
}