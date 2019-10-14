<?php

function getFileLines(string $file)
{
    $file = fopen($file, "r");
    $lines = [];

    while (!feof($file)) {
        $lines[] = rtrim(fgets($file));
    }

    return $lines;
}

$lines = getFileLines(__DIR__ . "/testFiles/myFile.zog");

var_dump($lines);