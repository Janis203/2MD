<?php
//4uzd
$array1 = [];
for ($i = 0; $i < 10; $i++) {
    $array1[$i] = rand(1, 100);
}
$array2 = $array1;
array_pop($array1);
$array1[] = -7;
echo "Array 1: ";
foreach ($array1 as $number1) {
    echo $number1 . " ";
}
echo PHP_EOL;
echo "Array 2: ";
foreach ($array2 as $number2) {
    echo $number2 . " ";
}
