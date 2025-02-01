<?php
namespace FizzBuzz\Core;

class NumberConverter
{
    public function __construct(
        protected  array $rules
){}
    public function convert(int $number): string
    {
        if (empty($this->rules)) {
            return '';
        }

        $result = "";
        foreach ($this->rules as $rule) {
            $result .= $rule->replace($number);
        }
        return $result;

//
//        if ($number % 3 === 0 && $number % 5 === 0) {
//            return 'FizzBuzz';
//        }
//
//        if ($number % 3 === 0) {
//            return 'Fizz';
//        }
//
//        if ($number % 5 === 0) {
//            return 'Buzz';
//        }
//
//        return (string) $number;
    }
}