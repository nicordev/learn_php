<?php

function tryList(array $items)
{
    list($fruit, $quantity, $color) = $items;

    echo "$quantity $color $fruit\n";
}

tryList([
    'apple',
    3,
    'red'
]);
