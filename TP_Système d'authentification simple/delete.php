<?php
session_start();
require_once 'db.php';



if (!isset($_GET['id'])) {
    header('Location: list_users.php');
    exit;
}



$id = (int) $_GET['id'];
if ($id === $_SESSION['user_id']) {
    header('Location: list_users.php?msg=self_delete_forbidden');
    exit;
}



$sql = "DELETE FROM users WHERE id = $id";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);



header('Location: list_users.php?msg=deleted');
exit;
