<!-- Exercices PHP – Les fonctions -->
<!-- 1. Fonctions sans paramètre -->
<!-- Exercice 1.1 – Message simple -->
<?php

function saluer()
{
    echo "Bonjour et bienvenue !<br>";
}

saluer();
saluer();

echo "<br/>";
echo "<br/>";

// Exercice 1.2 – Ligne séparatrice
function ligne()
{
    echo "----------------<br>";
}

ligne();
saluer();
ligne();

echo "<br/>";
echo "<br/>";

// 2. Fonctions avec paramètres
// Exercice 2.1 – Bonjour personnalisé

function direBonjour($prenom)
{
    echo "Bonjour, " . $prenom . " ! " . "<br>";
}

direBonjour("Kevin");
direBonjour("Matt");
direBonjour("Karen");

echo "<br/>";
echo "<br/>";

// Exercice 2.2 – Multiplication

function multiplier($a, $b)
{
    $result = $a * $b;
    echo "Le produit de $a et $b est : $result" . "<br>";
}

multiplier(3, 4);
multiplier(5, 4);
multiplier(6, 5);

echo "<br/>";
echo "<br/>";

// 3. Fonctions avec valeur de retour
// Exercice 3.1 – Calcul du carré

function carre($nombre)
{
    return $nombre * $nombre;
}
$nombre = 7;
$result = carre($nombre);
echo "Le carré de $nombre est : $result";

echo "<br/>";
echo "<br/>";

// Exercice 3.2 – Année de naissance

function anneeNaissance($age)
{
    $anneeActuelle = 2026;
    $anneeNaissance = $anneeActuelle - $age;
    return $anneeNaissance;
}

$age = 30;
$anneeNaissance = anneeNaissance($age);
echo "Si vous avez $age ans, vous etes né en $anneeNaissance";

echo "<br/>";
echo "<br/>";

// 4. Fonctions conditionnelles
// Exercice 4.1 – Majeur ou mineur

function estMajeur($age)
{
    if ($age >= 18) {
        return true;
    } else {
        return false;
    }
}

$age = 18;

if (estMajeur($age)) {
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes mineur.";
}

echo "<br/>";
echo "<br/>";

// Exercice 4.2 – Nombre pair

function estPair($nombre)
{
    if ($nombre % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

$nombre = 31;

if (estPair($nombre)) {
    echo "$nombre est un nombre pair.";
} else {
    echo "$nombre est un nombre impair.";
}

echo "<br/>";
echo "<br/>";

// 5. Exercices d'application
// Exercice 5.1 – Générateur de phrase complète

function presentation($prenom, $nom, $age) {
    return "Je m'appelle $prenom $nom et j'ai $age ans.";
}

$prenom = "Alain";
$nom = "Dupont";
$age = 32;

echo presentation($prenom, $nom, $age);

echo "<br/>";
echo "<br/>";

// Exercice 5.2 – Calculatrice simple

$a = 5;
$b = 3;
$operation = "+";

function calculer($a, $b, $operation){
    $result = 0;

    if ($operation == "+") {
        $result = $a + $b;
    } elseif ($operation == "-") {
        $result = $a - $b; 
    } elseif ($operation == "*") {
        $result = $a * $b;
    } else if ($operation == "/") { 
        $result = $a / $b;
    }

    echo "le résultat de l'opération est de : " . $result ;
}

calculer($a, $b, $operation);

echo "<br/>";
echo "<br/>";

// Exercice 5.3 – Génération de lignes numérotées


function afficherLignes($n) {
    for ($i = 1; $i <= $n; $i++) {
        echo "Ligne $i" . "<br/>" ; 
    }
}

afficherLignes(3);

