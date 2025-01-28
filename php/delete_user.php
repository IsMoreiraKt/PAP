<?php
session_start();
require_once '../php/db_connection.php';

if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 2) {
    die("Acesso negado! Apenas o Super Administrador pode excluir usuários.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    $stmt = $conn->prepare("DELETE FROM users WHERE id = :id AND is_admin != 2");
    $stmt->execute(['id' => $user_id]);

    header("Location: ../php/s_admin_menu.php");
    exit;
}
?>