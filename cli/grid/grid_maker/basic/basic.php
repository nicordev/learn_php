<?php

function makeGrid(int $width, int $height, string $value = "_")
{
    $grid = [];

    for ($i = 0; $i < $height; $i++) {
        for ($j = 0; $j < $width; $j++) {
            $grid[$i][$j] = $value;
        }
    }

    return $grid;
}

function saveGrid(string $fileName, int $width, int $height, string $blank = "_")
{
    for ($i = 0, $content = "", $grid = makeGrid($width, $height, $blank); $i < $height; $i++) {
        $content .= implode("", $grid[$i]) . "\n";
    }

    file_put_contents($fileName, $content);

    return $grid;
}

function printGrid(array $grid)
{
    $height = count($grid);
    $width = count($grid[0]);

    echo chr(27) . "[H"; // Put the cursor on the screen upper left corner
    echo chr(27) . "[2J"; // Clear the screen

    for ($i = 0; $i < $height; $i++) {
        for ($j = 0; $j < $width; $j++) {
            echo $grid[$i][$j];
        }
        echo "\n";
    }
}

function main()
{
    $invite = 'Enter something to print a grid or leave it blank to quit: ';
    echo $invite;

    while ("" !== $input = rtrim(fgets(STDIN)))
    {
        $grid = saveGrid("grid", 10, 5, $input);
        printGrid($grid);
        echo $invite;
    }

    echo "Good bye!\n";
}

main();
