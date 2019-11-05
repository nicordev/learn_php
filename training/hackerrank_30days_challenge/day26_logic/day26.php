<?php

function buildDate(string $date)
{
    $dateParts = explode(" ", $date);
    $year = $dateParts[2];
    $month = strlen($dateParts[1]) === 1 ? '0' . $dateParts[1] : $dateParts[1];
    $day = strlen($dateParts[0]) === 1 ? '0' . $dateParts[0] : $dateParts[0];

    return new DateTime("{$year}-{$month}-{$day}");
}

function calculateFine($file)
{
    $actualDate = buildDate(rtrim(fgets($file)));
    $expectedDate = buildDate(rtrim(fgets($file)));
    
    if ($actualDate <= $expectedDate) {
        return 0;
    }

    if ($actualDate->format("Y") === $expectedDate->format("Y")) {
        $delay = $expectedDate->diff($actualDate);

        if ($actualDate->format("m") === $expectedDate->format("m")) {
            return 15 * $delay->days;
        }

        return 500 * $delay->days;
    }

    return 10000;
}

function run()
{
    echo "Do you want to read the test file? (y or n): ";

    if (rtrim(fgets(STDIN)) === "y") {
        $file = fopen(__DIR__ . "/test_case/test_0.txt", "r");
        echo "Result: " . calculateFine($file) . "\n";
        echo "Expected result: " . fgets($file) . "\n";
    } else {
        echo 'Enter actual date then expected date like "day month year": ';
        echo calculateFine(fopen("php://stdin", "r")) . "\n";
    }
}

run();

// Enter dates like "day month year"
// Enter actual date then expected date

