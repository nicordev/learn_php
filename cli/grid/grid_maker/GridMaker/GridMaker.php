<?php

class GridMaker
{
    /**
     * Make a 2 dimensional grid using a callback function to generate values
     *
     * @param int $width
     * @param int $height
     * @param callable $valueGenerator This callback function will receive the cell's row $i and column $j offsets
     * @return array
     */
    public static function makeGrid(
        int $width,
        int $height,
        callable $valueGenerator
    ) {
        $grid = [];

        for ($i = 0; $i < $height; $i++) { // Rows
            for ($j = 0; $j < $width; $j++) { // Columns
                $grid[$i][$j] = $valueGenerator($i, $j);
            }
        }

        return $grid;
    }

    /**
     * Save the grid in a file
     *
     * @param string $fileName
     * @param array $grid
     * @param int|null $height
     * @return array
     */
    public static function saveGrid(
        string $fileName,
        array &$grid,
        ?int $height = null
    ) {
        self::countHeight($grid, $height);

        for ($i = 0, $content = ""; $i < $height; $i++) {
            $content .= implode("", $grid[$i]) . "\n";
        }

        file_put_contents($fileName, $content);

        return $grid;
    }

    /**
     * Print the grid on the screen
     *
     * @param array $grid
     * @param int|null $height
     */
    public static function printGrid(
        array &$grid,
        ?int $height = null
    ) {
        self::countHeight($grid, $height);

        echo chr(27) . "[H"; // Put the cursor on the screen upper left corner
        echo chr(27) . "[2J"; // Clear the screen

        for ($i = 0; $i < $height; $i++) {
            echo implode("", $grid[$i]) . "\n";
        }
    }

    /**
     * Count the number of lines of a grid if no height is provided
     *
     * @param array $grid
     * @param int|null $height
     * @return int|null
     */
    private static function countHeight(array &$grid, ?int &$height)
    {
        if (null === $height) {
            $height = count($grid);
        }

        return $height;
    }
}
