
<?php

$connection = mysqli_connect('localhost', 'root', '', 'waste');

if (!$connection) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$nombre = $connection->real_escape_string($_POST['nombre']);
$cantidad = $connection->real_escape_string($_POST['cantidad']);

// Check if the name already exists
$checkQuery = "SELECT id FROM treciclado WHERE nombre = '$nombre'";
$result = $connection->query($checkQuery);

if ($result->num_rows > 0) {
    
    echo '
    <script>
    alert("Ya existe en la base de datos");
    </script>
';
} else {
    $sql = "INSERT INTO treciclado (nombre, cantidad) VALUES ('$nombre', $cantidad)";

    if ($connection->query($sql)) {
        $id = $connection->insert_id;
        echo "Registro agregado con éxito. ID: " . $id;
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}

header('Location: /view/Reciclo/TipoReciclado.php');

mysqli_close($connection);
?>
