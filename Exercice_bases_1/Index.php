<!-- 1. Variables et affichage


<!- Exercice 1.1 – Affichage d’un prénom -->
<?php
$prenom = "Kévin";
echo "Bonjour, $prenom !";
echo "<br/>";
echo "<br/>";


// Exercice 1.2 – Addition de deux nombres

$a = 4;
$b = 7;
$somme = $a + $b;
echo "La somme de $a et $b est : $somme";
echo "<br/>";
echo "<br/>";


// Exercice 1.3 – Présentation personnelle

$prenom = "Kévin";
$nom = "TORTEVOIX";
$age = 30;
echo "Je m'appelle $prenom $nom et j'ai $age ans.";
echo "<br/>";
echo "<br/>";


// 2. Conditions
// Exercice 2.1 – Majeur ou mineur

$age = 17;

if ($age < 18) {
    echo "Vous êtes mineur";
} else {
    echo "Vous êtes majeur";
}

echo "<br/>";
echo "<br/>";


// Exercice 2.2 – Pair ou impair

$nombre = 30;

if ($nombre % 2 === 0) {
    echo "C'est un nombre pair";
} else {
    echo "C'est un nombre impair";
}

echo "<br/>";
echo "<br/>";


// Exercice 2.3 – Appréciation d’une note

$note = 16;

if ($note < 10) {
    echo "Insuffisant";
} else if ($note > 10 && $note <= 13) {
    echo "Passable";
} else if ($note > 14 && $note <= 16) {
    echo "Bien";
} else if ($note > 17 && $note <= 20) {
    echo "Très Bien";
}

echo "<br/>";
echo "<br/>";


// 3. Boucles
// Exercice 3.1 – Compter de 1 à 10

for ($i = 1; $i < 11; $i++) {
    echo $i;
}

echo "<br/>";
echo "<br/>";

// Exercice 3.2 – Nombres pairs jusqu’à 20

$i = 0;
while ($i <= 20) {
    $i++;

    if ($i % 2 === 0) {
        echo $i;
    }
}

echo "<br/>";
echo "<br/>";

// Exercice 3.3 – Table de multiplication d’un nombre

$n = 4;

for ($i = 1; $i <= 10; $i++) {
    echo $n . " x " . $i . " = " . ($n * $i) . "<br/>";
}

echo "<br/>";
echo "<br/>";

// Exercice 4.1 – Corriger les erreurs de syntaxe

$nombre1 = 5;
var_dump($nombre1);

$nombre2 = "3";
var_dump($nombre2);

$somme = $nombre1 + $nombre;
var_dump($somme);

echo "La somme est : $somme";

echo "<br/>";
echo "<br/>";

// Exercice 4.2 – Problème de condition

$age = 18;
var_dump($age);

if ($age = 21) {
    echo "Vous avez 21 ans.";
} else {
    echo "Vous n'avez pas 21 ans.";
}

echo "<br/>";
echo "<br/>";

// 5. Exercices d’application (plus complets)
// Exercice 5.1 – Générateur de mot de passe simplifié

$motDePasse = "";
$nombre = rand(97, 122);
$lettre = chr($nombre);

$motDePasse = "";

for ($i = 0; $i < 8; $i++) {
    if (rand(0, 1) === 0) {
        $nombre = rand(97, 122);
    } else {
        $nombre = rand(48, 57);
    }

    $motDePasse .= chr($nombre);
}

echo "Mot de passe généré : " . $motDePasse;

echo "<br/>";
echo "<br/>";

// Exercice 5.2 – Calculatrice simple

$a = 18;
$b = 9;
$operation = "+";

if ($operation == "+") {
    $resultat = $a + $b;
    echo "Résultat : $a + $b = $resultat";
} elseif ($operation == "-") {
    $resultat = $a - $b;
    echo "Résultat : $a - $b = $resultat";
} elseif ($operation == "*") {
    $resultat = $a * $b;
    echo "Résultat : $a * $b = $resultat";
} elseif ($operation == "/") {
    $resultat = $a / $b;
    echo "Résultat : $a / $b = $resultat";
}

echo "<br/>";
echo "<br/>";
