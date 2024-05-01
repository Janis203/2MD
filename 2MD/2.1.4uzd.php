<?php
//8.uzd
$employees = [
    [
        "name" => "employee1",
        "base pay" => 750,
        "hours worked" => 35
    ],
    [
        "name" => "employee2",
        "base pay" => 820,
        "hours worked" => 47
    ],
    [
        "name" => "employee3",
        "base pay" => 1000,
        "hours worked" => 73
    ]
];
foreach ($employees as $employee) {
    $pay = 0;
    if ($employee["base pay"] >= 800 && $employee["hours worked"] <= 60) {
        if ($employee["hours worked"] > 40) {
            $pay = (($employee["base pay"] * 40) + (($employee["hours worked"] - 40) * ($employee["base pay"] * 1.5))) / 100;
        } else {
            $pay = $employee["base pay"] * $employee["hours worked"] / 100;
        }
        echo "{$employee["name"]} will earn " . $pay . "$" . PHP_EOL;
    } else {
        echo "error" . PHP_EOL;
    }

}