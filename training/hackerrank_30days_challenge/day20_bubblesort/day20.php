<?php

/*
 * https://www.hackerrank.com/challenges/30-sorting/problem?h_r=email&unlock_token=4e48f5e3eb164758e26ecdbb96d425ea2234c9c3&utm_campaign=30_days_of_code_continuous&utm_medium=email&utm_source=daily_reminder
 */

function bubbleSort(array $values, int &$numberOfSwaps = 0)
{
    for ($i = 0, $size = count($values); $i < $size; $i++) {
        $swapCount = 0;

        for ($j = 0; $j < $size - 1; $j++) {
            if ($values[$j] > $values[$j + 1]) {
                $tempValue = $values[$j + 1];
                $values[$j + 1] = $values[$j];
                $values[$j] = $tempValue;
                $swapCount++;
                $numberOfSwaps++;
            }
        }

        if (0 === $swapCount) {
            break;
        }
    }

    return $values;
}

$data = [
    [3, 2, 1],
    [1, 2, 3]
];

foreach ($data as $datum) {
    $numberOfSwaps = 0;
    $sortedDatum = bubbleSort($datum, $numberOfSwaps);
    echo "Array is sorted in $numberOfSwaps swaps.\n";
    echo "First Element: {$sortedDatum[0]}\n";
    echo "Last Element: " . end($sortedDatum) . "\n";
    echo implode(" ", $sortedDatum) . "\n";
}
