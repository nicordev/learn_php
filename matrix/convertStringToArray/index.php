<?php

require __DIR__ . "/convertStringToArray.php";

$strings = [
    "1 2 3
4 5 6
9 8 9",
    "11 2 4
4 5 6
10 8 -12"
];

echo convertArrayOfStringsToArrayOfArraysToStrings($strings);