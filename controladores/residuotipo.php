
<?php

$connection = mysqli_connect('localhost', 'root', '', 'waste');


if (!$connection) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Fetch user data from the database (replace this with your actual query)
$sqlTipo = "SELECT * FROM residuo";
$Tipos = $connection->query($sqlTipo);

$sqlempelado =  "SELECT id, nombre FROM usuarios";
$Emp = $connection->query($sqlempelado);

$sqlreciclado = "SELECT id, nombre FROM treciclado";
$RECI = $connection->query($sqlreciclado);

$sqlOTRO = "SELECT * FROM treciclado";
$YA = $connection->query($sqlOTRO);

mysqli_close($connection);
?>