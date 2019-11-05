<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

function buildDate(string $date)
{
    $dateParts = explode(" ", $date);
    $year = $dateParts[2];
    $month = strlen($dateParts[1]) === 1 ? '0' . $dateParts[1] : $dateParts[1];
    $day = strlen($dateParts[0]) === 1 ? '0' . $dateParts[0] : $dateParts[0];

    return new DateTime("{$year}-{$month}-{$day}");
}

function run($file)
{
    $actualDate = buildDate(rtrim(fgets($file)));
    $expectedDate = buildDate(rtrim(fgets($file)));

    echo "Actual date: " . $actualDate->format("Y/m/d") . "\n";
    echo "Expected date: " . $expectedDate->format("Y/m/d") . "\n";
    
    var_dump($actualDate < $expectedDate);
}

run($_fp);

?>

