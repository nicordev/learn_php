<?php

function alphabet_position(string $s): string
{
    $positions = [];

    for ($i = 0, $size = strlen($s); $i < $size; $i++) {
        $position = getPosition($s[$i]);

        if ($position) {
            $positions[] = getPosition($s[$i]);
        }
    }

    return implode(" ", $positions);
}

function getPosition(string $character)
{
    $code = ord(strtolower($character));

    if ($code < 97 || $code > 122) {
        return;
    }

    return $code - 96;
}

echo alphabet_position("The sunset sets at twelve o\' clock.");
