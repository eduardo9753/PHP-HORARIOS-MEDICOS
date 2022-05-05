<!-- Page-header end -->
<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#EditarConsultorio<?php echo $data->id_consultorio ?>">
    <i class='bx bx-edit bx-tada'></i>
</button>

<!--LLAVE DEL MODAL-->
<div class="modal fade" id="EditarConsultorio<?php echo $data->id_consultorio ?>" tabindex="-1" aria-labelledby="EditarConsultorio" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditarConsultorio">CODIGO CONSULTORIO: <?php echo $data->id_consultorio ?></h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="ActualizarConsultorio" id="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">CONSULTORIO</label>
                                    <input type="text" name="txt_id_consultorio" id="txt_id_consultorio" value="<?php echo $data->id_consultorio ?>" hidden>
                                    <input type="text" name="txt_nombre_consultorio" id="txt_nombre_consultorio" value="<?php echo $data->nombre_consultorio ?>" class="form-control">
                                </div>
                            </div>
  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="color-paus">ESTADO</label>
                                    <select class="form-control" name="txt_estado_consultorio" id="txt_estado_consultorio">
                                        <option value="A">ACTIVO</option>
                                        <option value="I">INACTIVO</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 mx-auto">
                                <button type="submit" class="btn btn-outline-primary" name="btn-editar-consultorio-administrador" id="<?php echo $data->id_consultorio ?>">Edit</button>
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