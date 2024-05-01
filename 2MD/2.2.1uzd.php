<?php
//1.uzd
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
echo "Original numeric array: \n";
foreach ($numbers as $number) {
    echo $number . " ";
}
echo "\n";

//todo
echo "Sorted numeric array: \n";
$empty = $numbers;
$sorted = [];
for ($i = 0; $i < count($numbers); $i++) {
    $lowest = $empty[0];
    $index = 0;
    for ($j = 0; $j < count($empty); $j++) {
        if ($lowest > $empty[$j]) {
            $lowest = $empty[$j];
            $index = $j;
        }
    }
    $sorted[] = $lowest;
    unset($empty[$index]);
    $empty = array_values($empty);
}
foreach ($sorted as $number) {
    echo $number . " ";
}
echo "\n";

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: \n";
foreach ($words as $word) {
    echo $word . " ";
}
echo "\n";

//todo
echo "Sorted string array: \n";
sort($words);
foreach ($words as $word) {
    echo $word . " ";
}
echo "\n";



