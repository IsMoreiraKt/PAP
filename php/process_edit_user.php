<?php
session_start();
require_once '../php/db_connection.php';

if (!isset($_SESSION['username']) || $_SESSION['is_admin'] != 1) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $update_query = "UPDATE users SET username = :username, email = :email";
    $params = [
        'username' => $username,
        'email' => $email,
        'id' => $user_id,
    ];

    if (!empty($password)) {
        $update_query .= ", password = :password";
        $params['password'] = password_hash($password, PASSWORD_BCRYPT);
    }

    $update_query .= " WHERE id = :id";

    $query = $conn->prepare($update_query);
    $query->execute($params);

    header("Location: menu.php");
    exit;
}
