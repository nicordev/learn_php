<?php

/**
 * Calculate the median of an array
 */
function median(array $values)
{
    $count = count($values);

    sort($values);

    if ($count % 2 !== 0) {
        return $values[$count / 2];
    }

    $a = $values[$count / 2 - 1];
    $b = $values[$count / 2];

    return ($a + $b) / 2;
}
