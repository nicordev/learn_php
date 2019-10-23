<?php

/**
 * Return a numbered grid as string
 *
 * @param int $width
 * @param int $height
 * @return string
 */
function makeNumberedGridString(int $width, int $height)
{
    $grid = [];

    for ($i = $k = 0; $i < $height; $i++) {
        $row = [];

        for ($j = 0; $j < $width; $j++) {
            $row[] = ++$k;
        }
        $grid[] = implode("\t", $row);
    }

    return implode("\n", $grid);
}

/**
 * Return a numbered grid as string
 *
 * @param int $width
 * @param int $height
 * @return string
 */
function makeNumberedGridStringFromZero(int $width, int $height)
{
    $grid = [];

    for ($i = $k = 0; $i < $height; $i++) {
        $row = [];

        for ($j = 0; $j < $width; $j++) {
            $row[] = $k++;
        }
        $grid[] = implode("\t", $row);
    }

    return implode("\n", $grid);
}
