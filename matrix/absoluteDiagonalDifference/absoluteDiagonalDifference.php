<?php

function absoluteDiagonalDifference(array $matrix)
{
    $size = count($matrix[0]);
    $sum1 = $sum2 = 0;

    for ($i = 0; $i < $size; $i++) {
        $sum1 += $matrix[$i][$i];
        $sum2 += $matrix[$size - $i - 1][$i];
    }

    $result = abs($sum1 - $sum2);

    return $result;
}