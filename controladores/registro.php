<?php
include_once "../Modelo/connection.php";

if(isset($_POST['regis'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $request = "INSERT INTO usuarios (nombre, apellido, username, password, role) VALUES ('$nombre','$apellido','$username','$password', '$role')";

    $verificar_usuario = mysqli_query($connection, "SELECT * FROM usuarios WHERE username = '$username'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
            alert("Este usuario ya está registrado");
            window.location = "/view/empleado/Registro.php";
            </script>
        ';
    } else {
        $ejecutar = mysqli_query($connection, $request);

        if($ejecutar){
            echo '
                <script>
                alert("Usuario Registrado");
                
                window.location = "/view/empleado/Listado.php";
                </script>
            ';
        }
    }
}
?>
