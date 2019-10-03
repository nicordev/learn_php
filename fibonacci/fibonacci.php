<?php

function iterativeFibonacciSequence(int $n)
{
    $suite = [0, 1];

    for ($i = 1; $i < $n; $i++) {
        $suite[] = $suite[$i - 1] + $suite[$i];
    }

    return $suite;
}

function recursiveFibonacciSequence(int $numberOfTerms, array &$suite = [0, 1], int $current = 1)
{
    if ($current >= $numberOfTerms) {
        return $suite;
    }

    $suite[] = $suite[$current - 1] + $suite[$current];

    return recursiveFibonacciSequence($numberOfTerms, $suite, $current + 1);
}