<?php

class Produit {
    public $nom;
    public $prix;

    public function __construct($nom, $prix)
    {
        $this->nom = $nom;
        $this->prix = $prix;
    }
    public function afficherDetails() {
    echo "Nom : $this->nom <br>";
    echo "Prix : $this->prix <br>";
}

    public function reduirePrix(){
    $this -> prix = $this -> prix - 5;
    echo "Nouveau prix : $this->prix <br>";
    }
}




$produit1 = new Produit("Telephone", 1500);
$produit2 = new Produit("Pile", 3);
$produit3 = new Produit("Cigarette", 10);

$produit1 -> afficherDetails();
$produit2 -> afficherDetails();
$produit3 -> afficherDetails();









?>