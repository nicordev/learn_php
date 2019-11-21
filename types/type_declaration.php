<?php

// Type declaration

// declare(strict_types = 1); // Uncomment this line and you'll see errors due to conversion to integer

function sum(int ...$numbers)
{
    return array_sum($numbers);
}

function sumOf2(int $a, int $b)
{
    return $a + $b;
}

echo sum(1, 2, 3, 4, 5) . "\n";
echo sum(1, "2", 3.1, "4", 5) . "\n";
echo sumOf2(1.1, "2");
