<?php
// Datos de conexión a la base de datos
$connection = mysqli_connect('localhost', 'root', '', 'waste');

// Verificar la conexión
if (!$connection) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Fetch user data from the database (replace this with your actual query)
$query = "SELECT * FROM usuarios";
$result = mysqli_query($connection, $query);

// Display user data in the table
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['apellido'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['role'] . "</td>";
    echo "</tr>";
}

// Close the database connection
mysqli_close($connection);
?>

