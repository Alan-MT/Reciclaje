<?php

// Datos de conexión a la base de datos
$connection = mysqli_connect('localhost', 'root', '', 'waste');

// Verificar la conexión
if (!$connection) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Fetch data with user and product names from the ingresoresiduo table
$query = "SELECT i.id, i.fecha, i.precio, i.monto, u.nombre AS usuario_nombre, r.nombre AS reciclado_nombre
          FROM vender i
          LEFT JOIN usuarios u ON i.user_id = u.id
          LEFT JOIN treciclado r ON i.recyclaje_id = r.id";

$result = mysqli_query($connection, $query);


while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['fecha'] . "</td>";
    echo "<td>" . $row['monto'] . "</td>";
    echo "<td>" . $row['precio'] . "</td>";
    echo "<td>" . $row['usuario_nombre'] . "</td>";
    echo "<td>" . $row['reciclado_nombre'] . "</td>";
    echo "</tr>";
}

mysqli_close($connection);
?>

