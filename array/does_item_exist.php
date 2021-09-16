<?php

function calculateYearRatio($fruitStats)
{
    return $fruitStats['stats']['year']['ripeFruitCount'] / $fruitStats['stats']['year']['fruitCount'];
}

$fruitStats = [
    'stats' => [
        'year' => [
            'fruitCount' => 0,
            'ripeFruitCount' => 0,
        ]
    ]
];

// Try empty
echo "\nUsing empty:\n";
if (!empty($fruitStats['stats']['year']['fruitCount'])) {
    var_dump(calculateYearRatio($fruitStats));
}

// array_key_exists does not work for a sub-key:
if (array_key_exists('year', $fruitStats)) {
    echo "yes!";
}

echo "\nEnd.\n";
