<?php

function bubbleSort(array $array, ?callable $callback = null)
{
    $switchItems = function (&$item1, &$item2) {
        $temp = $item1;
        $item1 = $item2;
        $item2 = $temp;
    };

    for ($i = 0, $size = count($array); $i < $size - 1; $i++) {
        for ($j = 0; $j < $size - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $switchItems($array[$j], $array[$j + 1]);
            }
        }
        $callback($array);
    }

    return $array;
}

function printArray(array $array, bool $showBars = false, string $glue = " ")
{
    if (!$showBars) {
        echo implode($glue, $array) . "\n";
    } else {
        foreach ($array as $item) {
            echo str_repeat("_", $item) . " $item\n";
        }
    }
}

function testBubbleSort(bool $showBars = false, string $glue = " ") {
    $input = [4, 3, 1, 2, 3, 5, 5, 2, 7, 1];

    printArray($input);
    bubbleSort($input, function ($array) use ($showBars, $glue) {
        printArray($array, $showBars, $glue);
        echo "\n";
    });
}

testBubbleSort(true);
