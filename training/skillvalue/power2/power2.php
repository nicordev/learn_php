<?php

// Use bits
function isPowerOf2_bits(int $number)
{
    $binary = decbin($number);

    if (substr_count($binary, "1") === 1) {
        return 1;
    }

    return 0;
}

// Divide by 2
function isPowerOf2(int $number)
{
    if ($number === 0) {
        return 0;
    }

    while ($number > 1)
    {
        if ($number % 2 !== 0) {
            return 0;
        }

        $number /= 2;
    }
    return 1;
}

$data = [133, 1, 2, 3, 4, 5, 6, 7, 8];

foreach ($data as $datum) {
    echo decbin($datum) . " ";
    echo isPowerOf2($datum) . " " . isPowerOf2_bits($datum) . "\n";
}
