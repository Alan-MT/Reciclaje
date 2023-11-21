<?php
    include_once "../Modelo/connection.php";
    
    // Verificar si se ha enviado el formulario

    if(isset($_POST['sesion'])){
        $username = $_POST['username'];
        $Password = $_POST['password'];
    
        // Consulta SQL para verificar el usuario por correo y contraseña
        $verificar_usuario = mysqli_query($connection, "SELECT * FROM usuarios WHERE username = '$username' AND password = '$Password'");
    
        if(mysqli_num_rows($verificar_usuario) > 0){
            $usuario = mysqli_fetch_assoc($verificar_usuario);
            $rol = $usuario['role'];
    
            // Aquí puedes verificar el rol específico del usuario
            if ($rol == 'Administrador') {
                echo '
                    <script>;
                    alert("¡BIENVENIDO ADMINISTRADOR!");
                    window.location = "/view/empleado/Listado.php";
                    </script>
                ';
            } elseif ($rol == 'operador') {
                echo '
                    <script>
                    alert("¡BIENVENIDO Operador!");
                    window.location = "/view/Reciclo/ingresoReciclaje.php";
                    </script>
                ';
            } elseif ($rol == 'clasificador') {
                echo '
                    <script>
                    alert("¡BIENVENIDO Clasificador!");
                    window.location = "/view/Residuo/ListaResiduo.php";
                    
                    </script>
                ';
            }elseif ($rol == 'vendedor') {
                echo '
                    <script>
                    alert("¡BIENVENIDO Vendedor!");
                    window.location = "/view/vendedor/Venta.php";
                    </script>
                ';
            } elseif ($rol == 'manager') {
                echo '
                    <script>
                    alert("¡BIENVENIDO Manager!");
                    window.location = "/view/manager/manager.php";
                    </script>
                ';
            }  
    
        } else {
            echo '
                <script>
                alert("Correo o contraseña incorrectos");
                window.location = "/view/login.php";
                </script>
            ';
        }
    } else {
        echo 'Algo está mal, inténtalo de nuevo';
    }
    ?>
      