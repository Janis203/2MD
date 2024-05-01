<?php

$gameField = [
    ["", "", ""], ["", "", ""], ["", "", ""]
];
$turn = 1;
function display_board($array)
{
    echo "  {$array[0][0]} |  {$array[0][1]} |  {$array[0][2]} \n";
    echo "----+----+----\n";
    echo "  {$array[1][0]} |  {$array[1][1]} |  {$array[1][2]} \n";
    echo "----+----+----\n";
    echo "  {$array[2][0]} |  {$array[2][1]} |  {$array[2][2]} \n";
}

display_board($gameField);
while ($turn <= 9) {
    if ($turn % 2 === 0) {
        $play = 'X';
    } else {
        $play = 'O';
    }
    echo "'$play' , choose your location (row, column): ";
    $place = readline();
    echo PHP_EOL;
    $coordinates = explode(' ', $place);
    if (count($coordinates) == 2 && $coordinates[0] >= 0 && $coordinates[0] <= 2 &&
        $coordinates[1] >= 0 && $coordinates[1] <= 2 && $gameField[$coordinates[0]][$coordinates[1]] === "") {
        $gameField[$coordinates[0]][$coordinates[1]] = $play;
    } else {
        echo "error" . PHP_EOL;
        continue;
    }
    //horizontal win
    if (($gameField[0][0] === $gameField[0][1] && $gameField[0][1] === $gameField[0][2] && $gameField[0][2] === $play) ||
        ($gameField[1][0] === $gameField[1][1] && $gameField[1][1] === $gameField[1][2] && $gameField[1][2] === $play) ||
        ($gameField[2][0] === $gameField[2][1] && $gameField[2][1] === $gameField[2][2] && $gameField[2][2] === $play) ||
        //vertical win
        ($gameField[0][0] === $gameField[1][0] && $gameField[1][0] === $gameField[2][0] && $gameField[2][0] === $play) ||
        ($gameField[0][1] === $gameField[1][1] && $gameField[1][1] === $gameField[2][1] && $gameField[2][1] === $play) ||
        ($gameField[0][2] === $gameField[1][2] && $gameField[1][2] === $gameField[2][2] && $gameField[2][2] === $play) ||
        //diagonal win
        ($gameField[0][0] === $gameField[1][1] && $gameField[1][1] === $gameField[2][2] && $gameField[2][2] === $play) ||
        ($gameField[0][2] === $gameField[1][1] && $gameField[1][1] === $gameField[2][0] && $gameField[2][0] === $play)) {
        echo "$play wins" . PHP_EOL;
        display_board($gameField);
        exit;
    }

    display_board($gameField);
    $turn++;
    if ($turn > 9) {
        echo "The game is a tie." . PHP_EOL;
    }
}