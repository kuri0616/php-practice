<?php
    
    namespace Tests\Core;
    
    use FizzBuzz\Core\NumberConverter;
    use FizzBuzz\Core\ReplaceRuleInterface;
    use PHPUnit\Framework\TestCase;
    
    class NumberConverterTest extends TestCase
    {
    public function testConvert()
    {
        $fizzBuzz = new NumberConverter();
    }
        
        public function testConvertWithSingleRule()
        {
            $rule = $this->createMockRule(1, '', true, 'replaced');
            $fizzBuzz = new NumberConverter([$rule]);
            $this->assertEquals('replaced', $fizzBuzz->convert(1));
        }
        
        public function testConvertWithDoubleRule()
        {
            $FizzRule = $this->createMockRule(1, '', true, 'Fizz');
            $BuzzRule = $this->createMockRule(1, 'Fizz', true, 'Buzz');
            
            $fizzBuzz = new NumberConverter([$FizzRule, $BuzzRule]);
            $this->assertEquals('FizzBuzz', $fizzBuzz->convert(1));
        }
        
        public function testConvertWithTripleRule()
        {
            $FizzRule = $this->createMockRule(1, '', false, 'Fizz');
            $BuzzRule = $this->createMockRule(1, '', false, 'Buzz');
            $PassThroughRule = $this->createMockRule(1, '', true, '1');
            
            $fizzBuzz = new NumberConverter([$FizzRule, $BuzzRule, $PassThroughRule]);
            $this->assertEquals('1', $fizzBuzz->convert(1));
        }
        
        private function createMockRule(
            int    $expectedNumber,
            string $expectedCarry,
            bool $matchResult,
            string $replaceValue
        ): ReplaceRuleInterface
        {
            $rule = $this->createMock(ReplaceRuleInterface::class);
            $rule->expects($this->any())
                ->method('apply')
                ->with($expectedCarry, $expectedNumber)
                ->willReturn($replaceValue);
            
            $rule->expects($this->atLeastOnce())
                ->method('match')
                ->with($expectedCarry, $expectedNumber)
                ->willReturn($matchResult);
            
            return $rule;
        }
    }