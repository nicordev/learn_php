<?php

function addBorder($picture) {

    $width = strlen($picture[0]) + 2;
    $result = [str_repeat("*", $width)];

    foreach ($picture as $item) {
        $result[] = "*" . $item . "*";
    }

    $result[] = str_repeat("*", $width);

    return $result;
}

print_r(addBorder([
    "abc",
    "def"
]));