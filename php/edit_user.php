<?php
session_start();
require_once '../php/db_connection.php';

if (!isset($_SESSION['username']) || $_SESSION['is_admin'] != 1) {
  header("Location: index.php");
  exit;
}

if (!isset($_POST['user_id'])) {
  header("Location: menu.php");
  exit;
}

$user_id = $_POST['user_id'];
$query = $conn->prepare("SELECT id, username, email FROM users WHERE id = :id");
$query->execute(['id' => $user_id]);
$user = $query->fetch(PDO::FETCH_ASSOC);

if (!$user) {
  echo "Usuário não encontrado.";
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Usuário</title>
  <link rel="stylesheet" href="../css/edit_user.css">

</head>

<body>
  <h1>Editar Usuário</h1>
  <form action="process_edit_user.php" method="POST">
    <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user['id']); ?>">
    <label for="username">Nome de Usuário:</label>
    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>
    <br><br>
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
    <br><br>
    <label for="password">Nova Senha (deixe em branco para não alterar):</label>
    <input type="password" id="password" name="password">
    <br><br>
    <button type="submit">Salvar Alterações</button>
  </form>
</body>

</html>