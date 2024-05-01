<?php
//1.uzd
function output(string $text): string
{
    return $text . "codelex";
}

$input = readline("Enter text: ");
echo output($input);