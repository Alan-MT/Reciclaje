<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/view/css/principal.css">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
                <img src="https://c0.klipartz.com/pngpicture/286/70/gratis-png-rick-sanchez-morty-smith-graficos-de-red-portatiles-bolsillo-mortys-rick-amp-morty.png" alt="">
                <h3> Rick Sanchez </h3>
                <p>Admnistrador</p>
            </div>
            <ul>
                <li><a href="/view///empleado//Listado.php">
                        <span class="item">Listado de Empleados</span>
                    </a></li>
                <li><a href="/view//empleado//Registro.php">
                        <span class="item">Registras empleado</span>
                    </a></li>
            </ul>
        </div>
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#" id="barra"><i class="fas fa-bars"></i></a>
                    <a href="/view//login.php" id="logout"><i class="fa fa-power-off"></i> Log-out</a>
                </div>
            </div>
        </div>
        <div class="tablas">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>username</th>
                        <th>Role</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php include_once "../../../Reciclaje/controladores/user_controller.php"; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>