<?php
$error_message = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : null;
unset($_SESSION['login_error']);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Nutrichef Login</title>
  <link rel="stylesheet" href="../css/login.css">
</head>

<body>
  <div class="center">
    <h1>Login</h1>
    <?php if ($error_message): ?>
      <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
    <?php endif; ?>
    <form method="POST" action="../php/process_login.php">
      <div class="txt_field">
        <input type="text" name="username" required>
        <span></span>
        <label>Nome de usuário</label>
      </div>
      <div class="txt_field">
        <input type="password" name="password" required>
        <span></span>
        <label>Senha</label>
      </div>
      <div class="pass">Esqueceu a senha?</div>
      <input type="submit" value="Login">
      <div class="signup_link">
        Não tem conta? <a href="#">Registre-se</a>
      </div>
    </form>

  </div>
</body>
</html>