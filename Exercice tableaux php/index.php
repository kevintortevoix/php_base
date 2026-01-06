<?php
// Exercices PHP – Tableaux   // (indexés et associatifs) 
// Partie 1 : Tableaux indexés (ordonnés)

// <!-- Exercice 1.1 – Création et affichage -->

$fruits = ["pomme", "banane", "orange"];

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<br/>";
echo "<br/>";

// Exercice 1.2 – Accès par index
$fruits = ["pomme", "banane", "orange"];
echo $fruits[0];
echo "<br/>";
echo $fruits[2];
echo "<br/>";
echo "<br/>";

// Exercice 1.3 – Ajout d’éléments

$fruits = ["pomme", "banane", "orange"] ;
$fruits [] = "fraise";
$fruits [] = "cerise";

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<br/>";
echo "<br/>";

// Exercice 1.4 – Compter les éléments

$fruits = ["pomme", "banane", "orange", "fraise", "cerise"] ;
$nombreElements = count($fruits);

echo "Le tableau contient " . $nombreElements . " éléments.";
echo "<br/>";
echo "<br/>";

// Partie 2 : Tableaux associatifs
// Exercice 2.1 – Création et lecture

$personne = ["nom" => "Durand", "prenom" => "Alice", "age" => "28"];

echo $personne["prenom"] . " " . $personne["nom"] . " a " . $personne["age"] . " ans";
echo "<br/>";
echo "<br/>";

// Exercice 2.2 – Boucle sur tableau associatif

$personne = ["nom" => "Durand", "prenom" => "Alice", "age" => "28"];
foreach ($personne as $cle => $valeur) {
    echo $cle . " : " . $valeur . "<br>";
}
echo "<br/>";
echo "<br/>";

// Exercice 2.3 – Modification de valeur

$personne = ["nom" => "Durand", "prenom" => "Alice", "age" => "28"];
$personne["age"] = 30;
foreach ($personne as $cle => $valeur) {
    echo $cle . " : " . $valeur . "<br>";
}
echo "<br/>";
echo "<br/>";

// Exercice 2.4 – Ajout de nouvelle entrée

$personne = ["nom" => "Durand", "prenom" => "Alice", "age" => "28"];
$personne["ville"] = "Paris";

echo $personne["prenom"] . " " . $personne["nom"] . " a " . $personne["age"] . " ans" . " et habite à " . $personne["ville"];
echo "<br/>";
echo "<br/>";

// Partie 3 : Applications combinées
// Exercice 3.1 – Liste de prénoms

$prenoms = ["Kevin", "Sophie", "Leo", "Jules", "Elena"];
foreach($prenoms as $prenom ){
    echo "Bonjour, " . $prenom . " ! " .  "<br>";
}

echo "<br/>";
echo "<br/>";

// Exercice 3.2 – Afficher une fiche utilisateur

$utilisateurs = ["nom" => "MURDOCK", "prenom" => "Matt", "email" => "themanwithoutfear@gmail.com", "age" => "30"];
foreach ($utilisateurs as $utilisateur) {
    echo $utilisateur . "<br>";
}
echo "<br/>";
echo "<br/>";

// Exercice 3.3 – Déboguer un tableau

$livre = ["titre" => "1984", "auteur" => "George Orwell", "annee" => "1949"];
echo "<pre>";
var_dump($livre);
echo "</pre>";

