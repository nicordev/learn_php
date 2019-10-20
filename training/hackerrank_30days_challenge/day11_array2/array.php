<?php

/**
 * Convert an array of strings to a 2 dimensional array
 *
 * @param array $strings
 * @param string $separator
 * @return array
 */
function convertArrayOfStringsToTwoDimensionalArray(array $strings, string $separator = " ")
{
    $result = [];

    foreach ($strings as $string) {
        $string = rtrim($string);
        $result[] = explode($separator, $string);
    }

    return $result;
}

function printHourGlasses(array $values)
{
    $width = count($values[0]);
    $height = count($values);

    for ($i = 0; $i <= $height - 3; $i++) {
        for ($j = 0; $j <= $width - 3; $j++) {
            echo "Hourglass $i $j\n";
            echo $values[$i][$j] . " " . $values[$i][$j + 1] . " " . $values[$i][$j + 2] . "\n";
            echo "  " . $values[$i + 1][$j + 1] . "\n";
            echo $values[$i + 2][$j] . " " . $values[$i + 2][$j + 1] . " " . $values[$i + 2][$j + 2] . "\n\n";
        }
    }
}

function maxHourGlassSum(array $values)
{
    $width = count($values[0]);
    $height = count($values);
    $maxSum = null;

    for ($i = 0; $i <= $height - 3; $i++) {
        for ($j = 0; $j <= $width - 3; $j++) {
            $topSum = $values[$i][$j] + $values[$i][$j + 1] + $values[$i][$j + 2];
            $middleValue = $values[$i + 1][$j + 1];
            $hourGlassSum =  $topSum + $middleValue + $values[$i + 2][$j] + $values[$i + 2][$j + 1] + $values[$i + 2][$j + 2];

            if ($hourGlassSum > $maxSum) {
                $maxSum = $hourGlassSum;
            }
        }
    }

    return $maxSum;
}

$inputStrings = [
    "1 1 1 0 0 0
0 1 0 0 0 0
1 1 1 0 0 0
0 0 2 4 4 0
0 0 0 2 0 0
0 0 1 2 4 0",
    "-1 -1 0 -9 -2 -2
-2 -1 -6 -8 -2 -5
-1 -1 -1 -2 -3 -4
-1 -9 -2 -4 -4 -5
-7 -3 -3 -2 -9 -9
-1 -3 -1 -2 -4 -5"
];

foreach ($inputStrings as $inputString) {
    $data[] = convertArrayOfStringsToTwoDimensionalArray(
        explode("\n", $inputString),
        " "
    );
}

$i = 0;
foreach ($data as $item) {
    echo $inputStrings[$i] . "\n";
    echo "\n" . maxHourGlassSum($item) . "\n";
    echo "\n" . printHourGlasses($item) . "\n";
    $i++;
}
