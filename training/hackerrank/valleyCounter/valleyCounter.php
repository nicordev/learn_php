<?php

/*
 * HackerRank
 * https://www.hackerrank.com/challenges/counting-valleys/problem?h_l=interview&playlist_slugs%5B%5D=interview-preparation-kit&playlist_slugs%5B%5D=warmup&h_r=next-challenge&h_v=zen
 */

function countValleys(string $steps)
{
    $alt = $valleyCount = 0;
    $topo = [];

    for ($i = 0, $stepCount = strlen($steps); $i < $stepCount; $i++) {
        if ($steps[$i] === "D") {
            $alt--;
        } elseif ($steps[$i] === "U") {
            $alt++;
        }

        if ($alt > 0) {
            $topo[] = 1;
        } elseif ($alt < 0) {
            $topo[] = -1;
        } else {
            $topo[] = 0;
        }

        if ($i > 0 && $alt === 0 && $topo[$i - 1] < 0) {
            $valleyCount++;
        }
    }

    return $valleyCount;
}

$data = [
    "UDDDUDUU",
    "DUD",
    "DU",
    "DUDUDU",
    "DDUUDDUUUDDDUUU"
];

foreach ($data as $datum) {
    echo countValleys($datum) . "\n";
}