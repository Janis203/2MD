<?php
//6.uzd
//3-"Coza",5-"Loza",7-"Woza", 3&5-"CozaLoza"...
$count = 0;
for ($i = 1; $i <= 110; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "CozaLoza ";
        $count++;
    } elseif ($i % 3 === 0 && $i % 7 === 0) {
        echo "CozaWoza ";
        $count++;
    } elseif ($i % 5 === 0 && $i % 7 === 0) {
        echo "LozaWoza ";
        $count++;
    } elseif ($i % 7 === 0) {
        echo "Woza ";
        $count++;
    } elseif ($i % 5 === 0) {
        echo "Loza ";
        $count++;
    } elseif ($i % 3 === 0) {
        echo "Coza ";
        $count++;
    } else {
        echo "$i ";
        $count++;
    }
    if ($count === 11) {
        echo PHP_EOL;
        $count = 0;
    }
}