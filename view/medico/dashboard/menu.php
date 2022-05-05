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
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <!--helpers verCalendario-->
                <?php include_once('view/helpers/verCalendarioMedico.php'); ?>
            </div>
            <!-- Content Row -->
            <div class="row">
                <div class="col-md-12">
                    <!--Nombre de mi calendario-->
                    <div id='calendar'></div>
                    <!-- Modal  EDITAR | ACTUALIZAR-->
                    <?php include_once('view/medico/modales/mostrarDatosEvento.php'); ?>
                    <!--MODAL REGISTRAR EVENTO-->
                    <?php include_once('view/medico/modales/insertarDatosEvento.php'); ?>
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