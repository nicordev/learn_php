<?php

function tryBreak(array $items)
{
    foreach ($items as $item) {
        if ($item['break']) {
            echo "break!\n";
            break;
        }

        echo "{$item['name']}\n";

        if (!empty($item['fruit'])) {
            if ($item['fruit']['break']) {
                echo "break!\n";
                break;
            }

            echo "{$item['fruit']['name']}\n";
        }
    }
}

tryBreak([
    [
        'name' => 'sarah croche',
        'break' => false
    ],
    [
        'name' => 'sarah fraichit',
        'break' => true
    ]
]);

tryBreak([
    [
        'name' => 'lenny bards',
        'break' => false,
        'fruit' => [
            'name' => 'peach',
            'break' => false
        ]
    ],
    [
        'name' => 'jim nastique',
        'break' => false,
        'fruit' => [
            'name' => 'apple',
            'break' => true
        ]
    ]
]);