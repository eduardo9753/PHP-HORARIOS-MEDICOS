<?php include_once('view/template/head.php') ?>

<!-- Sidebar -->
<?php include_once('view/template/navMedico.php'); ?>
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
                <?php include_once('view/medico/modales/nuevaEspecialidadMedico.php'); ?>
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
                                        <th scope="col">N°</th>
                                        <th scope="col">ESPECIALIDAD</th>
                                        <th scope="col">MEDICO</th>
                                        <th scope="col">FECHA DE REGISTRO</th>
                                        <th scope="col">ACCION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dataEspecialidadMedico as $data) : $i = $i + 1; ?>
                                        <tr>
                                            <th scope="row" id=""><?php echo $i ?></th>
                                            <td id="numero"><?php echo $data->nombre_especialidad ?></td>
                                            <td id="numero"><?php echo $data->nombre_medico ?></td>
                                            <td id="numero"><?php echo $data->fecha_registro_sys ?></td>
                                            <td id="numero">
                                                <?php include('view/medico/modales/actualizarEspecialidadMedico.php'); ?>
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