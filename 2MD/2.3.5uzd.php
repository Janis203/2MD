<?php
//5.uzd
//ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
$phoneKeyPad = strtoupper(readline("Enter text: "));
$digits = "";
for ($i = 0; $i < strlen($phoneKeyPad); $i++) {
    if ($phoneKeyPad[$i] === "A" || $phoneKeyPad[$i] === "B" || $phoneKeyPad[$i] === "C") {
        if ($phoneKeyPad[$i] === "A") {
            $digits .= "2 ";
        } elseif ($phoneKeyPad[$i] === "B") {
            $digits .= "22 ";
        } else {
            $digits .= "222 ";
        }
    }
    if ($phoneKeyPad[$i] === "D" || $phoneKeyPad[$i] === "E" || $phoneKeyPad[$i] === "F") {
        if ($phoneKeyPad[$i] === "D") {
            $digits .= "3 ";
        } elseif ($phoneKeyPad[$i] === "E") {
            $digits .= "33 ";
        } else {
            $digits .= "333 ";
        }
    }
    if ($phoneKeyPad[$i] === "G" || $phoneKeyPad[$i] === "H" || $phoneKeyPad[$i] === "I") {
        if ($phoneKeyPad[$i] === "G") {
            $digits .= "4 ";
        } elseif ($phoneKeyPad[$i] === "H") {
            $digits .= "44 ";
        } else {
            $digits .= "444 ";
        }
    }
    if ($phoneKeyPad[$i] === "J" || $phoneKeyPad[$i] === "K" || $phoneKeyPad[$i] === "L") {
        if ($phoneKeyPad[$i] === "J") {
            $digits .= "5 ";
        } elseif ($phoneKeyPad[$i] === "K") {
            $digits .= "55 ";
        } else {
            $digits .= "555 ";
        }
    }
    if ($phoneKeyPad[$i] === "M" || $phoneKeyPad[$i] === "N" || $phoneKeyPad[$i] === "O") {
        if ($phoneKeyPad[$i] === "M") {
            $digits .= "6 ";
        } elseif ($phoneKeyPad[$i] === "N") {
            $digits .= "66 ";
        } else {
            $digits .= "666 ";
        }
    }
    if ($phoneKeyPad[$i] === "P" || $phoneKeyPad[$i] === "Q" || $phoneKeyPad[$i] === "R" || $phoneKeyPad[$i] === "S") {
        if ($phoneKeyPad[$i] === "P") {
            $digits .= "7 ";
        } elseif ($phoneKeyPad[$i] === "Q") {
            $digits .= "77 ";
        } elseif ($phoneKeyPad[$i] === "R") {
            $digits .= "777 ";
        } else {
            $digits .= "7777 ";
        }
    }
    if ($phoneKeyPad[$i] === "T" || $phoneKeyPad[$i] === "U" || $phoneKeyPad[$i] === "V") {
        if ($phoneKeyPad[$i] === "T") {
            $digits .= "8 ";
        } elseif ($phoneKeyPad[$i] === "U") {
            $digits .= "88 ";
        } else {
            $digits .= "888 ";
        }
    }
    if ($phoneKeyPad[$i] === "W" || $phoneKeyPad[$i] === "X" || $phoneKeyPad[$i] === "Y" || $phoneKeyPad[$i] === "Z") {
        if ($phoneKeyPad[$i] === "W") {
            $digits .= "9 ";
        } elseif ($phoneKeyPad[$i] === "X") {
            $digits .= "99 ";
        } elseif ($phoneKeyPad[$i] === "Y") {
            $digits .= "999 ";
        } else {
            $digits .= "9999 ";
        }
    }
}
echo $digits . PHP_EOL;
//ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
$digits2 = "";
foreach (str_split($phoneKeyPad) as $key) {
    switch ($key) {
        case "A":
            $digits2 .= "2 ";
            break;
        case "B":
            $digits2 .= "22 ";
            break;
        case "C":
            $digits2 .= "222 ";
            break;
        case "D":
            $digits2 .= "3 ";
            break;
        case "E":
            $digits2 .= "33 ";
            break;
        case "F":
            $digits2 .= "333 ";
            break;
        case "G":
            $digits2 .= "4 ";
            break;
        case "H":
            $digits2 .= "44 ";
            break;
        case "I":
            $digits2 .= "444 ";
            break;
        case "J":
            $digits2 .= "5 ";
            break;
        case "K":
            $digits2 .= "55 ";
            break;
        case "L":
            $digits2 .= "555 ";
            break;
        case "M":
            $digits2 .= "6 ";
            break;
        case "N":
            $digits2 .= "66 ";
            break;
        case "O":
            $digits2 .= "666 ";
            break;
        case "P":
            $digits2 .= "7 ";
            break;
        case "Q":
            $digits2 .= "77 ";
            break;
        case "R":
            $digits2 .= "777 ";
            break;
        case "S":
            $digits2 .= "7777 ";
            break;
        case "T":
            $digits2 .= "8 ";
            break;
        case "U":
            $digits2 .= "88 ";
            break;
        case "V":
            $digits2 .= "888 ";
            break;
        case "W":
            $digits2 .= "9 ";
            break;
        case "X":
            $digits2 .= "99 ";
            break;
        case "Y":
            $digits2 .= "999 ";
            break;
        case "Z":
            $digits2 .= "9999 ";
            break;
        default:
            $digits2 .= " ";
            break;
    }
}
echo $digits2;