<?php

//5.uzd
class Piglet
{
    public static function Pig()
    {
        echo "Welcome to Piglet!" . PHP_EOL;
        $points = 0;
        while (true) {
            $dice = rand(1, 6);
            $points += $dice;
            echo "You rolled a $dice" . "!" . PHP_EOL;
            if ($dice === 1) {
                $points = 0;
                echo "You got $points points.";
                exit;
            }
            echo "Roll again? ";
            $choice = strtolower(readline());
            if ($choice === "yes" || $choice === "y") {
                continue;
            } elseif ($choice === "no" || $choice === "n") {
                echo "You got $points points.";
                exit;
            } else {
                echo "error";
                break;
            }
        }
    }
}

Piglet::Pig();