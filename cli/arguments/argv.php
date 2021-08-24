<?php

print_r($argv);

define('SCRIPT_NAME', array_shift($argv));
define('FUNCTION_NAME', array_shift($argv));

function sayHello($name) {
    echo "Hello {$name}!\n";
}

function getFunctions() {
    echo file_get_contents(__DIR__.'/'.SCRIPT_NAME);
}

call_user_func_array(FUNCTION_NAME, $argv);