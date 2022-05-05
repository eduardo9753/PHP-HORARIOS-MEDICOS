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
                <?php include_once('view/helpers/verCalendario.php'); ?>
            </div>
            <!-- Content Row -->
            <div class="row">
                <!-- Page-header end -->
                <div class="card mx-auto">
                    <div class="card-body">
                        <table id="datatable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center text-capitalize">N°</th>
                                    <th class="text-center text-capitalize">PACIENTE</th>
                                    <th class="text-center text-capitalize">SEXO</th>
                                    <th class="text-center text-capitalize">MEDICO</th>
                                    <th class="text-center text-capitalize">ESPECIALIDAD</th>
                                    <th class="text-center text-capitalize">EN SALA</th>
                                    <th class="text-center text-capitalize">RECUPERACION</th>
                                    <th class="text-center text-capitalize">DE ALTA</th>
                                    <th class="text-center text-capitalize">ESTADO</th>
                                    <th scope="col text-center text-capitalize">CAMBIAR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dataSopMySql as $data) : $i = $i + 1; ?>
                                    <tr class="">
                                        <td><?php echo $i; ?></td>
                                        <td class="text-center"><?php echo $this->MSG->DELETE_ACENTO(utf8_encode($data->NOMBRE_PAC)); ?></td>
                                        <td><?php if ($data->SEXO_PAC == 'M') :  ?>
                                                <img src="public/img/man.png" alt="">
                                            <?php else : ?>
                                                <img src="public/img/woman.png" alt="">
                                            <?php endif ?>
                                        </td>
                                        <td class="text-center"><?php echo $this->MSG->DELETE_ACENTO(utf8_encode($data->NOMBRE_PROFESIONAL)); ?></td>
                                        <td class="text-center"><?php echo $this->MSG->DELETE_ACENTO(utf8_encode($data->NOMBRE_ESPECIALIDAD)); ?></td>
                                        <td class="text-center"><?php echo utf8_encode($data->FECHA_CHEKLIST); ?></td>
                                        <td class="text-center"><?php echo utf8_encode($data->FECHA_RECUPERACION); ?></td>
                                        <td class="text-center"><?php echo utf8_encode($data->FECHA_SALIDA); ?></td>
                                        <td class="text-center"><?php if ($data->ESTADO == '1') : ?>
                                                <button type="button" class="btn btn-success"><i class='bx bx-alarm bx-tada'></i></button>
                                            <?php elseif ($data->ESTADO == '2') : ?>
                                                <button type="button" class="btn btn-warning"><i class='bx bx-smile bx-tada'></i></button>
                                            <?php elseif ($data->ESTADO == '3') : ?>
                                                <button type="button" class="btn btn-primary"><i class='bx bx-right-arrow-alt bx-fade-left'></i></button>
                                            <?php endif ?>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#pacienteEstado<?php echo $data->ID_NHC ?>">
                                                <i class='bx bxs-hand bx-tada'></i>
                                            </button>
                                            <?php include('view/modales/estadoPacienteSop.php'); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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