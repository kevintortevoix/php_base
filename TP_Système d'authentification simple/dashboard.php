<?php

session_start();

if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard </title>
</head>
<body>
    <h1> Bienvenue sur votre Espace membre</h1>
    <p> Vous etes connecté en tant que : <?= htmlspecialchars($_SESSION["user_email"]) ?> </p>

    <a href="list_users.php"> Liste utilisateurs</a>
    <a href="logout.php"> Se déconnecter</a>
</body>
</html>













<!-- session_start(); -->
<!-- ➡️Démarre ou reprend une session PHP.
➡️Indispensable pour pouvoir utiliser la variable $_SESSION. -->






<!-- if(!isset($_SESSION["user_id"])) -->
<!-- ➡️Vérifie si la variable user_id n’existe pas dans la session.
➡️En général, user_id est créé lors de la connexion de l’utilisateur.
➡️S’il n’existe pas → l’utilisateur n’est pas connecté. -->




<!-- header("Location: login.php"); -->
<!--➡️ Redirige l’utilisateur vers la page login.php. -->



<!-- exit; -->
<!--➡️ Stoppe immédiatement l’exécution du script.
➡️Très important pour éviter que le contenu protégé s’affiche quand même. -->
