<?php
$error_message = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : null;
unset($_SESSION['login_error']);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <link rel="stylesheet" href="../css/auth.css">
</head>

<body>
  <h1>Login</h1>
  <?php if ($error_message): ?>
    <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
  <?php endif; ?>
  <form action="process_login.php" method="POST">
    <label for="username">Usuário ou E-mail:</label>
    <input type="text" name="username" id="username" required />
    <br><br>
    <label for="password">Senha:</label>
    <input type="password" name="password" id="password" required />
    <br><br>
    <button type="submit">Entrar</button>
  </form>
</body>

</html>