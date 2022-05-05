<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevaCompania">
    Nueva Compañia
</button>

<!-- Modal -->
<div class="modal fade" id="nuevaCompania" tabindex="-1" role="dialog" aria-labelledby="nuevaCompaniaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevaCompaniaLabel">Registrar Compañia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" id="frmAjaxRegistrarCompania">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" id="txt_compania" name="txt_compania" class="form-control" placeholder="Nombre Compañia">
                                    <input type="submit" class="btn btn-primary w-100 mt-3" id="btn-registrar-compania" name="btn-registrar-compania" value="REGISTRAR">
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