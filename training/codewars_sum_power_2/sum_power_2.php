<?php

function getPowers(int $number)
{
    $binary = strrev(decbin($number)); // Reverse the binary string to sort in ascending order
    $maxPower = strlen($binary) - 1; // In a binary number, each bit corresponds to a power of 2
    $powers = [];

    for ($i = 0; $i <= $maxPower; $i++) {
        if ($binary[$i] === "1") { // If a bit is at 1, then the corresponding power of 2 should be stored
            $powers[] = pow(2, $i);
        }
    }

    return $powers;
}

function getPowers_variant(int $number)
{
    $binary = decbin($number);
    $maxPower = strlen($binary) - 1;
    $powers = [];

    for ($i = $maxPower, $currentPower = 0; $i >= 0; $i--, $currentPower++) {
        if ($binary[$i] === "1") {
            $powers[] = pow(2, $currentPower);
        }
    }

    return $powers;
}

$data = [128, 6, 2, 1];

foreach ($data as $datum) {
    echo implode(" ", getPowers($datum)) . "\n";
}


/*
function getPowers(int $number)
{
    $results = [];

    for ($i = $number; $i > 0 && $number > 0; $i--) {
        $currentPower = pow(2, $i);

        if ($number - $currentPower >= 0) {
            $number -= $currentPower;
            $results[] = $currentPower;
        }
    }

    if ($number === 1) {
        $results[] = 1;
    }

    sort($results);

    return $results;
}
*/
