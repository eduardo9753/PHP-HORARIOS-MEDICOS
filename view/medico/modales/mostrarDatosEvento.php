<div class="modal fade" id="modalEvento" tabindex="-1" aria-labelledby="modalEventoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloEvento"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input type="text" class="form-control" id="txt_titulo" name="txt_titulo">
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
                            <input type="text" class="form-control" id="txt_medico" name="txt_medico">
                        </div>
                    </div>
                    
                    <!--<div class="col-md-6">
                        <div class="form-group">
                            <label for="">Color</label>
                            <input type="color" class="form-control" id="txt_color" name="txt_color">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Color del Texto</label>
                            <input type="color" class="form-control" id="txt_color_texto" name="txt_color_texto">
                        </div>
                    </div>-->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Fecha Inicio</label>
                            <input type="datetime-local" class="form-control" id="txt_fecha_inicio" name="txt_fecha_inicio">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Fecha Fin</label>
                            <input type="datetime-local" class="form-control" id="txt_fecha_fin" name="txt_fecha_fin">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <form action="editarEvento" method="POST" id="">
                            <input type="text" class="form-control" id="txt_id" name="txt_id" hidden>
                            <input type="submit" class="btn btn-success" value="VER HORARIO" id="btn-editar-evento" name="btn-editar-evento">
                        </form>
                    </div>

                    <div class="col-md-4">
                        <form action="" method="POST" id="frmAjaxEliminarEventoMedico">
                            <input type="text" class="form-control" id="txt_id_eliminar_evento" name="txt_id_eliminar_evento" hidden>
                            <input type="submit" class="btn btn-danger" value="ELIMINAR" id="btn-eliminar-evento-medico" name="btn-eliminar-evento-medico">
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>