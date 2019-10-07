<?php

require __DIR__ . "/absoluteDiagonalDifference.php";

function printMatrix(array $matrix)
{
    foreach ($matrix as $line) {
        echo implode("\t", $line) . "\n";
    }
}

$data = [
    [
        [1, 2, 3],
        [4, 5, 6],
        [9, 8, 9]
    ],
    [
        [11, 2, 4],
        [4, 5, 6],
        [10, 8, -12]
    ]
];

array_map(function ($matrix) {
    printMatrix($matrix);
    echo "Absolute diagonal difference: " . absoluteDiagonalDifference($matrix) . "\n";
}, $data);