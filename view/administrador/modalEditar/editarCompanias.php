<!-- Page-header end -->
<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#EditarCompanias<?php echo $data->id_compania ?>">
    <i class='bx bx-edit bx-tada'></i>
</button>

<!--LLAVE DEL MODAL-->
<div class="modal fade" id="EditarCompanias<?php echo $data->id_compania ?>" tabindex="-1" aria-labelledby="EditarCompanias" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditarCompanias">CODIGO ESPECIALIDAD: <?php echo $data->id_compania ?></h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="ActualizarCompanias" id="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">COMPAÑIA</label>
                                    <input type="text" name="txt_id_compania" id="txt_id_compania" value="<?php echo $data->id_compania ?>" hidden>
                                    <input type="text" name="txt_nombre_compania" id="txt_nombre_compania" value="<?php echo $data->nombre_compania ?>" class="form-control">
                                </div>
                            </div>
  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="color-paus">ESTADO</label>
                                    <select class="form-control" name="txt_estado_compania" id="txt_estado_compania">
                                        <option value="A">ACTIVO</option>
                                        <option value="I">INACTIVO</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 mx-auto">
                                <button type="submit" class="btn btn-outline-primary" name="btn-editar-compania-administrador" id="<?php echo $data->id_compania ?>">Edit</button>
                            </div>
                        </div>
                    </form>
                    <!--end row-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>