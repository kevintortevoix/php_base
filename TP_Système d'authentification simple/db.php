<?php

try {

    $pdo = new PDO('mysql:host=localhost;dbname=auth_system;charset=utf8mb4', 'root', '');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

?>



























<!-- // 
   ➡️try : on tente d’exécuter le code
// ➡️catch : si une erreur survient, on la récupère et on l’affiche proprement
// ➡️Cela évite que le site plante brutalement.





// $pdo = new PDO('mysql:host=localhost;dbname=auth_system;charset=utf8mb4', 'root', '');

// ➡️localhost → le serveur de base de données
// ➡️auth_system → le nom de la base de données
// ➡️utf8mb4 → encodage (supporte les accents et emojis)
// ➡️root → nom d’utilisateur MySQL
// ➡️'' → mot de passe (vide ici)





// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// ➡️“Si une erreur SQL se produit, lance une exception”





// PDO::FETCH_ASSOC signifie :
// ➡️ Les données seront retournées sous forme de tableau associatif





// catch (PDOException $e)
// ➡️PDOException → type d’erreur spécifique à PDO
// ➡️$e → variable qui contient les infos sur l’erreur





// Le script s’arrête (die) 
// $e->getMessage() : ➡️ Donne le message exact de l’erreur (fourni par PHP/MySQL) -->