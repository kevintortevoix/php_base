<?php

class Livre{
    public $titre;
    public $auteur;
    public $anneePublication;
    public $estEmprunte;


        public function __construct($titre, $auteur, $anneePublication)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->anneePublication = $anneePublication;
        $this->estEmprunte = false;
    }

    public function emprunter(){
        $this->estEmprunte = true;
        echo "Le livre $this->titre a été emprunté.<br>";
    }

    public function rendre(){
        $this->estEmprunte = false;
        echo "Le livre $this->titre a été rendu.<br>";

    }
}

$livre1 = new Livre("The Witcher", "Andrzej Sapkowski", 1986);

$livre1->emprunter();
$livre1->rendre();

?>