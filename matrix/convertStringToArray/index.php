<?php

require __DIR__ . "/convertStringToArray.php";

function convertStringToArrayToString(string $string)
{
    $array = makeTwoDimensionalArrayFromString($string, " ");
    $result = "[\n";

    foreach ($array as $item) {
        $result .= "\t[" . implode(", ", $item) ."],\n";
    }

    return substr_replace($result, "\n]", strlen($result) - 2, 2);
}

$string = "1 2 3
4 5 6
9 8 9";

echo convertStringToArrayToString($string);