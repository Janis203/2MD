<?php

//7.uzd
class RollTwoDice
{
    public static function roll()
    {
        echo "Desired sum: ";
        $sum = (int)readline();
        if ($sum < 2 || $sum > 12) {
            echo "error";
            exit;
        }
        while (true) {
            $dice1 = rand(1, 6);
            $dice2 = rand(1, 6);
            $value = $dice1 + $dice2;
            echo "$dice1 and $dice2 = $value" . PHP_EOL;
            if ($value === $sum) {
                exit;
            }
        }
    }
}

RollTwoDice::roll();