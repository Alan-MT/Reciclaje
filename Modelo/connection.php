<?php
// Datos de conexión a la base de datos
$connection = mysqli_connect('localhost','root','','waste');

// Verificar la conexión
if (!$connection) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
