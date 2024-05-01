<?php
//2.uzd
function multiply(int $a, int $b): int
{
    return $a * $b;
}

$base = (int)readline("Enter a number: ");
$times = (int)readline("Enter second number: ");
echo multiply($base, $times);