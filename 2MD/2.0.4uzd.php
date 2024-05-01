<?php
//4.uzd
$people = [[
    "name" => "John",
    "surname" => "Doe",
    "age" => 50],
    [
        "name" => "Joe",
        "surname" => "Smith",
        "age" => 18
    ],
    [
        "name" => "Steven",
        "surname" => "Shepard",
        "age" => 4
    ]
];
function check(int $age): bool
{
    if ($age < 18) {
        return false;
    }
    return true;
}
foreach ($people as $person) {
    if (check($person["age"])) {
        echo "{$person["name"]} {$person["surname"]} is over 18 years old!".PHP_EOL;
    } else {
        echo "{$person["name"]} {$person["surname"]} is under 18 years old!".PHP_EOL;
    }
}