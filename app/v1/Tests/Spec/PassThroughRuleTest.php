<?php

namespace Tests\Spec;

use FizzBuzz\Spec\PassThroughRule;
use PHPUnit\Framework\TestCase;

class PassThroughRuleTest extends TestCase
{
    public function testApply()
    {
        $rule = new PassThroughRule();
        $this->assertEquals('1', $rule->apply('',1));
        $this->assertEquals('2', $rule->apply('',2));
    }
}