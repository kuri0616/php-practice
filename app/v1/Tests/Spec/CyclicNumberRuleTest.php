<?php

namespace Tests\Spec;

use FizzBuzz\Spec\CyclicNumberRule;
use PHPUnit\Framework\TestCase;

class CyclicNumberRuleTest extends TestCase
{
    public function testApply()
    {
        $rule = new CyclicNumberRule(0, 'Buzz');
        $this->assertEquals('Buzz', $rule->apply('',0));
        $this->assertEquals('FizzBuzz', $rule->apply('Fizz',0));
    }
}