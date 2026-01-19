<?php
// classe parent
class Animal
{
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function manger() {
        echo "$this->nom mange <br>";
    }

    public function dormir() {
        echo "$this->nom dort <br>";
    }
}

class Oiseau extends Animal{

    public function manger() {
        echo "$this->nom picore des graines <br>";
    }
}

$animal = new Animal("Loki");
$animal->manger();

$oiseau = new Oiseau("Bipbip");
$oiseau->manger();
