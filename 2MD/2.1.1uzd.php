<?php
//1-5 uzd
//2.1 uzd
$nr1 = (int)readline("Enter number 1: ");
$nr2 = (int)readline("Enter number 2: ");
if ($nr1 === 15 || $nr2 === 15 || ($nr1 + $nr2) === 15 || ($nr1 - $nr2) === 15 || ($nr2 - $nr1) === 15) {
    echo true;
}
echo PHP_EOL;
//2.2uzd
$number = (int)readline("Enter number: ");
$CheckOddEven = 0;
if ($number % 2 === 0) {
    $CheckOddEven = 2;
} else {
    $CheckOddEven = 1;
}
switch ($CheckOddEven) {
    case 1:
        echo "Odd number" . PHP_EOL;
        break;
    case 2:
        echo "Even number" . PHP_EOL;
        break;
    default;
        echo "error" . PHP_EOL;
        break;
}
echo "bye!" . PHP_EOL;
//3.uzd
$low = 1;
$high = 100;
$count = 0;
for ($i = $low; $i <= $high; $i++) {
    $count += $i;
}
$average = $count / ($high - $low + 1);
echo "The sum of $low and $high is $count \n The average is $average" . PHP_EOL;
//4.uzd
$lower = 1;
$higher = 10;
$fact = $lower;
for ($i = $lower + 1; $i <= $higher; $i++) {
    $fact *= $i;
}
echo $fact . PHP_EOL;
//5.
$correctNumber = rand(1, 100);
for ($i = 0; $i < 3; $i++) {
    $nmr = (int)readline("I'm thinking of a number between 1-100.  Try to guess it.");
    if ($correctNumber === $nmr) {
        echo "You guessed it!  What are the odds?!?" . PHP_EOL;
        break;
    } elseif ($correctNumber < $nmr) {
        echo "Sorry, you are too high." . PHP_EOL;
    } else {
        echo "Sorry, you are too low." . PHP_EOL;
    }
}