<?php

function firstDuplicate(array $a) {

    $countValues = array_count_values($a);
    $keys = [];

    foreach ($countValues as $value => $occurrences) {
        if ($occurrences > 1) {
            $keys[$value] = array_keys($a, $value)[1];
            $continue = true;
        }
    }

    if (!isset($continue)) {
        return -1;
    }

    $minKey = min($keys);

    return $a[$minKey];
}

$a = [2, 1, 3, 5, 3, 2, 7, 8, 52, 32, 7];

echo firstDuplicate($a);