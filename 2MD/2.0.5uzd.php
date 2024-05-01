<?php
//5.uzd
$fruits = [
    [
        "fruit" => "banana",
        "weight" => 5
    ],
    [
        "fruit" => "apple",
        "weight" => 10
    ],
    [
        "fruit" => "watermelon",
        "weight" => 62
    ],
    [
        "fruit" => "cherry",
        "weight" => 3
    ]
];

function price(int $mass): int
{
    $cost = [2, 3, 1];
    if ($mass > 50) {
        return $cost[1] * $mass;
    } elseif ($mass > 10 && $mass < 50) {
        return $cost[0] * $mass;
    }
    return $cost[2] * $mass;
}

foreach ($fruits as $fruit) {
    echo "The price of {$fruit["fruit"]} is " . price($fruit["weight"]) . "$" . PHP_EOL;
}