<?php
include_once('view/template/head.php') ?>

<!-- Sidebar -->
<?php include_once('view/template/navAdministrador.php'); ?>
<!-- End of Sidebar -->

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
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <!--helpers verCalendario-->
                <?php include_once('view/helpers/verCalendarioADM.php'); ?>
            </div>
            <!-- Content Row -->
            <div class="row">
                <div class="col-md-12">
                    <?php if ($estado == '1') : ?>
                        <div class="d-flex">
                            <div class="">
                                <form action="" id="frmAjaxAprobarEventoMedicoMes" method="POST">
                                    <input type="text" value="<?php echo $data->id_medico ?>" name="txt_id_medico" id="txt_id_medico" hidden>
                                    <input type="text" value="<?php echo $mes ?>" name="txt_mes" id="txt_mes" hidden>
                                    <input type="text" value="<?php echo $estado ?>" name="txt_estado" id="txt_estado" hidden>
                                    <button type="submit" name="btn-aprobar-evento-medico-mes" id="btn-aprobar-evento-medico-mes" class="btn btn-outline-success mb-3">Aprobar Mes</button>
                                </form>
                            </div>

                            <div class="ml-3">
                                <form action="" id="frmAjaxRechazarEventoMedicoMes" method="POST">
                                    <input type="text" value="<?php echo $data->id_medico ?>" name="txt_id_medico" id="txt_id_medico" hidden>
                                    <input type="text" value="<?php echo $mes ?>" name="txt_mes" id="txt_mes" hidden>
                                    <input type="text" value="<?php echo $estado ?>" name="txt_estado" id="txt_estado" hidden>
                                    <button type="submit" name="btn-rechazar-evento-medico-mes" id="btn-rechazar-evento-medico-mes" class="btn btn-outline-danger mb-3">Rechazar Mes</button>
                                </form>
                            </div>
                        </div>
                    <?php elseif ($estado == '2') : ?>
                        <div class="col-md-4">
                            <form action="" id="" method="POST">
                                <input type="text" value="<?php echo $data->id_medico ?>" name="txt_id_medico" id="txt_id_medico" hidden>
                                <input type="text" value="<?php echo $mes ?>" name="txt_mes" id="txt_mes" hidden>
                                <input type="text" value="<?php echo $estado ?>" name="txt_estado" id="txt_estado" hidden>
                                <!--<button type="submit" name=" id=" class="btn btn-success mb-3">Aprobados</button>-->
                            </form>
                        </div>
                    <?php elseif ($estado == '3') : ?>
                        <div class="col-md-4">
                            <form action="" id="frmAjaxEliminarEventoMedicoMes" method="POST">
                                <input type="text" value="<?php echo $data->id_medico ?>" name="txt_id_medico" id="txt_id_medico">
                                <input type="text" value="<?php echo $mes ?>" name="txt_mes" id="txt_mes">
                                <input type="text" value="<?php echo $estado ?>" name="txt_estado" id="txt_estado">
                                <button type="submit" name="btn-eliminar-evento-medico-mes" id="btn-eliminar-evento-medico-mes" class="btn btn-outline-danger mb-3">Eliminar Mes</button>
                            </form>
                        </div>
                    <?php endif ?>


                    <!--Nombre de mi calendario-->
                    <div id='calendarAdministrador'></div>
                    <!-- Modal  EDITAR | ACTUALIZAR-->
                    <?php include_once('view/administrador/modal/mostrarDatosEvento.php'); ?>
                </div>
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