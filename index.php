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
  <script src="../js/script.js"></script>
</head>

<body>
  <header class="navbar">
    <div class="logo">Nutrição</div>
    <nav class="menu">
      <a href="html/about.html">Sobre nós</a>
      <a href="html/services.html">Serviços</a>
      <a href="html/blog.html">Blog</a>
      <a href="html/contact.html">Contato</a>
    </nav>
    <div class="auth-buttons">
      <?php if ($username): ?>
        <span>Bem-vindo, <?php echo htmlspecialchars($username); ?>!</span>
        <a href="php/logout.php" class="logout-btn">Logout</a>
      <?php else: ?>
        <span>Bem-vindo!</span>
        <a href="php/login.php" class="login-btn">Login</a>
        <a href="php/register.php" class="register-btn">Registro</a>
      <?php endif; ?>
    </div>
  </header>

  <main>
    <section class="hero">
      <h1>Colocamos as pessoas no <span class="highlight">centro</span> da nutrição</h1>
      <p>Acreditamos na convergência de saúde e bem-estar para transformar vidas.</p>
      <a href="#learn-more" class="cta-link">Saiba mais →</a>
    </section>

    <!-- Seção de Destaques -->
    <section class="features">
      <div class="feature">
        <h2>Nutrição Personalizada</h2>
        <p>Planos alimentares feitos sob medida para suas necessidades.</p>
      </div>
      <div class="feature">
        <h2>Acompanhamento Profissional</h2>
        <p>Conte com nutricionistas especializados para te guiar.</p>
      </div>
      <div class="feature">
        <h2>Receitas Saudáveis</h2>
        <p>Descubra receitas deliciosas e nutritivas.</p>
      </div>
    </section>

    <!-- Seção de Depoimentos -->
    <section class="testimonials">
      <h2>O que nossos clientes dizem</h2>
      <div class="testimonial">
        <p>"A Nutrichef mudou minha vida! Perdi 10 kg em 3 meses com um plano alimentar incrível."</p>
        <span>- Maria Silva</span>
      </div>
      <div class="testimonial">
        <p>"Adoro as receitas saudáveis e fáceis de preparar. Recomendo a todos!"</p>
        <span>- João Souza</span>
      </div>
    </section>

    <!-- Seção de Blog -->
    <section class="blog-preview">
      <h2>Últimas do Blog</h2>
      <div class="blog-posts">
        <div class="post">
          <h3>5 Dicas para uma Alimentação Saudável</h3>
          <p>Descubra como pequenas mudanças podem fazer uma grande diferença.</p>
          <a href="html/blog.html#post1">Leia mais →</a>
        </div>
        <div class="post">
          <h3>Benefícios dos Alimentos Orgânicos</h3>
          <p>Entenda por que vale a pena investir em alimentos orgânicos.</p>
          <a href="html/blog.html#post2">Leia mais →</a>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-content">
      <p>&copy; 2023 Nutrichef. Todos os direitos reservados.</p>
      <nav class="footer-links">
        <a href="html/privacy.html">Política de Privacidade</a>
        <a href="html/terms.html">Termos de Uso</a>
      </nav>
    </div>
  </footer>
</body>
</html>