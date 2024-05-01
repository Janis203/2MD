<?php

//10.uzd
class Geometry
{
    public static function circle()
    {
        $radius = (int)readline("Enter radius: ");
        if ($radius > 0) {
            return pi() * $radius ** 2;
        }
        return "error" . PHP_EOL;
    }

    public static function rectangle()
    {
        $length = (int)readline("Enter length: ");
        $width = (int)readline("Enter width: ");
        if ($length > 0 && $width > 0) {
            return $length * $width;
        }
        return "error" . PHP_EOL;
    }

    public static function triangle()
    {
        $base = (int)readline("Enter base: ");
        $height = (int)readline("Enter height: ");
        if ($base > 0 && $height > 0) {
            return $base * $height * 0.5;
        }
        return "error" . PHP_EOL;
    }
}

while (true) {
    echo "Geometry Calculator: \n\n";
    echo "1. Calculate the Area of a Circle\n";
    echo "2. Calculate the Area of a Rectangle\n";
    echo "3. Calculate the Area of a Triangle\n";
    echo "4. Quit\n";
    echo "Enter your choice (1-4) : \n";
    $input = (int)readline();
    switch ($input) {
        case 1:
            echo "The area of the circle is: " . Geometry::circle() . PHP_EOL;
            break;
        case 2:
            echo "The area of the rectangle is: " . Geometry::rectangle() . PHP_EOL;
            break;
        case 3:
            echo "The area of the triangle is: " . Geometry::triangle() . PHP_EOL;
            break;
        case 4:
            exit();
        default:
            echo "error" . PHP_EOL;
            break;
    }
}