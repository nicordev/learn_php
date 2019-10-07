<?php

require __DIR__ . "/../convertStringToArray/convertStringToArray.php";

/*
 * Problem from hackerrank
 * https://www.hackerrank.com/challenges/plus-minus/problem?utm_campaign=challenge-recommendation&utm_medium=email&utm_source=24-hour-campaign
 */

function plusMinus(array $array)
{
    $size = count($array);
    $positiveCount = 0;
    $negativeCount = 0;
    $zeroCount = 0;

    foreach ($array as $value) {
        if ($value > 0) {
            $positiveCount++;
        } elseif ($value < 0) {
            $negativeCount++;
        } else {
            $zeroCount++;
        }
    }

    $positiveRatio = $positiveCount / $size;
    $negativeRatio = $negativeCount / $size;
    $zeroRatio = 1 - $positiveRatio - $negativeRatio;

    echo round($positiveRatio, 6) . "\n";
    echo round($negativeRatio, 6) . "\n";
    echo round($zeroRatio, 6) . "\n";
}

$data = [
    "-4 3 -9 0 4 1",
    "1 2 3 -1 -2 -3 0 0",
    "0 0 -1 1 1"
];

$array = convertArrayOfStringsToTwoDimensionalArray($data);

foreach ($array as $key => $item) {
    echo "\nCalculate {$data[$key]}\n";
    plusMinus($item);
}