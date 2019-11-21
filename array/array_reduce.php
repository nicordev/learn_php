
-- array_reduce() --

-> Apply a callback to an array to replace the array by only one value.

<?php

function sum($total, $value)
{
    $total += $value;
    return $total;
}

$numbers = [1, 2, 3, 4, 5];

echo array_reduce($numbers, "sum") . " because 1 + 2 + 3 + 4 + 5 = 15\n"  .
    array_reduce($numbers, "sum", 87) . " because 87 + 15 = 102";
