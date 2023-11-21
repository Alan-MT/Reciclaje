<?php

// Datos de conexión a la base de datos
$connection = mysqli_connect('localhost', 'root', '', 'waste');

// Verificar la conexión
if (!$connection) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Fetch data with user and product names from the ingresoresiduo table
$query = "SELECT i.id, i.fecha, i.montoReciclado, u.nombre AS usuario_nombre, r.nombre AS residuo_nombre
            , p.nombre AS reciclado_nombre FROM reciclado i
            LEFT JOIN usuarios u ON i.id_usuario = u.id
            LEFT JOIN residuo r ON i.id_residuo = r.id
            LEFT JOIN treciclado p ON i.id_reciclaje = p.id";

$result = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['fecha'] . "</td>";
    echo "<td>" . $row['montoReciclado'] . "</td>";
    echo "<td>" . $row['usuario_nombre'] . "</td>";
    echo "<td>" . $row['residuo_nombre'] . "</td>";
    echo "<td>" . $row['reciclado_nombre'] . "</td>";
    echo "</tr>";
}

mysqli_close($connection);
?>