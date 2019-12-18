<?php

/*
 * HackerRank
 * https://www.hackerrank.com/challenges/sock-merchant/problem?h_l=interview&playlist_slugs%5B%5D=interview-preparation-kit&playlist_slugs%5B%5D=warmup
 */

function countPairs(array $values)
{
    $counts = array_count_values($values);

    foreach ($counts as $value => &$count) {
        if ($count % 2 !== 0) {
            $count--;
        }
        $count /= 2;
    }

    return array_sum($counts);
}

$values = explode (" ", "10 20 20 10 10 30 50 10 20");

echo countPairs($values);