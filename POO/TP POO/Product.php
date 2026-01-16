<?php

class Product
{

    private  $name;
    private $price;
    public $description;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->setPrice($price);
    }



    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }



    public function getPrice()
    {
        return $this->price . " € ";
    }

    public function setPrice($price)
    {

        if ($price < 0) {
            echo "Erreur, Le prix ne peut pas être négatif. <br>";
        } else {
            $this->price = $price;
        }
    }
}

$tshirt = new Product("T-shirt Geek", -20);


echo "Nom du produit : " . $tshirt->getName() . "<br>";
echo "Prix du produit : " . $tshirt->getPrice() . "<br>";

// $tshirt->price = 50;

$tshirt->setPrice(25);
echo "Nouveau prix : " . $tshirt->getPrice() . "<br>";

$tshirt->setPrice(-10);

$tshirt->description = "Super coton";
echo "Description : " . $tshirt->description . "<br>";
