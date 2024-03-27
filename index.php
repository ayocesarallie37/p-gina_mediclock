<?php
    session_start();

    if(!isset($_SESSION['user'])) {
        echo '
        <script>
            alert("Por favor debes iniciar sesion");
            window.location = "login.php";
        </script>
        ';
        session_destroy();
        die();
    }
    
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="inicio/style.css">
    <title>Index</title>
</head>
<body>
    <header>
        <div class="header-content"> 
            <div class="logo">
                <img src="inicio/img/logo.jpeg" alt="Logotipo de MediClock">
            </div>
            <div class="menu" id="show-menu">
                <nav>
                    <ul>
                        <li class="menu-selected">
                            <a href = "index.php"><i class ="fas fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="nosotros.html"><i class ="fas fa-file-alt"></i>Nosotros</a>
                        </li>
                        <li class="menu-selected">
                            <a href = "https://meetings.hubspot.com/muppet"><i class ="fas fa-home"></i>Servicios</a>
                        </li>
                        <li>
                            <a href="farmacias.html"><i class ="fas fa-headset"></i>Farmacias</a>
                        </li>
                        <li>
                            <a href="contacto.html"><i class ="fab fa-youtube"></i>Contacto</a>
                        </li>
                        <li>
                            <a href="php/cerrar_session.php"><i class ="fas fa-headset"></i>Cerrar Sesión</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
      <div id="icon-menu">
        <i class="fas fa-bars"></i>
      </div>
    </header>
    <div class="container-all" id="move-content"></div>

    <div class="container-cover">
        <div class="container-info-cover">
            <h1 class="h1">Software especializado en sistema de recordatorios y fármacos</h1>
            <p class="parrafo">Mediclock es la solución definitiva para simplificar la complejidad de la gestión de medicamentos y recordatorios, asegurando una experiencia de usuario óptima y un seguimiento preciso de los regímenes terapéuticos. Descubre cómo nuestro software puede mejorar tu calidad de vida y ofrecer un control efectivo sobre tu salud.</p>
        </div>

        <div class="imagen"> 
            <img src="inicio/img/Online Doctor-bro.png" alt="imagen ilustrativa" class="img">
        </div>
    </div>

    <div class="container-footer">
        <footer>
            <div class="redes-footer">
                <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-google-plus-g icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter icon-redes-footer"></i></a>
            </div>
            <hr>
            <h4>© 2023 All Rights Reserved, Mediclock®</h4>
        </footer>
    </div>

    <script src="inicio/inicio.js"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</body>
</html>