<?php

function flatten(array $items) {
    return array_merge(...$items);
}

$fruits = [
    [
        'fjjfx' => [
            'name' => 'apple',
            'color' => 'red',
        ]
    ],
    [
        'sizoekcv' => [
            'name' => 'banana',
            'color' => 'yellow',
        ]
    ],
    [
        'bshzu' => [
            'name' => 'cherry',
            'color' => 'red',
        ],
    ],
];

var_dump(flatten($fruits));
