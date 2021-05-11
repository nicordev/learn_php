<?php

function sortArrayBy(array &$items, array $order, string $property)
{
    usort($items, function ($a, $b) use ($order, $property) {
        $weightA = $a[$property];
        $weightB = $b[$property];

        return $order[$weightA] - $order[$weightB];
    });
}

function printArray(array $items) {
    foreach ($items as $item) {
        echo json_encode($item)."\n";
    }
}

$basket = [
    [
        'fruit' => 'raspberry',
        'color' => 'red',
    ],
    [
        'fruit' => 'apple',
        'color' => 'yellow',
    ],
    [
        'fruit' => 'pear',
        'color' => 'green',
    ],
    [
        'fruit' => 'peach',
        'color' => 'purple',
    ]
];

echo "sort by name:\n";

sortArrayBy(
    $basket,
    [
        'apple' => 1,
        'peach' => 2,
        'pear' => 3,
        'raspberry' => 4
    ],
    'fruit'
);
printArray($basket);

echo "sort by color:\n";

sortArrayBy(
    $basket,
    [
        'green' => 1,
        'yellow' => 2,
        'purple' => 3,
        'red' => 4
    ],
    'color'
);
printArray($basket);