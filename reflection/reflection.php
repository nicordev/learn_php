<?php

class Fruit
{
    private $name = "apple";

    public function getName()
    {
        return $this->name;
    }
}

$myFruit = new Fruit();

echo "{$myFruit->getName()}\n";

$reflectionMyFruit = new ReflectionClass($myFruit);
$reflectionPropertyFruitName = $reflectionMyFruit->getProperty('name');
$reflectionPropertyFruitName->setAccessible(true);
$reflectionPropertyFruitName->setValue($myFruit, 'peach');

echo "{$myFruit->getName()}\n";