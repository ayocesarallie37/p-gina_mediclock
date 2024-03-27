<?php
    session_start();
    include 'conexion_be.php';

    $usuario = $_POST['user'];
    $contrasena = $_POST['pass'];

    // Encripta la contraseña registrada en la base de datos.
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM users WHERE user='$usuario' AND pass='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION["user"] = $contrasena;
        header("location: ../index.html");
        exit;
    }else{
        echo '
        <script>
            alert("Usuario no existe, verifique los datos introducidos.");
            window.location="../login.php";
        </script>
    ';
    exit;
    }
?>