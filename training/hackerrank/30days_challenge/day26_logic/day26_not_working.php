<?php

function calculateFine($file)
{
    $actualDate = explode(" ", rtrim(fgets($file)));
    $expectedDate = explode(" ", rtrim(fgets($file)));

    $actualDay = (int) $actualDate[0];
    $actualMonth = (int) $actualDate[1];
    $actualYear = (int) $actualDate[2];

    $expectedDay = (int) $expectedDate[0];
    $expectedMonth = (int) $expectedDate[1];
    $expectedYear = (int) $expectedDate[2];
    
    if (
        $actualDay <= $expectedDay &&
        $actualMonth <= $expectedMonth &&
        $actualYear <= $expectedYear
    ) {
        return 0;
    }

    if ($actualYear === $actualYear && $actualMonth === $expectedMonth) {
        return 15 * ($actualDay - $expectedDay);
    }

    if ($actualYear === $actualYear) {
        return 500 * ($actualMonth - $expectedMonth);
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

