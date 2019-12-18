<?php

function checkInteger(string $s)
{
    set_error_handler(function ($errorCode, $errorMessage) {
        throw new Exception($errorMessage, $errorCode);
    });

    try {
        $zog = $s * 43;
    } catch (Exception $e) {
        return "Bad String\n";
    }
    return (int) $s;
}

$data = [
    "3",
    "3Z",
    "zogzog"
];

foreach ($data as $datum) {
    echo checkInteger($datum);
}

