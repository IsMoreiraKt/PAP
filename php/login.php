<?php
$error_message = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : null;
unset($_SESSION['login_error']);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Nutrichef Login</title>
  <link rel="stylesheet" href="../css/auth.css">
</head>

<body>
  <div class="center">
    <h1>Login</h1>
    <?php if ($error_message): ?>
      <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
    <?php endif; ?>
    <form action="process_login.php" method="POST">
      <div class="txt_field">
        <input type="text" required>
        <label>Nome de usuário</label>
      </div>
      <div class="txt_field">
        <input type="password" required>
        <label>Senha</label>
      </div>
      <div class="pass">Esqueceu a senha?</div>
      <input type="submit" value="Login">
      <div class="sginup_link">
        Não tem conta? <a href="#">Registre-se</a>
      </div>
    </form>
  </div>
</body>

</html>