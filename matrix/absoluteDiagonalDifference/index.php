<?php

require __DIR__ . "/absoluteDiagonalDifference.php";

function printMatrix(array $matrix)
{
    foreach ($matrix as $line) {
        echo implode("\t", $line) . "\n";
    }
}

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [9, 8, 9]
];

printMatrix($matrix);

echo "Absolute diagonal difference: " . absoluteDiagonalDifference($matrix) . "\n";