<?php
  session_start();

  if(isset($_SESSION['user'])) {
    header("location: index.html");
  }


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="login/style.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="php/login_usuario_be.php" method="POST" class="sign-in-form">
          <h2 class="title">Iniciar Sesión</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Usuario" name="user"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Contraseña" name="pass"/>
          </div>
          <input type="submit" value="Acceder" class="btn solid" />
          <p class="social-text">O iniciar sesión con otras plataformas</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form action="php/registro_usuario_be.php" method="POST" class="sign-up-form">
          <h2 class="title">Registrate con nosotros</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Usuario" name="user"/>
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nombre Completo" name="Nombre"/>
          </div>
          <div>
            <select name="rol" id="rol">
              <option value="Patient" selected>Patient</option>
              <option value="Doctor">Doctor</option>
            </select>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Contraseña" name="pass"/>
          </div>
          <input type="submit" class="btn" value="Registrar"/>
          <p class="social-text">O registrate en otras plataformas</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Eres nuevo aquí?</h3>
          <p>
            Puedes acceder a todos nuestros servicios en pocos pasos, solo registrate en está página.
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Registrarse
          </button>
        </div>
        <img src="login/img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Ser uno de nosotros?</h3>
          <p>
            Ser uno de nosotros, demuestras confianza en nosotros y sabemos que lo mas importante para ti es la salud y
            bienestar.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Iniciar sesión
          </button>
        </div>
        <img src="login/img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="login/login.js"></script>
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</body>

</html>