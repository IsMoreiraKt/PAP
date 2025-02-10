<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Dashboard SuperAdmin</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/dashboard.css">
    <!-- icones -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../images/logo.png" alt="logo">
                </span>

                <div class="text header-text">
                    <span class="name">Nutrichef</span>
                    <span class="profession">Nutricionista</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search-alt-2 icon'></i>
                        <input type="search" placeholder="Pesquisa">
                </li>
                <ul class="menu-link">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">Usuários</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-book-heart icon'></i>
                            <span class="text nav-text">Consultas</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-images icon'></i>
                            <span class="text nav-text">Gestão de imagens</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notificações</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>
    </nav>

    <section class="home">
        <div class="text">Dashboard</div>
    </section>
    <script src="../js/dashboard.js"></script>
</body>
</html>