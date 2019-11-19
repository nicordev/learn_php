<?php

$myAwesomeObject = new class extends \stdClass {
    function sayHi()
    {
        return "Hello world!";
    }
};

$myOtherAwesomeObject = new class {
    function sayBye()
    {
        return "Good bye!";
    }
};

echo $myAwesomeObject->sayHi() . "\n";
echo $myOtherAwesomeObject->sayBye() . "\n";
