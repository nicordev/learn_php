<?php

class Fruit
{
    public function printClass() {
        echo 'self::class ' . self::class . "\n";
        echo 'static::class ' .  static::class . "\n";
    }
}

class Apple extends Fruit
{
}

$apple = new Apple();

$apple->printClass();