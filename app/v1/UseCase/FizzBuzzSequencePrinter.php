<?php
    
    namespace FizzBuzz\Usecase;
    
    require_once __DIR__ . '/../Core/NumberConverter.php';
    require_once __DIR__ . '/../Spec/CyclicNumberRule.php';
    require_once __DIR__ . '/../Spec/PassThroughRule.php';
    
    use FizzBuzz\Core\NumberConverter;
    use FizzBuzz\Spec\CyclicNumberRule;
    use FizzBuzz\Spec\PassThroughRule;
    
    class FizzBuzzSequencePrinter
    {
        public function printRange(int $start, int $end): void
        {
            $FizzBuzz = new NumberConverter([
                new CyclicNumberRule(3, 'Fizz'),
                new CyclicNumberRule(5, 'Buzz'),
                new PassThroughRule()
            ]);
            
            $result = '';
            for ($i = $start; $i <= $end; $i++) {
                printf("%s\n", $FizzBuzz->convert($i));
            }
        }
    }
    