<?php

function putInBasket(...$fruits) {
    return $fruits;
}

$apple = 'apple';
$peach = 'peach';
$peer = 'peer';

$basket = putInBasket($apple, $peach, $peer);

var_dump($basket);

var_dump(putInBasket());