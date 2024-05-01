<?php

//8.uzd
class NumberSquare
{
    public static function numbers()
    {
        $min = (int)readline("Min? ");
        $max = (int)readline("Max? ");
        if ($max < $min) {
            echo "error";
        }
        for ($i = $min; $i <= $max; $i++) {
            $n = $i;
            for ($j = $min; $j <= $max; $j++) {
                echo $n;
                $n++;
                if ($n > $max) {
                    $n = $min;
                }
            }
            echo PHP_EOL;
        }
    }
}

NumberSquare::numbers();