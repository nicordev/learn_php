<?php

require __DIR__ . "/GridMaker/GridMaker.php";

function main()
{
    $invite = 'Enter something to print a grid or leave it blank to quit: ';
    echo $invite;

    while ("" !== $input = rtrim(fgets(STDIN)))
    {
        $grid = GridMaker::makeGrid(10, 10, function (int $i) use ($input) {
            if ($i % 2 === 0) {
                return "_";
            }
            return $input;
        });

        GridMaker::saveGrid("grid", $grid);
        GridMaker::printGrid($grid);
        echo $invite;
    }

    echo "Good bye!\n";
}

main();
