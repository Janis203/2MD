<?php

//4.uzd
class FizzBuzz
{
    public static function fizz()
    {
        $integer = (int)readline("Enter number ");
        $count = 1;
        if ($integer < 1) {
            echo "error" . PHP_EOL;
        } else {
            for ($i = 1; $i <= $integer; $i++) {
                if ($i % 3 === 0 && $i % 5 === 0) {
                    echo "FizzBuzz ";
                } elseif ($i % 5 === 0) {
                    echo "Buzz ";
                } elseif ($i % 3 === 0) {
                    echo "Fizz ";
                } else {
                    echo $i . " ";
                }
                $count++;
                if ($count > 20) {
                    echo PHP_EOL;
                    $count = 1;
                }
            }
        }
    }
}

FizzBuzz::fizz();