<?php

function cutTheSticks(array $sticks)
{
    $results = [];

    while (!empty($sticks)) {
        $results[] = count($sticks);
        $cutLength = min($sticks);
        $sticks = array_filter($sticks, function (&$stick) use ($cutLength) {
            if ($stick === $cutLength) {
                return false;
            }
            $stick -= $cutLength;
            return true;
        });
    }

    return $results;
}

$data = explode(" ", "1 2 3 4 3 3 2 1");

echo implode("\n", cutTheSticks($data));
