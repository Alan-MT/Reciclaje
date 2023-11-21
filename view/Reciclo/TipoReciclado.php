<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/css/principal.css">
    <link rel="stylesheet" href="/view/css/bootstrap.min.css">
    <link rel="stylesheet" href="/view/css/all.min.css">
    <title>Reciclaje</title>

</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
                <img src="https://c0.klipartz.com/pngpicture/286/70/gratis-png-rick-sanchez-morty-smith-graficos-de-red-portatiles-bolsillo-mortys-rick-amp-morty.png" alt="">
                <h3> Rick Sanchez </h3>
                <p>Operador</p>
            </div>
            <ul>
                <li><a href="/view//Reciclo//TipoReciclado.php">
                        <span class="item">Listado de Tipos Reciclado</span>
                    </a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#recicladoModal">
                <span class="item">Registro Tipo de Reciclaje</span></a>
                </li>

                <li><a href="/view//Reciclo//ingresoReciclaje.php">
                        <span class="item">Listado de Reciclaje</span>
                    </a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#nuevoModal">
                    <span class="item">Registro Ingreso para reciclar</span></a>
                </li>
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
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                <?php include '../../controladores/RecicloTipo.php';?>
                </tbody>
                
            </table>
        </div>
    </div>
    <?php include '../../controladores/residuotipo.php';?>
    <?php include '../../../Reciclaje/view/modal/nuevomoda.php';?>
    <script src="/view//js//actualizarcantidad.js"></script>
    <script src="/view//js//bootstrap.bundle.min.js"></script>
</body>

</html>