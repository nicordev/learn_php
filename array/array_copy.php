<?php

$fruits = [
    'apple' => [
        'golden' => 4,
        'pink lady' => 35
    ],
    'pear' => [
        'yellow' => 64,
        'green' => 3
    ]
];

$otherFruits = $fruits;

echo json_encode($fruits)."\n"; // {"apple":{"golden":4,"pink lady":35},"pear":{"yellow":64,"green":3}}

$otherFruits['apple'] = 'zog';

echo json_encode($fruits)."\n"; // {"apple":{"golden":4,"pink lady":35},"pear":{"yellow":64,"green":3}}
echo json_encode($otherFruits)."\n"; // {"apple":"zog","pear":{"yellow":64,"green":3}}
