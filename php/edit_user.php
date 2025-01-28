<?php
session_start();
require_once '../php/db_connection.php';

if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 2) {
  die("Acesso negado! Apenas o Super Administrador pode editar usuários.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_id'])) {
  $user_id = $_POST['user_id'];
  $new_username = $_POST['username'];
  $new_email = $_POST['email'];
  $new_role = $_POST['is_admin'];

  if ($new_role == 2) {
    die("Você não pode promover outro usuário para Super Administrador!");
  }

  $stmt = $conn->prepare("UPDATE users SET username = :username, email = :email, is_admin = :is_admin WHERE id = :id");
  $stmt->execute([
    'username' => $new_username,
    'email' => $new_email,
    'is_admin' => $new_role,
    'id' => $user_id
  ]);

  header("Location: ../php/s_admin_menu.php");
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
    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>"
      required>
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