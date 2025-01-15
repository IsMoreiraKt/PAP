<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Registro</title>
  <link rel="stylesheet" href="../css/auth.css">
</head>

<body>
  <h1>Registro</h1>
  <form action="process_register.php" method="POST">
    <label for="username">Usuário:</label>
    <input type="text" name="username" id="username" required />
    <br><br>
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required />
    <br><br>
    <label for="password">Senha:</label>
    <input type="password" name="password" id="password" required />
    <br><br>
    <button type="submit">Registrar</button>
  </form>
</body>

</html>