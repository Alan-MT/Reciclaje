<?php

$connection = mysqli_connect('localhost', 'root', '', 'waste');

if (!$connection) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$monto = $connection->real_escape_string($_POST['monto']);
$costo = $connection->real_escape_string($_POST['costo']);
$fecha = $connection->real_escape_string($_POST['fecha']);
$empleado = $connection->real_escape_string($_POST['nombreE']);
$residuo = $connection->real_escape_string($_POST['nombreT']);

// Select the current quantity from the residuo table
$selectQuery = "SELECT cantidad FROM residuo WHERE id = $residuo";
$result = $connection->query($selectQuery);

if ($result) {
    $row = $result->fetch_assoc();
    $currentQuantity = $row['cantidad'];

    // Update the residuo table with the new quantity
    $updateQuery = "UPDATE residuo SET cantidad = $currentQuantity + $monto WHERE id = $residuo";

    if ($connection->query($updateQuery)) {
        // Insert into ingresoresiduo
        $sql = "INSERT INTO ingresoresiduo (monto, costo, fecha, usuario_id, residuo_id)
                VALUES ($monto, $costo, '$fecha', $empleado, $residuo)";

        if ($connection->query($sql)) {
            $id = $connection->insert_id;

            // Redirect to the ListaResiduo.php page
            header('Location: /view/Residuo/ListaResiduo.php');
        } else {
            echo "Error inserting into ingresoresiduo table: " . $connection->error;
        }
    } else {
        echo "Error updating residuo table: " . $connection->error;
    }
} else {
    echo "Error selecting from residuo table: " . $connection->error;
}

mysqli_close($connection);
?>
