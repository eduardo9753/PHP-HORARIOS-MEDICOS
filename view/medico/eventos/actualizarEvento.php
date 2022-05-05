<?php include_once('view/template/head.php') ?>

<?php include_once('view/template/navMedico.php'); ?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <?php include_once('view/template/setting.php'); ?>
        <!-- End of Topbar -->


        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?php echo $titulo ?></h1>
                <!--helpers verCalendario-->
                <?php include_once('view/helpers/verCalendarioMedico.php'); ?>
            </div>
            <!-- Content Row -->
            <div class="row">
                <!-- Page-header end -->
                <div class="card mx-auto">
                    <div class="card-body">
                        <form action="" method="POST" id="frmAjaxActualizarEvento">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Titulo</label>
                                        <input type="text" class="form-control" id="txt_id" name="txt_id" value="<?php echo $dataEvento->id ?>" hidden>
                                        <input type="text" class="form-control" id="txt_titulo" name="txt_titulo" value="<?php echo $dataEvento->title ?>" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">ESTADO ACTUAL</label>
                                        <input type="text" class="form-control" id="txt_paciente" name="txt_paciente" value="<?php echo $dataEvento->estado ?>" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Medico</label>
                                        <input type="text" class="form-control" id="txt_medico" name="txt_medico" value="<?php echo $dataEvento->medico ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Color de Fondo</label>
                                        <input type="color" class="form-control" id="txt_color" name="txt_color" value="<?php echo $dataEvento->backgroundColor ?>" readonly>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Color del Texto</label>
                                        <input type="color" class="form-control" id="txt_color_texto" name="txt_color_texto" value="<?php echo $dataEvento->textColor ?>" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Fecha Inicio</label>
                                        <input type="datetime-local" class="form-control" id="txt_fecha_inicio" name="txt_fecha_inicio" value="<?php echo $this->SESSION->formatFechaDateTimeLocal($dataEvento->start) ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Fecha Fin</label>
                                        <input type="datetime-local" class="form-control" id="txt_fecha_fin" name="txt_fecha_fin" value="<?php echo $this->SESSION->formatFechaDateTimeLocal($dataEvento->end) ?>">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Descripcion</label>
                                        <textarea class="form-control" name="txt_descripcion" id="txt_descripcion" cols="30" rows="5"><?php echo $dataEvento->descripcion ?></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-primary" value="ACTUALIZAR DATOS" id="btn-actualizar-evento" name="btn-actualizar-evento">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Page-header end -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->




    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website - <?php echo Date('Y') ?></span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
<?php include_once('view/template/footer.php'); ?>