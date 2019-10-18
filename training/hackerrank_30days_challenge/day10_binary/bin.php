<?php

function countConsecutive1(int $number) {

    $bin = decbin($number);
    $occurrencesOf1 = [];

    if ($bin === "0") {
        return 0;
    }

    if ($bin === "1") {
        return 1;
    }

    for ($i = $j = 0, $size = strlen($bin); $i < $size;) {
        if (!isset($occurrencesOf1[$j])) {
            $occurrencesOf1[] = 0;
        }
        for ($k = $i; $k < $size && $bin[$k] === "1"; $k++) {
            $occurrencesOf1[$j]++;
        }
        $j++;
        $i = ++$k;
    }

    return max($occurrencesOf1);
}

$continue = true;

while ($continue) {
    echo "\nEnter a number: ";
    $n = (int) rtrim(fgets(STDIN));

    if ($n === 0) {
        $continue = false;
    }

    echo countConsecutive1($n);
}
