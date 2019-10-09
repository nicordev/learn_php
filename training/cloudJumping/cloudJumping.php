<?php

/*
 * HackerRank
 * https://www.hackerrank.com/challenges/jumping-on-the-clouds/problem?h_l=interview&playlist_slugs%5B%5D=interview-preparation-kit&playlist_slugs%5B%5D=warmup&h_r=next-challenge&h_v=zen&h_r=next-challenge&h_v=zen
 */

function countCloudJumps(array $clouds)
{
    $jumps = 0;

    for ($i = 0, $count = count($clouds); $i < $count - 2;) {
        if ($clouds[$i + 2] === "0") {
            $i += 2;
        } else {
            $i++;
        }
        $jumps++;
    }

    if ($i === $count - 2) {
        $jumps++;
    }

    return $jumps;
}

function stringToArray(string $s, string $delimiter = " ")
{
    return explode($delimiter, $s);
}

$data = [
    "0 0 1 0 0 1 0",
    "0 0 0 0 1 0",
    "0 0 1 0 0 1 0",
    "0 0 0 1 0 0"
];

foreach ($data as $datum) {
    $datum = stringToArray($datum);
    echo countCloudJumps($datum) . "\n";
}