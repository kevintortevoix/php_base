<?php

require_once 'db.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $check = $pdo -> prepare('SELECT id from users WHERE email = :email');
    $check -> execute([":email" => $email]);

    $result = $check -> fetch();

if($result){
    echo "cet email est deja pris.";
} else{
    $hash = password_hash($password, PASSWORD_ARGON2ID);
    $insert = $pdo -> prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
    $insert -> execute([":email" => $email, ":password" => $hash]);

    header("Location: login.php");
    exit;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscripption </title>
</head>
<body>
    <form method="POST">
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" value="Inscription">  
    </form>
</body>
</html>


<!-- if($_SERVER["REQUEST_METHOD"] === "POST")
➡️Ici, tu vérifies si le formulaire a été envoyé via POST.
➡️$_SERVER["REQUEST_METHOD"] contient la méthode HTTP de la requête.
➡️Donc tout le code à l’intérieur de ce if ne sera exécuté que si le formulaire est soumis. -->


    <!-- $email = $_POST["email"];
    $password = $_POST["password"];
➡️Tu récupères les valeurs envoyées par le formulaire : l’email et le mot de passe.
➡️$_POST est un tableau associatif contenant les données envoyées via POST. -->



    <!-- $check = $pdo -> prepare('SELECT id from users WHERE email = :email');
    $check -> execute([":email" => $email]);
    $result = $check->fetch(); -->
<!-- ➡️prepare() : prépare une requête SQL avec un paramètre nommé :email, 
ce qui est plus sûr que de mettre l’email directement dans la requête (évite les injections SQL).
➡️execute([":email" => $email]) : on remplace :email par la valeur réelle de $email.
➡️fetch() : récupère la première ligne du résultat, ou false si aucun utilisateur n’a été trouvé.
➡️En résumé, ce bloc vérifie si l’email existe déjà dans la base. -->



<!-- if($result){
    echo "cet email est deja pris.";
} else -->
<!--➡️ Si $result contient quelque chose, ça veut dire que l’email est déjà utilisé.
➡️Sinon, on peut créer un nouvel utilisateur. -->



<!-- $hash = password_hash($password, PASSWORD_ARGON2ID); -->
<!--➡️ password_hash() crée un mot de passe sécurisé, qu’on stocke dans la base plutôt que le mot de passe en clair.
➡️PASSWORD_ARGON2ID est un algorithme moderne et très sécurisé pour hasher les mots de passe. -->



    <!-- $insert = $pdo -> prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
    $insert -> execute(["email" => $email, ":password" => $hash]); -->
<!-- ➡️Prépare et exécute la requête d’insertion d’un nouvel utilisateur. -->


    <!-- header("Location: login.php");
    exit; -->

<!--➡️ Redirige l’utilisateur vers la page login.php après l’inscription réussie.
exit; est nécessaire pour arrêter l’exécution du script après la redirection. -->
