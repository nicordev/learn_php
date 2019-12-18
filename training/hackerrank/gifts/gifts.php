<?php

/*
 * HackerRank
 *
 * https://www.hackerrank.com/challenges/taum-and-bday/problem
 */

function taumBday($b, $w, $bc, $wc, $z) {
    // Write your code here
    $black = $b;
    $white = $w;
    $blackCost = $bc;
    $whiteCost = $wc;
    $conversionCost = $z;

    if ($blackCost > $whiteCost && ($whiteCost + $conversionCost) < $blackCost) {
        return ($black + $white) * $whiteCost + $black * $conversionCost;
    }

    if ($whiteCost > $blackCost && ($blackCost + $conversionCost) < $whiteCost) {
        return ($black + $white) * $blackCost + $white * $conversionCost;
    }

    return $black * $blackCost + $white * $whiteCost;
}

$counts = [3, 5];
$costs = [3, 4, 1];

echo taumBday($counts[0], $counts[1], $costs[0], $costs[1], $costs[2]);