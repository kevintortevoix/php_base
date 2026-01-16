<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$stmt = $pdo->query("SELECT id, email, created_at FROM users");
$users = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Liste des utilisateurs</title>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Date de création</th>
        </tr>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['id']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td><?= htmlspecialchars($user['created_at']) ?></td>
                <td>
                    <a href="profile.php?id=<?= $user['id'] ?>"> Voir profil </a>
                    <a href="delete.php?id=<?= $user['id'] ?>"> Supprimer </a>
                </td>
            </tr>
        <?php endforeach;
        ?>

    </table>
</body>

</html>