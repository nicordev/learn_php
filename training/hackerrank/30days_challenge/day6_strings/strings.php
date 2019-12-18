<?php

function executeCallbackOnFileLines($file, callable $callback)
{
    while (!feof($file)) {
        $callback(rtrim(fgets($file)));
    }
}

function splitString(string $stringToSplit)
{
    $odds = "";
    $evens = "";

    for ($i = 0, $size = strlen($stringToSplit); $i < $size; $i++) {
        if ($i % 2 === 0) {
            $evens .= $stringToSplit[$i];
        } else {
            $odds .= $stringToSplit[$i];
        }
    }

    return $evens . " " . $odds;
};

$file = fopen(__DIR__ . "/test.txt", "r");
executeCallbackOnFileLines($file, function (string $line) {
    if (!is_numeric($line))
        echo splitString($line) . "\n";
});
fclose($file);