<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Empleados</title>
    <link rel="stylesheet" href="/view/css/principal.css">
    <link rel="stylesheet" href="/view/css/registro.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">


</head>`

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
                <img src="https://c0.klipartz.com/pngpicture/286/70/gratis-png-rick-sanchez-morty-smith-graficos-de-red-portatiles-bolsillo-mortys-rick-amp-morty.png" alt="">
                <h3> Rick Sanchez </h3>
                <p>Administrado</p>
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
        <div class="Empleado">
            <form action="/controladores/registro.php" method="POST">
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Nombre" name="nombre" required>
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Apellido" name="apellido" required>
                </div>
                <div class="input-field">

                    <i class="fa-solid fa-user-secret"></i>
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="text" placeholder="Password" name="password" required>
                </div>
                <div class="Roles">
                    <h2>Role: </h2>
                    <select name="role" id="role" class="custom-select">
                        <option value="manager">Manager</option>
                        <option value="operador">Operador</option>
                        <option value="vendedor">Vendedor</option>
                        <option value="administrado">Administrador</option>
                        <option value="clasificador">Clasificador</option>
                    </select>
                </div>

                <div class="btn-field">
                    <button id="Regresar" type="button"><a href="/view//empleado//Listado.php">Volver</a></button>
                    <input type="submit" class="submit" value="Registrar" name="regis"/>
                </div>
            </form>
        </div>
        <div class="imagen">
            <img src="https://www.traperosdeemaus.org/mini-slider/reciclaje/reciclaje-general.png" alt="">
        </div>
    </div>
</body>

</html>