<?php

use App\Greet\Greeter;

require __DIR__.'/vendor/autoload.php';

$greeter = new Greeter();

$greeter->greet('World');