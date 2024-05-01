<?php
//3.uzd
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 5;
function check(int $age): bool
{
    if ($age < 18) {
        return false;
    }
    return true;
}

if (check($person->age)) {
    echo "{$person->name} {$person->surname} is over 18 years old!";
} else {
    echo "{$person->name} {$person->surname} is under 18 years old!";
}