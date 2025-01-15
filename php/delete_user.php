<?php
session_start();
require_once '../php/db_connection.php';

if (!isset($_SESSION['username']) || $_SESSION['is_admin'] != 1) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    $delete_query = $conn->prepare("DELETE FROM users WHERE id = :id");
    $delete_query->execute(['id' => $user_id]);

    header("Location: menu.php");
    exit;
} else {
    echo "ID inválido.";
    exit;
}
