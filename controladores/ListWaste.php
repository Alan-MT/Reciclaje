<?php

// Datos de conexión a la base de datos
$connection = mysqli_connect('localhost', 'root', '', 'waste');

// Verificar la conexión
if (!$connection) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Fetch data with user and product names from the ingresoresiduo table
$query = "SELECT i.id, i.fecha, i.costo, i.monto, u.nombre AS usuario_nombre, r.nombre AS residuo_nombre
          FROM ingresoresiduo i
          LEFT JOIN usuarios u ON i.usuario_id = u.id
          LEFT JOIN residuo r ON i.residuo_id = r.id";

$result = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['fecha'] . "</td>";
    echo "<td>" . $row['monto'] . "</td>";
    echo "<td>" . $row['costo'] . "</td>";
    echo "<td>" . $row['usuario_nombre'] . "</td>";
    echo "<td>" . $row['residuo_nombre'] . "</td>";
    echo "</tr>";
}

mysqli_close($connection);
?>

