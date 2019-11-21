<?php

function getConnectionCost(array $threads)
{
    $currentValue = min($threads);
    $cost = 0;

    for ($i = 0, $size = count($threads); $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            if (null === $currentValue) {
                break;
            }
            $nextValue = findNextValue($threads, $currentValue);
            $cost += $currentValue + $nextValue;
            $currentValue = $nextValue;
        }
    }

    return $cost;
}

function findNextValue(array &$threads, int $initialValue)
{
    $space = $previousSpace = null;
    $nextValueOffset = null;

    for ($i = 0, $size = count($threads); $i < $size; $i++) {
        if (null !== $previousSpace && $previousSpace < $space = $threads[$i] - $initialValue) {
            $nextValueOffset = $i;
        }

        $previousSpace = $space;
    }

    return $nextValueOffset;
}

$data = [4,3,2,6];

echo getConnectionCost($data);
