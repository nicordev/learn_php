<?php

require_once __DIR__ . "/../grid_maker/numbered_grid_string/numbered_grid_string.php";

/**
 * Find coordinates for index, rows and columns beginning at 1
 *
 * @param int $index
 * @param int $width
 * @return array
 */
function findCoordinates(int $index, int $width)
{
    $index--;

    $row = (int) ($index / $width) + 1;

    $column = $index % $width + 1;

    return [$row, $column];
}

/**
 * Find coordinates for index, rows and columns beginning at 0
 *
 * @param int $index
 * @param int $width
 * @return array
 */
function findCoordinatesFromZero(int $index, int $width)
{
    $row = (int) ($index / $width);

    $column = $index % $width;

    return [$row, $column];
}

function main()
{
    echo "Enter the width: ";
    $width = (int) rtrim(fgets(STDIN));

    echo "Do you want the matrix to start from 1? ";
    $matrixFrom1 = rtrim(fgets(STDIN));

    if ("yes" === $matrixFrom1 || "y" === $matrixFrom1) {
        echo makeNumberedGridString($width, $width) . "\n";
        $matrixFrom1 = true;
    } else {
        echo makeNumberedGridStringFromZero($width, $width) . "\n";
        $matrixFrom1 = false;
    }

    echo "Enter the index or leave it blank to quit: ";

    while ("" !== $index = rtrim(fgets(STDIN))) {
        if ($matrixFrom1) {
            $coordinates = findCoordinates($index, $width);
            echo "From 1:\n";
            echo "Row: {$coordinates[0]} Column: {$coordinates[1]}\n";
        } else {
            $coordinates = findCoordinatesFromZero($index, $width);
            echo "From 0:\n";
            echo "Row: {$coordinates[0]} Column: {$coordinates[1]}\n";
        }
    }

    echo "Good bye!\n";
}

main();
