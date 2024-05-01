<?php
//2.uzd
echo "Input number of terms: \n";

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function
$index = (int)readline("Enter i: ");
$number = (int)readline("Enter n: ");
$hold = $index;
for ($i = 1; $i < $number; $i++) {
    $hold *= $index;
}
echo "Result: $hold";
