<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="nuevoModalLabel">Registro de Ingresos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/controladores/guardartipor.php" method="post">
                    <div class="mb-3">
                        <label for="monto" class="form-label">Cantidad:</label>
                        <input type="number" name="monto" , id="monto" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="costo" class="form-label">Costo:</label>
                        <input type="number" name="costo" , id="costo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="Empleado" class="form-label">Empleado:</label>
                        <select name="nombreE" id="nombreE" class="form-select" required>
                        <?php while($row_empleado = $Emp->fetch_assoc()) {?>.
                                    <option value="<?php echo $row_empleado["id"];?>"><?= $row_empleado["nombre"]?></option>
                                <?php }?>
                        </select>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Tipo de Resudio:</label>
                        <select name="nombreT" id="nombreT" class="form-select" required>
                            <?php while($row_tipo = $Tipos->fetch_assoc()) {?>.
                                    <option value="<?php echo $row_tipo["id"];?>"><?= $row_tipo["nombre"]?></option>
                                <?php }?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha:</label>
                        <input type="date" name="fecha" id="fecha" class="form-control" required>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="Submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"> Guardar</i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

