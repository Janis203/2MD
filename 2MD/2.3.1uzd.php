<?php
echo "Input the 1st number: ";
$first = (int)readline();
echo "Input the 2nd number: ";
$second = (int)readline();
echo "Input the 3rd number: ";
$third = (int)readline();
//todo print the largest number
if ($first > $second && $first > $third) {
    echo "The largest number is $first";
} elseif ($second > $first && $second > $third) {
    echo "The largest number is $second";
} else {
    echo "The largest number is $third";
}
