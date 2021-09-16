<?php

function ratio(int $part, int $whole) {
    return $part / $whole;
}

$myRatio = ratio(2, 0);

var_dump($myRatio);
