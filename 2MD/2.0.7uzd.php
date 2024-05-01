<?php
//7.uzd
$person = new stdClass();
$person->name = "John Doe";
$person->licenses = "Pistol Shotgun AK-47";
$person->cash = 5000;
$guns = [
    [
        "license" => "Pistol",
        "cost" => 2799,
        "name" => "2mm Kolibri"
    ],
    [
        "license" => "Shotgun",
        "cost" => 4999,
        "name" => "Akdal MKA 1919"
    ],
    [
        "license" => "AK-47",
        "cost" => 8000,
        "name" => "Automat Kalashnikova 1947"
    ],
    [
        "license" => "Uzi",
        "cost" => 50,
        "name" => "Uzi submachine gun"
    ],
    [
        "license" => "Shotgun",
        "cost" => 1000,
        "name" => "Armsel Striker"
    ],
];
$numberOfGuns = 0;
foreach ($guns as $gun) {
    if (strpos($person->licenses, $gun["license"]) !== false && ($person->cash >= $gun["cost"])) {
        echo "$person->name you can buy {$gun["name"]} for {$gun["cost"]}" . PHP_EOL;
        $numberOfGuns++;
    }
}
if ($numberOfGuns === 0) {
    echo "You can't buy any guns here" . PHP_EOL;
}