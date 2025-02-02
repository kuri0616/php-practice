<?php
    
    namespace FizzBuzz\Core;
    
    class NumberConverter
    {
        public function __construct(
            protected array $rules
        )
        {
        }
        
        public function convert(int $number): string
        {
            $carry = '';
            foreach ($this->rules as $rule) {
                if ($rule->match($carry, $number)) {
                    $carry = $rule->apply($carry, $number);
                }
            }
            return $carry;
        }
    }