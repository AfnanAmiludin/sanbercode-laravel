<?php
require_once('animal.php');

class Frog extends Animal
{
    private $suara = "Hop-hop";
    public function jump()
    {
        return $this->suara;
    }
}

class Ape extends Animal
{
    private $suara = "Auoo";
    public function yell()
    {
        return $this->suara;
    }
}
