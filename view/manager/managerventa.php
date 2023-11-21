<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/css/principal.css">
    <link rel="stylesheet" href="/view/css/bootstrap.min.css">
    <link rel="stylesheet" href="/view/css/all.min.css">
    <title>Manager</title>

</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
                <img src="https://c0.klipartz.com/pngpicture/286/70/gratis-png-rick-sanchez-morty-smith-graficos-de-red-portatiles-bolsillo-mortys-rick-amp-morty.png" alt="">
                <h3> Rick Sanchez </h3>
                <p>Manager</p>
            </div>
            <ul>
                <li><a href="/view//manager//manager.php">
                        <span class="item">Reportes de residuos por fecha</span>
                    </a></li>
                <li><a href="/view//manager//managerReciclaje.php">
                        <span class="item">Reportes de reciclaje por fechas</span>
                    </a></li>
                    <li><a href="/view//manager//managerventa.php">
                        <span class="item">Reportes de Ventas por fechas</span>
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
        <div class="filtrado">
            <h2>Reportes de Ventas</h2>
                <form action="">
                    <div class="row">
                    <label><b>Del Dia</b></label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                        <label><b> Hasta  el Dia</b></label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </form>
        </div>
        <div class="tablas">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>fecha</th>
                        <th>reciclaje</th>
                        <th>monto</th>
                        <th>precio</th>
                        <th>Empleado</th>
                    </tr>
                </thead>
                <tbody>
                <?php include '../../controladores/reporteVenta.php';?>
                </tbody>
                
            </table>
        </div>
    </div>
    <script src="/view//js//bootstrap.bundle.min.js"></script>
</body>

</html>