<?php

$fruits = [
    'apple' => 3,
    'pear' => [],
    'cherry' => null
];

function compare(array $items, string $key)
{
    @$results = [
        'empty()' => empty($items[$key]),
        'isset() && boolval()' => isset($items[$key]) && boolval($items[$key]),
        'isset()' => isset($items[$key]),
        'boolval()' => boolval($items[$key]),
        "null === $key" => null === $items[$key]
    ];

    echo "\n$key:\n";

    foreach ($results as $key => $value) {
        echo "  $key: ".var_export($value, true)."\n";
    }
}

compare($fruits, 'hello');
compare($fruits, 'apple');
compare($fruits, 'pear');
compare($fruits, 'cherry');