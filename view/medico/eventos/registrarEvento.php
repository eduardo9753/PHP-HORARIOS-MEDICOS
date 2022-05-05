<?php

use PhpOffice\PhpSpreadsheet\Shared\Date;

include_once('view/template/head.php') ?>

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
                        <form action="" method="POST" id="frmAjaxRegistrarEvento">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Titulo</label>
                                        <input type="text" class="form-control" id="txt_titulo" value="<?php echo $_SESSION['nombre_medico'] ?>" name="txt_titulo">
                                    </div>
                                </div>

                                <div class="col-md-6">
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
                                        <input type="datetime-local" class="form-control" value="<?php echo $fecha_fin_maniana ?>" id="txt_fecha_fin" name="txt_fecha_fin">
                                    </div>
                                </div>

                                <div class="col-md-6">
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
                                    <div class="form-group">
                                        <label for="" class="">Descripcion</label>
                                        <textarea class="form-control" name="txt_descripcion" id="txt_descripcion" cols="30" rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-primary" value="REGISTRAR" id="btn-registrar" name="btn-registrar">
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