<?php
//2.uzd
$numbers = [20, 30, 25, 35, -16, 60, -100];

//todo calculate an average value of the numbers
$sum = array_sum($numbers);
$avg = $sum / count($numbers);
echo "The average is " . $avg;