<?php include_once('view/template/head.php') ?>

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
                <h1 class="h3 mb-0 text-gray-800"><?php echo $titulo ?></h1>
                <!--helpers verCalendario-->
                <?php //include_once('view/helpers/verCalendario.php'); 
                ?>
            </div>
            <!-- Content Row -->
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <!--Nombre de mi calendario-->
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">MEDICO</th>
                                        <th scope="col">CODIGO</th>
                                        <th scope="col">CONSULTORIO</th>
                                        <th scope="col">ESTADO ACTUAL</th>
                                        <th scope="col">ACCION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataMedico as $data) : $i = $i + 1; ?>
                                        <tr>
                                            <th scope="row"><?php echo $i ?></th>
                                            <td><?php echo $data->nombre_medico ?></td>
                                            <td><?php echo $data->codigo_medico ?></td>
                                            <td><?php echo $data->nombre_consultorio ?></td>
                                            <td><?php echo $data->estado ?></td>
                                            <td>
                                                <form action="calendarioEstadoMedico" method="POST">
                                                    <input type="text" value="<?php echo $data->id_medico ?>" name="txt_id_medico" id="txt_id_medico" hidden>
                                                    <input type="text" value="<?php echo $data->id_estado ?>" name="txt_estado" id="txt_estado" hidden>
                                                    <input type="text" value="<?php echo $mesActual ?>" name="txt_mes_actual" id="txt_mes_actual" hidden>
                                                    <input type="submit" class="btn btn-success" name="btn-horario-medico-mes-actual-rechazados" id="btn-horario-medico-mes-actual-rechazados" value="Ver">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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