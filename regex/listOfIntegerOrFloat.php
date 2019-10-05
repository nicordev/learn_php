<?php

require __DIR__ . "/testRegex.php";

/**
 * Regular expression corresponding to a list of integer or float number, positive or negative
 */
$separator = " ";
$listOfIntegerOrFloatRegex = "#^(-?\d+(\.\d+)?){1}({$separator}-?\d+(\.\d+)?)*$#";

testRegex($listOfIntegerOrFloatRegex, [
    "1 2 3",
    "-1 -2 -3",
    "1.2 3.4 5.6",
    "-1.2 -3.4 -5.6",
    "-1.2 -3.4 -5.6 z",
    "a -1.2 -3.4 -5.6 "
]);
