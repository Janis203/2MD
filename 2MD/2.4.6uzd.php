<?php

//6.uzd
class AsciiFigure
{
    const stars = 8;

    function figure(int $n)
    {
        $hold = $n;
        for ($i = 0; $i < $n; $i++) {
            $hold--;
            echo str_repeat("/", $hold * 4) . str_repeat("*", $i * self::stars) . str_repeat("\\", $hold * 4) . PHP_EOL;
        }
    }
}

$pyramid = new AsciiFigure();
$pyramid->figure(8);