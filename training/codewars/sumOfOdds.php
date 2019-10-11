<?php

/*
 * CodeWars
 * https://www.codewars.com/kata/sum-of-odd-numbers/train/php
 */

// Better way
function rowSumOddNumbers_better($n) {
    return $n **3;
}

function rowSumOddNumbers($n) {

    $rows = [];
    $oddValue = 1;

    for ($i = $j = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++, $oddValue += 2) {
            $rows[$i][] = $oddValue;
        }
    }

    return array_sum($rows[$n]);
}

$data = [1, 2, 3, 4];

foreach ($data as $datum) {
    echo $datum . " => " . rowSumOddNumbers($datum) . " " . rowSumOddNumbers_better($datum) . "\n";
}