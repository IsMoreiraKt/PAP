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
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="logo">
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
                        <i class='bx bx-home'></i>
                        <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="../js/dashboard.js"></script>
</body>

</html>