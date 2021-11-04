<?php

function calculateYearRatio($fruitStats)
{
    return $fruitStats['stats']['year']['ripeFruitCount'] / $fruitStats['stats']['year']['fruitCount'];
}

$fruitStats = [
    'stats' => [
        'year' => [
            'fruitCount' => 12,
            'ripeFruitCount' => 4,
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

// won't break:
if (empty($fruitStats['unknownKey'])) {
    echo "these key does not exist or is empty.\n";
}

// will break:
if (array_key_exists('year', $fruitStats['unknownKey'])) {
    echo "yes!";
}

echo "\nEnd.\n";
