<?php

require_once __DIR__ . "/../grid_maker/numbered_grid_string/numbered_grid_string.php";

function findIndex(int $row, int $column, int $width)
{
    return  ($row * $width) + $column;
}

function askInteger(string $message, &$response)
{
    echo $message;
    $input = rtrim(fgets(STDIN));

    if ($input === "") {
        return false;
    }

    $response = $input;

    return true;
}

function main()
{
    $row = $column = $width = 0;

    echo "Matrix starting from 0\n";

    while (true) {
        if (
            !askInteger("Enter the row: ", $row) ||
            !askInteger("Enter the column: ", $column) ||
            !askInteger("Enter the width: ", $width)
        ) {
            break;
        }
        echo makeNumberedGridStringFromZero($width, $width) . "\n";
        $index = findIndex($row, $column, $width);
        echo "Index at [{$row}, {$column}]: {$index}\n";
    }

    echo "Good bye!\n";
}

main();

