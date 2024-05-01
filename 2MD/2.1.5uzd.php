<?php
//9.uzd
//BMI = weight x 703 / height ^ 2 , 18.5 and 25 must accept metric
$question = strtolower(readline("metric or imperial?"));
if ($question === "metric") {
    $setting = 1;
} elseif ($question === "imperial") {
    $setting = 2;
} else {
    echo "error";
    exit();
}
$weight = (int)readline("Enter your weight in pounds or kg: ");
$height = (int)readline("Enter your height in inches or cm: ");
if ($setting === 1) {
    $weight *= 2.20462262;
    $height *= 0.393700787;
}
$bmi = floor($weight * 703 / ($height ** 2) * 100) / 100;
if ($bmi >= 18.5 && $bmi <= 25) {
    echo "Your bmi is optimal $bmi" . PHP_EOL;
} elseif ($bmi < 18.5) {
    echo "You are underweight $bmi" . PHP_EOL;
} else {
    echo "You are overweight $bmi" . PHP_EOL;
}