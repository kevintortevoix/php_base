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

// Exercice 1.4 – Remplacer un mot

$phrase = "Cette mission est difficile";
$phrase = str_replace("difficile", "facile", $phrase);

echo $phrase;

echo "<br/>";
echo "<br/>";
// 2. Fonctions sur les nombres
// Exercice 2.1 – Arrondi d’un nombre

$nombre = 3.75;

// arrondi mathématique
echo round($nombre);
echo "<br/>";

// arrondi inférieur
echo floor($nombre);
echo "<br/>";

// arrondi supérieur
echo ceil($nombre);
echo "<br/>";

echo "<br/>";
echo "<br/>";

// Exercice 2.2 – Nombre aléatoire

$nombre = rand(1, 1000);
echo "Et le numero est le : " . $nombre;

echo "<br/>";
echo "<br/>";

// Exercice 2.3 – Formater un prix

$prix = 1234.56;
echo number_format($prix, 2, ",", " ") . " €";

echo "<br/>";
echo "<br/>";

// 3. Fonctions sur les booléens
// Exercice 3.1 – Tester une variable vide

$valeur = "";
if (empty($valeur)) {
    echo "Le champ valeur est vide";
}

echo "<br/>";
echo "<br/>";

// Exercice 3.2 – Tester si une variable existe

if (isset($nom)) {
    echo "La variable $nom est définie.";
} else {
    echo "La variable $nom n'est pas définie.";
}

echo "<br/>";
echo "<br/>";
// Exercice 3.3 – Forcer un type booléen


// 4. Fonctions sur les tableaux
// Exercice 4.1 – Compter les éléments

$nom = ["Matt", "Karen", "Wilson", "Ben", "Benjamin"];
echo count($nom);
echo "<br/>";
echo "<br/>";

// Exercice 4.2 – Ajouter et supprimer

$nom = ["Matt", "Karen", "Wilson", "Electra", "Benjamin"];
$nouveauNom = array_push($nom, "Sam");
echo $nouveauNom;

echo "<br/>";
echo "<br/>";


$dernierNom = array_pop($nom);
echo $dernierNom;

echo "<br/>";
echo "<br/>";

// Exercice 4.3 – Trier un tableau

$nomTableau = ["Peter", "Norman", "Harry", "Mary-Jane", "Eddy"];
sort($nomTableau);
echo "<pre>";
print_r($nomTableau);
echo "</pre>";

// Exercice 4.4 – Rechercher dans un tableau

$prenoms = ["Alice", "Bob", "Marie", "David", "Sophie"];

if (in_array("Marie", $prenoms)) {
    echo "Le prénom 'Marie' est présent dans le tableau.";
} else {
    echo "Le prénom 'Marie' n'est pas présent dans le tableau.";
}