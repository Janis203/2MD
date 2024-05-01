<?php
//3.uzd
trim($firstWord = readline("Enter first word: "));
trim($secondWord = readline("Enter second word: "));
if ((strlen($firstWord) + strlen($secondWord)) > 30) {
    echo "error";
    exit;
}
$amount = 30 - strlen($firstWord) - strlen($secondWord);
echo $firstWord;
for ($i = 0; $i < $amount; $i++) {
    echo ".";
}
echo $secondWord;

