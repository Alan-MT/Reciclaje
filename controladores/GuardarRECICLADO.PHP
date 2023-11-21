<?php

$connection = mysqli_connect('localhost', 'root', '', 'waste');

if (!$connection) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$monto = $connection->real_escape_string($_POST['montoReci']);
$fecha = $connection->real_escape_string($_POST['fecha']);
$empleado = $connection->real_escape_string($_POST['nombreE']);
$residuo = $connection->real_escape_string($_POST['nombreT']);
$reciclado = $connection->real_escape_string($_POST['nombreR']);

// Select the current quantity from the residuo table
$selectQuery = "SELECT cantidad FROM residuo WHERE id = $residuo";
$reci = "SELECT cantidad FROM treciclado WHERE id = $reciclado";
$result = $connection->query($selectQuery);
$res = $connection->query($reci);

if ($result) {
    $row = $result->fetch_assoc();
    $cant = $res->fetch_assoc();
    $quality = $cant['cantidad'];
    $currentQuantity = $row['cantidad'];

    if ($monto <= $currentQuantity) {
        // Update the residuo table with the new quantity
        $updateQuery = "UPDATE residuo SET cantidad = $currentQuantity - $monto WHERE id = $residuo";
        echo '<script>console.log("updateQuery:", "' . $updateQuery . '")</script>';

        if ($connection->query($updateQuery)) {
            // Update the treciclado table with the new quantity
            $updateQuery2 = "UPDATE treciclado SET cantidad = (cantidad + $monto) WHERE id = $reciclado";
            echo '<script>console.log("updateQuery2:", "' . $updateQuery2 . '")</script>';

            if ($connection->query($updateQuery2)) {
                // Insert into reciclado
                $sql = "INSERT INTO reciclado (id_residuo, id_reciclaje, id_usuario, fecha, montoReciclado)
                        VALUES ($residuo, $reciclado, $empleado, '$fecha', $monto)";

                if ($connection->query($sql)) {
                    $id = $connection->insert_id;

                    // Redirect to the ListaResiduo.php page
                    header('Location: /view/Reciclo/TipoReciclado.php');
                } else {
                    echo "Error inserting into reciclado table: " . $connection->error;
                }
            } else {
                header('Location: /view/Reciclo/TipoReciclado.php');
                echo "Error updating treciclado table: " . $connection->error;
            }
        } else {
            header('Location: /view/Reciclo/TipoReciclado.php');
            echo "Error updating residuo table: " . $connection->error;
        }
    } else {
        echo '
        <script>
        alert("Te excediste de la cantidad");
        window.location = "/view/Reciclo/TipoReciclado.php";
        </script>
    ';
         // O cualquier acción que desees realizar si la condición no se cumple
    }
} else {
    header('Location: /view/Reciclo/TipoReciclado.php');
    echo "Error selecting from residuo table: " . $connection->error;
}

mysqli_close($connection);
?>
