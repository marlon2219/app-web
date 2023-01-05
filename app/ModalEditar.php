<div class="modal fade" id="modiFoto<?php echo $fila['idFoto'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="recibi_Update.php" method="post" class="mt-5" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $fila['idFoto'] ?>">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombreFoto" value="<?php echo $fila['nombre'] ?>">

                    </div>
                    <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text" class="form-control" name="descripcionFoto" value="<?php echo $fila['descripcion'] ?>">
                        <small class="form-text text-muted">Ingrese el N° documento sin espacios ni caracteres especiales</small>
                    </div>

                    <div class="mt-5">
                        <input type="submit" class="btn btn-primary" name="formulario" value="Agregar">

                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>