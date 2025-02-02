<?php

namespace FizzBuzz\Spec;

use FizzBuzz\Core\ReplaceRuleInterface;

class CyclicNumberRule implements ReplaceRuleInterface
{
    public function __construct(
        protected int $base,
        protected string $replaceText
    ) {}
    public function apply(string $carry, int $number): string
    {
        return $carry . $this->replaceText;
    }

    public function match(string $carry, int $number): bool
    {
        return $number % $this->base === 0;
    }
}