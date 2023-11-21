<?php
// Datos de conexión a la base de datos
$connection = mysqli_connect('localhost', 'root', '', 'waste');

// Verificar la conexión
if (!$connection) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Fetch user data from the database (replace this with your actual query)
$query = "SELECT * FROM residuo";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['cantidad'] . "</td>";
    echo "</tr>";
}

mysqli_close($connection);
?>
