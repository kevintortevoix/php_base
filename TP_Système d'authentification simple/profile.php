<?php

require_once 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $id = (int)$id;

    // Préparation PDO classique
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch();

    if ($user) {
        // Afficher les infos
        echo "Profil de : " . ($user["email"]);
        echo "<br>";
        echo "Inscrit le : " . $user["created_at"];
        echo "<br>";
    } else {
        echo "Aucun utilisateur trouvé.";
    }
} else {
    echo "ID manquant.";
}
