<?php

class Animal
{
    private $name;
    private $legs;
    private $cool_blooded = "no";

    public function __construct($name, $legs)
    {
        $this->name = $name;
        $this->legs = $legs;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getLegs()
    {
        return $this->legs;
    }
    public function getColdBlooded()
    {
        return $this->cool_blooded;
    }
}
