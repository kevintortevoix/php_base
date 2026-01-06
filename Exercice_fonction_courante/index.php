<!-- Exercices PHP : Fonctions courantes -->
<!-- 1. Fonctions sur les chaînes de caractères -->
<!-- Exercice 1.1 – Longueur d'une chaîne -->

<?php

$texte = "Bonjour tout le monde ! ";
echo strlen($texte);

echo "<br/>";
echo "<br/>";

// Exercice 1.2 – Mise en majuscules et minuscules

$texte = "Bonjour tout le monde ! ";
$texte = strtoupper($texte);
echo $texte;
echo "<br/>";


$texte = strtolower($texte);
echo $texte;

echo "<br/>";
echo "<br/>";

// Exercice 1.3 – Rechercher un mot

$phrase = "Un grand pouvoir implique de grandes responsabilités";
$findme = "PHP";
$pos = strpos($phrase, $findme);

if ($pos == true) {
    echo "La chaine '$findme' a été trouvée dans la chaîne '$phrase'";
    echo " et débute à la position $pos";
} else {
    echo "La chaîne '$findme' ne se trouve pas dans la chaîne '$phrase'";
}

echo "<br/>";
echo "<br/>";

