<div class="modal fade" id="recicladoModal" tabindex="-1" aria-labelledby="recicladoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="recicladoModalLabel">Tipo Reciclaje</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/controladores/GuardarTreciclaje.php" method="post">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" , id="nombre" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad:</label>
            <input type="number" name="cantidad" , id="cantidad" class="form-control" required>
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






<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="nuevoModalLabel">Registro de Ingresos Reciclado</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/controladores/GuardarRECICLADO.PHP" method="post">
          <div class="mb-3">
            <label for="nombre" class="form-label">Tipo de Reciclaje:</label>
            <select name="nombreR" id="nombreR" class="form-select" required>
              <?php while ($row_RECI = $RECI->fetch_assoc()) { ?>.
              <option value="<?php echo $row_RECI["id"]; ?>"><?= $row_RECI["nombre"] ?></option>
            <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="nombreT" class="form-label">Tipo de Residuo:</label>
            <select name="nombreT" id="nombreT" class="form-select" required onchange="actualizarCantidad()">
              <?php while ($row_tipo = $Tipos->fetch_assoc()) { ?>
                <option value="<?php echo $row_tipo["id"]; ?>" data-cantidad="<?php echo $row_tipo["cantidad"]; ?>">
                  <?= $row_tipo["nombre"]; ?>
                </option>
              <?php } ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="montoReci" class="form-label">
              Cantidad:
              <span id="cantidadLabel">
                <?php if ($row_tipo = $Tipos->fetch_assoc()) {
                  echo $row_tipo["cantidad"];
                } ?>
              </span>
            </label>
            <input type="number" name="montoReci" id="montoReci" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="Empleado" class="form-label">Empleado:</label>
            <select name="nombreE" id="nombreE" class="form-select" required>
              <?php while ($row_empleado = $Emp->fetch_assoc()) { ?>.
              <option value="<?php echo $row_empleado["id"]; ?>"><?= $row_empleado["nombre"] ?></option>
            <?php } ?>
            </select>
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