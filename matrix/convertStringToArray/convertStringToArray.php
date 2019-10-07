<?php

function makeTwoDimensionalArrayFromString(string $arrayAsString, string $separator = " ")
{
    $lines = explode(PHP_EOL, $arrayAsString);
    $array = [];

    foreach ($lines as $line) {
        $array[] = explode($separator, $line);
    }

    return $array;
}

