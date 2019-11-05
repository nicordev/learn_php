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

$actualDate = buildDate(rtrim(fgets($_fp)));
$expectedDate = buildDate(rtrim(fgets($_fp)));

var_dump($actualDate, $expectedDate);

?>

