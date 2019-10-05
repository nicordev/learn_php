<?php

require __DIR__ . "/testRegex.php";

/**
 * Regular expression corresponding to an integer or a float number, positive or negative
 */
$integerOrFloatRegex = '/^-?\d+(\.\d+)?$/m';

testRegex($integerOrFloatRegex, [
    "1",
    "-1",
    "1.2",
    "1.2.3"
]);
