<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Registro</title>
  <link rel="stylesheet" href="../css/register.css">
</head>

<body>
  <div class="center">
    <h1>Registre-se</h1>
    <form action="process_register.php" method="POST">
      <div class="txt_field">
        <input type="text" name="username" required>
        <span></span>
        <label>Nome de usuário:</label>
      </div>
      <div class="txt_field">
        <input type="email" name="email" required>
        <span></span>
        <label>E-mail:</label>
      </div>
      <div class="txt_field">
        <input type="password" name="password" required>
        <span></span>
        <label>Senha:</label>
      </div>
        <input type="submit" value="Registre-se">
        <div class="signup_link">
          <a href="../php/login.php">Já tem conta?</a>
        </div>
    </form>
  </div>
</body>
</html>