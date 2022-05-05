<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevoMedico">
    Nuevo Medico
</button>

<!-- Modal -->
<div class="modal fade" id="nuevoMedico" tabindex="-1" role="dialog" aria-labelledby="nuevoMedicoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoMedicoLabel">Registrar Medico</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form action="RegistrarMedico" id="frmAjaxRegistrarMedico" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Nombres del Medico</label>
                                        <input type="text" id="txt_medico" name="txt_medico" class="form-control" placeholder="Nombres Completos">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Codigo del Medico</label>
                                        <input type="text" id="txt_codigo_medico" name="txt_codigo_medico" class="form-control" placeholder="Codigo">
                                    </div>
                                </div>
  
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Especialidad</label>
                                        <select name="txt_especialidad" class="form-select" id="txt_especialidad">
                                            <?php foreach ($dataEspecialidades as $data) : ?>
                                                <option value="<?php echo $data->id_especialidad ?>"><?php echo $data->nombre_especialidad ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Consultorio</label>
                                        <select name="txt_consultorio" class="form-select" id="txt_consultorio">
                                            <?php foreach ($dataConsultorio as $data) : ?>
                                                <option value="<?php echo $data->id_consultorio ?>"><?php echo $data->nombre_consultorio ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Compañia</label>
                                        <select name="txt_compania" class="form-select" id="txt_compania">
                                            <?php foreach ($dataCompanias as $data) : ?>
                                                <option value="<?php echo $data->id_compania ?>"><?php echo $data->nombre_compania ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <input type="submit" class="btn btn-primary w-100 mt-3" id="btn-registrar-medico" name="btn-registrar-medico" value="MEDICO">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>