<?php

// Complete the serviceLane function below.
function serviceLane($n, $cases, $widths) {

    $maxWidths = [];

    foreach ($cases as $edges) {
        for ($i = $edges[0], $min = $widths[$edges[0]]; $i <= $edges[1]; $i++) {
            if ($widths[$i] < $min) {
                $min = $widths[$i];
            }
        }
        $maxWidths[] = $min;
    }

    return $maxWidths;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nt_temp);
$nt = explode(' ', $nt_temp);

$n = intval($nt[0]);

$t = intval($nt[1]);

fscanf($stdin, "%[^\n]", $width_temp);

$width = array_map('intval', preg_split('/ /', $width_temp, -1, PREG_SPLIT_NO_EMPTY));

$cases = [];

for ($i = 0; $i < $t; $i++) {
    fscanf($stdin, "%[^\n]", $cases_temp);
    $cases[] = array_map('intval', preg_split('/ /', $cases_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = serviceLane($n, $cases, $width);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($stdin);
fclose($fptr);
