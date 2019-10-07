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

function convertStringToArrayToString(string $string, int $level = 1)
{
    $array = makeTwoDimensionalArrayFromString($string, " ");
    $result = "[\n";
    $tabs = str_repeat("\t", $level);

    foreach ($array as $item) {
        $result .= "{$tabs}[" . implode(", ", $item) ."],\n";
    }

    return substr_replace($result, "\n\t]", strlen($result) - 2, 2);
}

function convertArrayOfStringsToArrayOfArraysToStrings(array $strings)
{
    $result = "[\n";

    foreach ($strings as $string) {
        $string = convertStringToArrayToString($string, 2);
        $result .= "\t{$string},\n";
    }

    return substr_replace($result, "\n]", strlen($result) - 2, 2);
}

