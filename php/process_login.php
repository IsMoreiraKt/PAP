<?php
session_start();
require_once '../php/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $conn->prepare("SELECT * FROM users WHERE username = :username OR email = :username");
    $query->execute(['username' => $username]);
    $user = $query->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['is_admin'] = $user['is_admin'];

        if ($user['is_admin'] == 2) {
            header("Location: ../php/s_admin_menu.php");
        } elseif ($user['is_admin'] == 1) {
            header("Location: ../php/admin_menu.php");
        } else {
            header("Location: ../index.php");
        }
        exit;
    } else {
        $_SESSION['login_error'] = "Usuário ou senha incorretos.";
        header("Location: ../php/login.php");
        exit;
    }
}
?>