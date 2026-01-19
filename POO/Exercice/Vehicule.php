<?php 

abstract class Vehicule{
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    abstract public function demarrer();   
}

class Voiture extends Vehicule{
    public function demarrer(){
        echo "$this->nom demarre en enlevant le frein à main <br>";
    }
}

class Moto extends Vehicule{
    public function demarrer(){
        echo "$this->nom demarre en enlevant la béquille <br>";
    }
}

function faireDemarrer(Vehicule $vehicule){
    $vehicule->demarrer();
}

$voiture = new Voiture("BMW");
$moto = new Moto("Kawasaki");

faireDemarrer($voiture);
faireDemarrer($moto);