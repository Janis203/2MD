<?php
//6.uzd
$array = [23, 1, 111, 2.718, "apple"];
function double(int $number): int
{
    return $number * 2;
}

for ($i = 0; $i < count($array); $i++) {
    if (is_int($array[$i])) {
        echo double($array[$i]) . PHP_EOL;
    }
}