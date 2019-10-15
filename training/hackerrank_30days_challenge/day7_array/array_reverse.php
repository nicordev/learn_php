<?php

function printReverseArray(array $values)
{
    $reversedArray = array_reverse($values);

    echo implode(" ", $reversedArray);
}

$data = [1, 2, 3, 4];

printReverseArray($data);