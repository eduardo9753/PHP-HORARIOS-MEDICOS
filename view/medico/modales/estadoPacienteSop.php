<!-- Modal -->
<div class="modal fade" id="pacienteEstado<?php echo $data->ID_NHC ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Paciente : <?php echo $data->NOMBRE_PAC ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form action="pacienteEstado" method="POST" id="">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" id="txt_id" name="txt_id" value="<?php echo $data->ID_NHC ?>" hidden>
                                    <select name="txt_estado" id="txt_estado" class="form-select">
                                        <option value="5">FALLECIDO</option>
                                    </select>
                                    <input type="submit" class="btn btn-primary w-100 mt-3" id="btn-paciente-atendido" name="btn-paciente-atendido" value="ACTUALIZAR EL ESTADO">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


