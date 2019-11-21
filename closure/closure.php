<?php

class MyClass
{
    private $myAttribute = "zogzog";
}

$getMyAttribute = function () {
    return $this->myAttribute;
};

echo $getMyAttribute->call(new MyClass());
