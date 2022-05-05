<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrarEvento">
  Registrar Evento
</button>

<!-- Modal -->
<div class="modal fade" id="registrarEvento" tabindex="-1" aria-labelledby="registrarEventoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registrarEventoLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" id="frmAjaxRegistrarEvento">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Titulo</label>
                <input type="text" class="form-control" id="txt_titulo" name="txt_titulo" value="<?php echo $_SESSION['nombre_medico'] ?>">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Descripcion</label>
                <textarea class="form-control" name="txt_descripcion" id="txt_descripcion" cols="30" rows="5"></textarea>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="">Medico</label>
                <select name="txt_medico" id="txt_medico" class="form-control">
                  <?php foreach ($dataMedico as $data) : ?>
                    <option value="<?php echo $data->id_medico ?>"><?php echo $data->nombre_medico ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Color de Fondo</label>
                <input type="color" class="form-control" id="txt_color" name="txt_color" value="#ea7910" readonly>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Color del Texto</label>
                <input type="color" class="form-control" id="txt_color_texto" name="txt_color_texto" value="#ffffff" readonly>
              </div>
            </div>
            <?php $fecha_inicio_maniana = Date('Y-m-d') . "T" . "06:00:00" ?>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Fecha Inicio</label>
                <input type="datetime-local" class="form-control" value="<?php echo $fecha_inicio_maniana ?>" id="txt_fecha_inicio" name="txt_fecha_inicio">
              </div>
            </div>
            <?php $fecha_fin_maniana = Date('Y-m-d') . "T" . "12:00:00" ?>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Fecha Fin</label>
                <input type="datetime-local" class="form-control" id="txt_fecha_fin" value="<?php echo $fecha_fin_maniana ?>" name="txt_fecha_fin">
              </div>
            </div>

            <div class="col-md-12 mb-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check_turno_tarde" id="check_turno_tarde" data-bs-toggle="collapse" data-bs-target="#turno_tarde" aria-expanded="false" aria-controls="collapseExample">
                <label class="form-check-label mb-3" for="check_turno_tarde">ACTIVAR TURNO TARDE</label>
                <div class="collapse" id="turno_tarde">
                  <div class="row">
                    <div class="col-md-6">
                      <?php $fecha_inicio_tarde = "13:00:00" ?>
                      <label for="">Hora Inicio</label>
                      <input type="time" class="form-control" name="txt_hora_turno_tarde_inicio" value="<?php echo $fecha_inicio_tarde ?>" id="txt_hora_turno_tarde_inicio">
                    </div>
                    <div class="col-md-6">
                      <?php $fecha_fin_tarde = "16:00:00" ?>
                      <label for="">Hora Fin</label>
                      <input type="time" class="form-control" name="txt_hora_turno_tarde_fin" value="<?php echo $fecha_fin_tarde ?>" id="txt_hora_turno_tarde_fin">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <input type="submit" class="btn btn-primary w-100 my-2" value="REGISTRAR" id="btn-registrar" name="btn-registrar">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>