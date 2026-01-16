<?php
session_start();
require_once 'db.php';

if($_SESSION["user_id"]) {
    header("Location: dashboard.php");
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"]; 
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch();

    if($user && password_verify($password, $user["password"])){
        $_SESSION["user_id"] = $user['id'];
        $_SESSION["user_email"] = $user['email'];

        header("Location: dashboard.php");
        exit;
    } else {
        echo "Email ou mot de passe incorrect !";
    }

    // var_dump($_SESSION);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> PAGE DE CONNEXION </h1>
    <form method="POST">
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" value="Inscription"> 
    </form>

</body>
</html>



<!-- session_start(); -->
<!--➡️ session_start() démarre une session PHP, 
➡️ce qui permet de stocker des informations sur l’utilisateur (comme son ID ou email) entre les pages.
➡️Sans ça, $_SESSION ne fonctionne pas. -->






<!-- if($_SESSION["user_id"]) {
header("Location: dashboard.php");
} -->
<!--➡️ Ce code sert à rediriger l’utilisateur s’il est déjà connecté.
➡️$_SESSION["user_id"] existe si l’utilisateur s’est déjà logué.
➡️header("Location: dashboard.php") envoie l’utilisateur vers le tableau de bord. -->




<!-- if($_SERVER["REQUEST_METHOD"] === "POST") -->
<!--➡️ Vérifie si le formulaire a été soumis via la méthode POST.
➡️C’est important pour que le code de connexion ne s’exécute que lorsqu’on soumet le formulaire et pas à chaque visite de la page. -->



<!-- $email = $_POST["email"]; 
$password = $_POST["password"]; -->
<!-- ➡️Récupère l’email et le mot de passe envoyés par le formulaire. -->





<!-- $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
$stmt->execute([':email' => $email]);
$user = $stmt->fetch(); -->
<!--➡️ $pdo->prepare() prépare une requête SQL sécurisée avec un paramètre :email.
➡️$stmt->execute([':email' => $email]) lie la valeur de $email au paramètre :email.
➡️$stmt->fetch() récupère la première ligne de résultat de la requête (l’utilisateur correspondant à l’email).
➡️Avantage : ça protège contre les injections SQL. -->







<!-- if($user && password_verify($password, $user["password"])) -->
<!-- ➡️L’utilisateur existe ($user n’est pas vide)
➡️Le mot de passe envoyé correspond au hash stocké en base (password_verify()).
➡️password_verify() est très important : tu ne compares jamais les mots de passe en clair. -->







<!-- $_SESSION["user_id"] = $user['id'];
$_SESSION["user_email"] = $user['email']; -->
<!--➡️ Stocke l’ID et l’email dans la session pour que l’utilisateur reste connecté.
➡️Ces informations sont accessibles sur toutes les pages grâce à $_SESSION. -->






<!-- header("Location: dashboard.php");
exit; -->
<!-- ➡️Redirige l’utilisateur vers le tableau de bord.
➡️exit; stoppe le script après la redirection (très important). -->





<!-- else {
    echo "Email ou mot de passe incorrect !";
} -->
<!-- ➡️Si l’utilisateur n’existe pas ou que le mot de passe est incorrect, un message d’erreur s’affiche. -->





<!-- // var_dump($_SESSION); -->
<!-- ➡️Ligne de debug : elle montre le contenu de la session.
➡️Utile pour vérifier que $_SESSION["user_id"] et $_SESSION["user_email"] sont bien définis. -->

















