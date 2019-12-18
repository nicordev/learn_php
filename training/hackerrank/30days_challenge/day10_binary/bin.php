<?php

function countConsecutive1(int $number) {

    $maxCount = $count = 0;
    $bin = decbin($number);

    for ($i = $j = 0, $size = strlen($bin); $i < $size; $i++) {
        if ("1" === $bin[$i]) {
            $count++;
        } else {
            $count = 0;
        }
        if ($count > $maxCount) {
            $maxCount = $count;
        }
    }

    return $maxCount;
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
