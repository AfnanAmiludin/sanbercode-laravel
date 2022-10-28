<?php

include 'animal.php';

$sheep = new Animal("shaun", 4);
echo "Name: " . $sheep->getName() . "<br>"; // "shaun"
echo "Legs: " . $sheep->getLegs() . "<br>"; // 4
echo "Cold Blooded: " . $sheep->getColdBlooded() . "<br><br>"; // "no"

$sheep = new Animal("Buduk", 4);
echo "Name: " . $sheep->getName() . "<br>";
echo "Legs: " . $sheep->getLegs() . "<br>";
echo "Cold Clooded  : " . $sheep->getColdBlooded() . "<br><br>";

$sheep = new Animal("Kera sakti", 2);
echo "Name: " . $sheep->getName() . "<br>";
echo "Legs: " . $sheep->getLegs() . "<br>";
echo "Cold Clooded  : " . $sheep->getColdBlooded() . "<br>";

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())