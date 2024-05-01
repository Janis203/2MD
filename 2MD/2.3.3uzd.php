<?php
//3.uzd
$number = (int)readline("Enter a positive number: ");
if ($number < 0) {
    echo "error";
} else {
    $digits = strlen($number);
    echo "The number $number has $digits digits";
}