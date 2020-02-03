<?php

/**
 * Traits can have constructors, but it's not advised to do so.
 * Here we can't pass the cruiseAltitude to the Fly trait.
 * Also only one constructor can be called. Here only the constructor of Light is called.
 * If we set a constructor to the class, then the trait constructors won't be called. To bypass this, we can use aliases.
 */

trait Fly
{
    private $cruiseAltitude;

    public function __contruct(int $cruiseAltitude)
    {
        $this->cruiseAltitude = $cruiseAltitude;
    }

    public function climbTo(int $altitude)
    {
        echo "Climbing to $altitude feet...\n";
        echo "Steady at $altitude feet\n";
    }

    public function climbToCruiseAltitude()
    {
        $this->climbTo($this->cruiseAltitude);
    }
}

trait Light
{
    private $lights = [];

    public function __construct(array $lights)
    {
        $this->lights = $lights;
    }

    public function switchAll(bool $on = true)
    {
        $status = $on ? "on" : "off";

        foreach ($this->lights as $light) {
            echo "$light $status.\n";
        }
    }
}

class Aircraft
{
    use Fly, Light;

    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

$myLights = ["landing lights", "strobe", "position lights"];
$myPlane = new Aircraft('mirage');

$myPlane->climbTo(1000);
$myPlane->switchAll(true);
$myPlane->switchAll(false);
$myPlane->climbToCruiseAltitude();