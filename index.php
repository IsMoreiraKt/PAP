<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nutrichef</title>
  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/index.css">
  <script src="/PAP/js/script.js"></script>

</head>

<body>
  <header class="navbar">
    <div class="logo">Nutrição</div>
    <nav class="menu">
      <a href="/PAP/html/about.html">Sobre nós</a>
      <a href="/PAP/html/services.html">Serviços</a>
      <a href="/PAP/html/blog.html">Blog</a>
      <a href="/PAP/html/contact.html">Contato</a>
    </nav>
    <div class="auth-buttons">
      <?php if ($username): ?>
        <span>Bem-vindo, <?php echo htmlspecialchars($username); ?>!</span>
        <a href="/PAP/php/logout.php" class="logout-btn">Logout</a>
      <?php else: ?>
        <span>Bem-vindo!</span>
        <a href="/PAP/php/login.php" class="login-btn">Login</a>
        <a href="/PAPphp/register.php" class="register-btn">Registro</a>
      <?php endif; ?>
    </div>
  </header>
  <main>
    <section class="hero">
      <h1>Colocamos as pessoas no <span class="highlight">centro</span> da nutrição</h1>
      <p>Acreditamos na convergência de saúde e bem-estar para transformar vidas.</p>
      <a href="#learn-more" class="cta-link">Saiba mais →</a>
    </section>
  </main>
</body>
</html>