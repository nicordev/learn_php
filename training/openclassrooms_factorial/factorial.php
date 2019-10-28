<?php

function recursiveFactorial($n)
{
    if ($n <= 1) {
        return 1;
    }
    return $n * recursiveFactorial($n - 1);
}

function iterativeFactorial($n)
{
    $result = 1;

    for ($i = $n; $i > 0; $i--) {
        $result *= $i;
    }

    return $result;
}

function printFactorial($n, callable $factorialFunction)
{
    $factorialNumbers = [];

    for ($i = $n; $i > 0; $i--) {
        $factorialNumbers[] = $i;
    }

    $expression = implode(" x ", $factorialNumbers);

    echo "$n! = $expression = " . $factorialFunction($n) . "\n";
}
