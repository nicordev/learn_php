<?php

/*
 * HackerRank
 *
 * https://www.hackerrank.com/challenges/chocolate-feast/problem?utm_campaign=challenge-recommendation&utm_medium=email&utm_source=24-hour-campaign
 */

// Complete the chocolateFeast function below.
function chocolateFeast($n, $c, $m) {

    $eatenBars = intdiv($n, $c);
    $wrappers = $eatenBars;

    while (0 !== $freeBars = intdiv($wrappers, $m)) {
        $wrappers -= $freeBars * $m;
        $eatenBars += $freeBars;
        $wrappers += $freeBars;
    }

    return $eatenBars;
}

$data = [
    [10, 2, 5],
    [12, 4, 4],
    [6, 2, 2]
];

foreach ($data as $datum) {
    echo chocolateFeast($datum[0], $datum[1], $datum[2]) . "\n";
}

