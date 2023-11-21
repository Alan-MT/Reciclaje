<?php

var_dump($_POST);
    include_once "../Modelo/connection.php";

    // Verifica si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtiene los valores del formulario
        $nombre = $_POST["nombre"];
        $username = $_POST["username"];

        // Manejo de errores para la conexión a la base de datos
        if (!$connection) {
            die('Error en la conexión: ' . mysqli_connect_error());
        }

        // Consulta SQL para verificar el usuario
        $verificar_usuario = mysqli_query($connection, "SELECT * FROM usuarios WHERE nombre = '$nombre' AND username = '$username'");

        // Manejo de errores para la consulta SQL
        if (!$verificar_usuario) {
            die('Error en la consulta: ' . mysqli_error($connection));
        }

        // Verifica si se encontró el usuario en la base de datos
        if(mysqli_num_rows($verificar_usuario) > 0){
            $usuario = mysqli_fetch_assoc($verificar_usuario);
            $rol = $usuario['password'];
            
            // Mensaje de depuración
            echo "Nombre: $nombre, Usuario: $username, Rol: $rol";

            // Alerta de bienvenida
            echo '<script>';
            echo 'alert("PASSWORD IS:  ' . htmlspecialchars($rol) . '");';
            echo 'window.location = "/view/login.php";';
            echo '</script>';
        } else {
            // Mensaje de depuración

            // Redirección en caso de error
            echo `
                <script>
                alert("Usuario o nombre incorrectos");
                window.location = "/view/contraseña/recuperacion.php";
                </script>
            `;
        }
    }
?>

