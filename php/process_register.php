<?php
$conn = new mysqli('localhost', 'root', '', 'nutricao');

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Criptografia da senha

$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sss', $username, $email, $password);

if ($stmt->execute()) {
    header("Location: login.php");
    exit;
} else {
    echo "Erro: " . $stmt->error;
}
$stmt->close();
$conn->close();
