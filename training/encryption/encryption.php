<?php

/*
 * HackerRank
 *
 * https://www.hackerrank.com/challenges/encryption/problem
 */

// Complete the encryption function below.
function encryption($s)
{
    $noSpaceMessage = str_replace(" ", "", $s);
    $noSpaceLength = strlen($noSpaceMessage);
    $columnCount = (int) ceil(sqrt($noSpaceLength));
    $words = [];

    for ($i = $column = 0; $i < $noSpaceLength; $i++) {

        if (!isset($words[$column])) {
            $words[] = ""; // To avoid PHP "Undefined offset" notice
        }

        $words[$column] .= $noSpaceMessage[$i];

        if (++$column >= $columnCount) {
            $column = 0;
        }
    }

    return implode(" ", $words);
}

//$data = "have a nice day";
$data = "feedthedog";

$zog =
"
feed
thed
og
"
;

echo encryption($data);
