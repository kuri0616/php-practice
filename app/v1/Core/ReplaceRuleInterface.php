<?php

namespace FizzBuzz\Core;

interface ReplaceRuleInterface
{
    public function apply(string $carry,int $number): string;
    public function match(string $carry,int $number): bool;
}

