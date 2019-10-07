<?php

/**
 * Convert an array of strings to a 2 dimensional array
 *
 * @param array $strings
 * @param string $separator
 * @return array
 */
function convertArrayOfStringsToTwoDimensionalArray(array $strings, string $separator = " ")
{
    $result = [];

    foreach ($strings as $string) {
        $result[] = explode($separator, $string);
    }

    return $result;
}

/**
 * Convert a multiline string into a 2 dimensional array
 *
 * @param string $arrayAsString
 * @param string $separator
 * @return array
 */
function makeTwoDimensionalArrayFromString(string $arrayAsString, string $separator = " ")
{
    $lines = explode(PHP_EOL, $arrayAsString);
    $array = [];

    foreach ($lines as $line) {
        $array[] = explode($separator, $line);
    }

    return $array;
}

/**
 * Convert a multiline string into a string representing a two dimensional array
 *
 * @param string $string
 * @param int $level
 * @return mixed
 */
function convertMultilineStringToStringRepresentingArray(string $string, int $level = 1)
{
    $array = makeTwoDimensionalArrayFromString($string, " ");
    $result = "[\n";
    $tabs = str_repeat("\t", $level);

    foreach ($array as $item) {
        $result .= "{$tabs}[" . implode(", ", $item) ."],\n";
    }

    return substr_replace($result, "\n\t]", strlen($result) - 2, 2);
}

/**
 * Convert an array of multiline strings into a string representing a three dimensional array
 *
 * @param array $strings
 * @return mixed
 */
function convertArrayOfMultilineStringsToStringRepresentingArray(array $strings)
{
    $result = "[\n";

    foreach ($strings as $string) {
        $string = convertMultilineStringToStringRepresentingArray($string, 2);
        $result .= "\t{$string},\n";
    }

    return substr_replace($result, "\n]", strlen($result) - 2, 2);
}

