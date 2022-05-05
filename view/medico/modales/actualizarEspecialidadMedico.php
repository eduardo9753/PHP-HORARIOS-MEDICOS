<!-- Page-header end -->
<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#EditarEspecialidadMedico<?php echo $data->id ?>">
    <i class='bx bx-edit bx-tada'></i>
</button>

<!--LLAVE DEL MODAL-->
<div class="modal fade" id="EditarEspecialidadMedico<?php echo $data->id ?>" tabindex="-1" aria-labelledby="EditarEspecialidadMedico" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditarEspecialidadMedico">CODIGO ESPECIALIDAD: <?php echo $data->id ?></h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="ActualizarEspecialidadMedico" id="" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="color-paus">ESCOGA LA ESPECIALIDAD A ACTUALIZAR</label>
                                    <input type="text" name="txt_id" id="txt_id" value="<?php echo $data->id ?>" hidden>
                                    <select name="txt_especialidad" class="form-select" id="txt_especialidad">
                                        <?php foreach ($dataEspecialidades as $data) : ?>
                                            <option value="<?php echo $data->id_especialidad ?>"><?php echo $data->nombre_especialidad ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 mx-auto">
                                <button type="submit" class="btn btn-outline-primary" name="btn-editar-especialidad-medico" id="<?php echo $data->id ?>">Edit</button>
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

  