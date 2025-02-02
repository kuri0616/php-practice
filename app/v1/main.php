<?php
    
    use FizzBuzz\Usecase\FizzBuzzSequencePrinter;
    
    class App
    {
        public static function main(): void
        {
            $print = new FizzBuzzSequencePrinter();
            $print->printRange(1, 100);
        }
    }
    require_once __DIR__ . '/vendor/autoload.php';
    App::main();