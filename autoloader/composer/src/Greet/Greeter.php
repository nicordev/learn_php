<?php

namespace App\Greet;

class Greeter
{
    public function greet(string $name) {
        echo "Hello ${name}!";
    }
}
