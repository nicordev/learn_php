<?php

class Fruit
{
    public function getName() {
        echo __METHOD__;

        return 'apple';
    }
}

(new Fruit())->getName();
