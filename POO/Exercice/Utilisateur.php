<?php 

abstract class Utilisateur {
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    abstract public function afficherDashboard();

}

class Admin extends Utilisateur {
    public function afficherDashboard()
    {
        echo "$this->nom voit le tablau de bord admin <br>";
    }
}


class Membre extends Utilisateur {
    public function afficherDashboard()
    {
        echo "$this->nom voit le tablau de bord utilisateur <br>";
    }
}

class Invite extends Utilisateur {
    public function afficherDashboard()
    {
        echo "$this->nom voit le tablau de bord invite <br>";
    }
}

$admin = new Admin ("Geralt");
$admin->afficherDashboard();

$membre = new Membre ("Rick");
$membre->afficherDashboard();

$invite= new Invite ("Morty");
$invite->afficherDashboard();