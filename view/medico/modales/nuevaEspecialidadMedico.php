<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevaEspecialidad">
    Nueva Especialidad
</button>

<!-- Modal -->
<div class="modal fade" id="nuevaEspecialidad" tabindex="-1" role="dialog" aria-labelledby="nuevaEspecialidadLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevaEspecialidadLabel">Registrar Especialidad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form action="registrarEspecialidadMedico" method="POST" id="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Especialidad</label>
                                        <select name="txt_especialidad" class="form-select" id="txt_especialidad">
                                            <?php foreach ($dataEspecialidades as $data) : ?>
                                                <option value="<?php echo $data->id_especialidad ?>"><?php echo $data->nombre_especialidad ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div> <input type="submit" class="btn btn-primary w-100 " id="btn-registrar-especialidad-medico" name="btn-registrar-especialidad-medico" value="REGISTRAR"></div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>