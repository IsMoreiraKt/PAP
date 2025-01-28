<?php
session_start();
require_once '../php/db_connection.php';

if (!isset($_SESSION['username']) || $_SESSION['is_admin'] != 1) {
  header("Location: index.php");
  exit;
}

$query = $conn->prepare("SELECT id, username, email FROM users");
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Administrativo</title>
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/general.css">
</head>

<body>
  <header class="auth-buttons">
    <div class="logo">Administração</div>
    <a href="../php/logout.php" class="logout-btn">Logout</a>
  </header>
  <main>
    <h1>Bem-vindo, Administrador!</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome de Usuário</th>
          <th>E-mail</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user): ?>
          <tr>
            <td><?php echo htmlspecialchars($user['id']); ?></td>
            <td><?php echo htmlspecialchars($user['username']); ?></td>
            <td><?php echo htmlspecialchars($user['email']); ?></td>
            <td>
              <form action="edit_user.php" method="POST" style="display: inline;">
                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                <button type="submit">Editar</button>
              </form>
              <form action="delete_user.php" method="POST" style="display: inline;" onsubmit="return confirm('Você tem certeza que deseja excluir este usuário? Esta ação não pode ser desfeita.');">
                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                <button type="submit">Excluir</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </main>
</body>

</html>