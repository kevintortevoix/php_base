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

// Exercice 1.3 – Rechercher un mot

$phrase = "Un grand pouvoir implique de grandes responsabilités";
$findme = "PHP";
