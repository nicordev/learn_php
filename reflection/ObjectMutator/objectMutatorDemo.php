<?php

require '../ObjectMutator/ObjectMutator.php';

class Fruit
{
    private $name = 'apple';
    private $color = 'green';

    public function getName()
    {
        return $this->name;
    }

    public function getColor()
    {
        return $this->color;
    }

    private function changeNameAndColor(string $color, string $name)
    {
        $sentence = "The {$this->color} {$this->name} has been changed to a ";
        $this->name = $name;
        $this->color = $color;

        return $sentence .= "{$this->color} {$this->name}!\n";
    }
}

$myFruit = new Fruit();

echo "{$myFruit->getColor()} {$myFruit->getName()}\n";

ObjectMutator::setPrivateProperty($myFruit, 'name', 'peach');

echo "{$myFruit->getColor()} {$myFruit->getName()}\n";

echo ObjectMutator::callPrivateMethod($myFruit, 'changeNameAndColor', 'red', 'cherry');

echo "{$myFruit->getColor()} {$myFruit->getName()}\n";

