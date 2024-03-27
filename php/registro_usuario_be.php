<?php

    include 'conexion_be.php';

    $usuario = $_POST['user'];
    $nombre_completo = $_POST['Nombre'];
    $roles = $_POST['rol'];
    $contrasena = $_POST['pass'];

    // Encripta la contraseña registrada en la base de datos.
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO users(user, Nombre, rol, pass)
              VALUES('$usuario', '$nombre_completo', '$roles', '$contrasena')";
    
    // Verificar que el nombre completo no se repita en la base de datos
    $verificar_nombre = mysqli_query($conexion, "SELECT * FROM users WHERE Nombre='$nombre_completo'");

    if(mysqli_num_rows($verificar_nombre)>0){
        echo '
            <script>
                alert("Este nombre ya esta registrado, intenta con otro diferente");
                window.location="../login.php";
            </script>
        ';

        exit();
    }

    // Verificar que el nombre de usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM users WHERE user='$usuario'");

    if(mysqli_num_rows($verificar_usuario)>0){
        echo '
            <script>
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                window.location="../login.php";
            </script>
        ';

        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario Registrado Correctamente");
                window.location="../login.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo. Usuario no almacenado");
                window.location="../login.php";
            </script>
        ';
    }

    mysqli_close($conexion);

?>