<?php
include 'animal.php';

class frog extends Animal
{
    private $suara = "Hop-hop";
    public function jump()
    {
        return $this->suara;
    }
}

class ape extends Animal
{
    private $suara = "Auoo";
    public function yell()
    {
        return $this->suara;
    }
}
