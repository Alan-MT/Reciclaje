<div class="modal fade" id="residuoModal" tabindex="-1" aria-labelledby="residuoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="residuoModalLabel">Tipo Residuo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/controladores/guardarResiduo.php" method="post">
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