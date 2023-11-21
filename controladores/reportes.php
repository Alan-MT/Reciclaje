<?php
$conexion = mysqli_connect("localhost", "root", "", "waste");

if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
    $from_date = $_GET['from_date'];
    $to_date = $_GET['to_date'];

    $query = "SELECT i.id, i.fecha, i.costo, i.monto, u.nombre AS usuario_nombre, r.nombre AS residuo_nombre
    FROM ingresoresiduo i
    LEFT JOIN usuarios u ON i.usuario_id = u.id
    LEFT JOIN residuo r ON i.residuo_id = r.id
    WHERE i.fecha BETWEEN '$from_date' AND '$to_date'";

    $query_run = mysqli_query($conexion, $query);

    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $fila) {
?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['fecha']; ?></td>
                <td><?php echo $fila['costo']; ?></td>
                <td><?php echo $fila['monto']; ?></td>
                <td><?php echo $fila['usuario_nombre']; ?></td>
                <td><?php echo $fila['residuo_nombre']; ?></td>
            </tr>
        <?php
        }
    } else {
        ?>

        <tr>
            <td><?php echo "No se encontraron resultados"; ?></td>
    <?php
    }
}
    ?>