<?php

        session_start();
        include ('conexion.php');
        $usuario = $_POST['NombredeUsuario'];
        $password = $_POST ['Password'];

        $consulta_login = sprintf("select * from Usuarios WHERE NombredeUsuario='$usuario' AND Password = '$password'");
        $resultado = $conn->query($consulta_login);
        if (mysqli_num_rows($resultado) > 0)  {
            // Iniciar sesión y redirigir al usuario a la página de inicio
            $_SESSION['NombredeUsuario'] = $usuario;
//         header('Location: homeproveedores.php');
//         header("HTTP/1.1 302 Moved Temporarily");
           header("Location: homeproveedores.php");
        } else {
            // Mostrar un mensaje de error si el usuario no existe
            echo "Correo electrónico o contraseña incorrectos.  <a href='loginproveedores.php'>vuelva a intenarlo</a>.<br/>";
        }


/*if (mysqli_num_rows($resultado) > 0) {
        // Iniciar sesión y redirigir al usuario a la página de inicio
        $_SESSION['email'] = $email;
        header('Location: index.html');
} else {
        // Mostrar un mensaje de error si el usuario no existe
        echo "Correo electrónico o contraseña incorrectos.";
}*/
?>

