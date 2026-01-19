<?php

class Item{
    private string $nom;
    private int $prix;
    private string $image;
    private string $description;

    public function __construct($nom, $prix, $image, $description)
    {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->image = $image;
        $this->description = $description;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getDescription()
    {
        return $this->description;
    }
}