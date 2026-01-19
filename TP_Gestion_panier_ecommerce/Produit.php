<?php 
namespace Ecommerce;
abstract class Produit{
    protected $nom;
    protected $prixHT;

    public function __construct($nom, $prixHT)
    {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
    }

    abstract public function calculerPrixTTC();

    public function getNom(){
        return $this->nom;
    }

    public function afficherDetail()
    {
        echo "Produit : $this->nom <br>";
        echo "Prix HT : $this->prixHT <br>";
    }
}

class Livre extends Produit{
    public function calculerPrixTTC()
    {
       return $this->prixHT * 1.05;
    }
}

class Ebook extends Produit{
    public function calculerPrixTTC()
    {
        return $this->prixHT * 1.20;
    }
}

function ajouterAuPanier(Produit $produit){


    echo "J'ajoute " . $produit->getNom() . " au panier  Prix TTC : " . $produit->calculerPrixTTC() . " €<br>";
}

$livre1 = new \Ecommerce\Livre("Harry Potter", 20);
$livre1->afficherDetail();
echo " Prix TTC " . $livre1->calculerPrixTTC() . " € <br> " ;

$ebook1 = new Ebook("Apprendre PHP", 10);
$ebook1->afficherDetail();
echo " Prix TTC " . $ebook1->calculerPrixTTC() . " € <br> ";

ajouterAuPanier($livre1);
ajouterAuPanier($ebook1);