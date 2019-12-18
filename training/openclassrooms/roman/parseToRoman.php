<?php

/*
 * OpenClassrooms
 *
 * https://openclassrooms.com/fr/courses/6045521-preparez-vous-aux-tests-techniques-pour-devenir-developpeur/6173101-preparez-vous-aux-tests-d-algorithmique#/id/r-6173175
 */

function parseToRoman(int $number)
{
    $decimals = [1000, 500, 100, 50, 10, 5, 1];
    $romans = ["M", "D", "C", "L", "X", "V", "I"];
    $result = "";

    for ($i = 0, $size = count($decimals); $i < $size; $i++) {
        while ($number % $decimals[$i] < $number) {
            $result .= $romans[$i];
            $number -= $decimals[$i];
        }
    }

    return $result;
}

$data = [4, 37, 143, 1234];

foreach ($data as $datum) {
    $roman = parseToRoman($datum);
    echo "$datum: $roman\n";
}