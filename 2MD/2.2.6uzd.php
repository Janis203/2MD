<?php
//6.uzd
$words = ["leviathan", "behemoth", "apple", "azazel", "alphabet", "hangman", "cat", "mirror", "flask", "freedom", "bottle", "phone"];
$randomIndex = array_rand($words);
$random = $words[$randomIndex];
$hidden = str_repeat("_ ", strlen($random));
$misses = "";
$failures = 0;
while ($failures < 5) {
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . PHP_EOL;
    echo "Word:   " . $hidden . PHP_EOL;
    echo "Misses: " . $misses . PHP_EOL;
    echo "Guess:  ";
    $guess = strtolower(trim(readline()));
    if (strlen($guess) !== 1) {
        echo "error" . PHP_EOL;
        continue;
    }
    if (strpos($random, $guess) !== false) {
        for ($i = 0; $i < strlen($random); $i++) {
            if ($random[$i] == $guess) {
                $hidden[$i * 2] = $guess;
            }
        }
    } else {
        $misses .= $guess;
        $failures++;
        if ($failures >= 5) {
            echo "YOU LOSE" . PHP_EOL;
            break;
        }
    }
    $wincondition = str_replace(' ', '', $hidden);
    if ($wincondition == $random) {
        echo "YOU GOT IT" . PHP_EOL;
        echo "The word was $random" . PHP_EOL;
        exit;
    }
}