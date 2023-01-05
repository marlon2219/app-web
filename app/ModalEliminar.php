<div class="modal fade" id="deleteFoto<?php echo $fila['idFoto']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Estas seguro que quieres eliminar la foto : </h5>
                                                        
                                                    </div>
                                                    <div class="modal-body">
                                                        <strong style="text-align: center !important">
                                                        <?php echo $fila['nombre']?>
                                                        </strong>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <form action="recibi_Delete.php" >
                                                        <input type="hidden" name="id" value="<?php echo $fila['idFoto']?>">
                                                        <button type="submit" class="btn btn-primary" id="<?php echo $fila['idFoto']?>">Borrar</button>
                                                        </form>
                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>