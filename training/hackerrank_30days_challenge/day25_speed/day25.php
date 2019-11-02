<?php

function isPrime(int $number)
{
    if ($number === 1) {
        return false;
    }

    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function run($file)
{
    $numberOfTestCases = intval(fgets($file));

    while (!feof($file)) {
        isPrime(intval(fgets($file))) ? print "Prime\n" : print "Not prime\n";
    }
}

function runCLI(int $number)
{
    isPrime($number) ? print "$number is a prime number.\n" : print "$number is not a prime number.\n";
}

echo 'Read a file? (y or n) ';
$readFile = rtrim(fgets(STDIN));

if ($readFile === "y") {
    $filePath = __DIR__ . "/test_case/test_case_9/test_case_9_input.txt";
    $file = fopen($filePath, "r");
    run($file);

} else {
    echo "Enter a number: ";
    $number = intval(fgets(STDIN));
    runCLI($number);
}


