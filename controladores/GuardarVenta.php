<?php

$connection = mysqli_connect('localhost', 'root', '', 'waste');

if (!$connection) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$monto = $connection->real_escape_string($_POST['montoReci']);
$precio = $connection->real_escape_string($_POST['precio']);
$fecha = $connection->real_escape_string($_POST['fecha']);
$empleado = $connection->real_escape_string($_POST['nombreE']);
$reciclado = $connection->real_escape_string($_POST['nombreT']);

// Select the current quantity from the treciclado table
$selectQuery = "SELECT cantidad FROM treciclado WHERE id = $reciclado";
$result = $connection->query($selectQuery);

if ($result) {
    $row = $result->fetch_assoc();
    $currentQuantity = $row['cantidad'];

    // Compare if the entered amount is less than or equal to the current quantity
    if ($monto <= $currentQuantity) {
        // Update the treciclado table with the new quantity
        $updateQuery = "UPDATE treciclado SET cantidad = $currentQuantity - $monto WHERE id = $reciclado";

        if ($connection->query($updateQuery)) {
            // Insert into vender
            $sql = "INSERT INTO vender (fecha, recyclaje_id, monto, precio, user_id)
                    VALUES ('$fecha', $reciclado, $monto, $precio, $empleado)";

            if ($connection->query($sql)) {
                $id = $connection->insert_id;

                // Redirect to the ListaResiduo.php page
                header('Location: /view/vendedor/Venta.php');
            } else {
                echo "Error inserting into vender table: " . $connection->error;
            }
        } else {
            echo "Error updating treciclado table: " . $connection->error;
            header('Location: /view/vendedor/Venta.php');
        }
    } else {
        echo "El monto ingresado es mayor que la cantidad actual.";
        header('Location: /view/vendedor/Venta.php');
    }
} else {
    echo "Error selecting from treciclado table: " . $connection->error;
}

mysqli_close($connection);
?>
