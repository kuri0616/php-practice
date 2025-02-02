<?php

namespace FizzBuzz\Spec;

use FizzBuzz\Core\ReplaceRuleInterface;

class PassThroughRule implements ReplaceRuleInterface
{
    public function apply(string $carry, int $number): string
    {
        return (string) $number;
    }

    public function match(string $carry, int $number): bool
    {
        return $carry == '';
    }
}