<?php

function isPrime(int $number)
{
    for ($i = $number - 1; $i > 1; $i--) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function run(int $number)
{
    isPrime($number) ? print "$number is a prime number.\n" : print "$number is not a prime number.\n";
}

echo "Enter a number: ";
$number = intval(fgets(STDIN));
run($number);
