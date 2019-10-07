<?php

require __DIR__ . "/diagonalSum.php";

function generateMatrix(int $size, int $startingValue, int $step = 1)
{
    $matrix = [];

    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            $matrix[$i][$j] = $startingValue++;
        }
    }

    return $matrix;
}

function printMatrix(array $matrix)
{
    foreach ($matrix as $line) {
        echo implode("\t", $line) . "\n";
    }
}

function askMatrix()
{
    echo "Welcome to the matrix calculator!\n\nNote: to quit, enter 0.\n\n";

    while (true) {
        echo "Size of the matrix: ";
        fscanf(STDIN, "%d\n", $size);

        if (!is_int($size) || $size <= 0) {
            echo "Good bye!\n";
            break;
        }

        echo "Step: ";
        fscanf(STDIN, "%d\n", $step);

        if (!is_int($step) || $step <= 0) {
            echo "Good bye!\n";
            break;
        }

        $matrix = generateMatrix($size, $step);
        $diagonalSum = diagonalSum($matrix);

        printMatrix($matrix);
        echo "Diagonal sum of the matrix: {$diagonalSum}\n\n";
    }
}

askMatrix();