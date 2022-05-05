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
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <!--helpers verCalendario-->
                <?php //include_once('view/helpers/verCalendario.php'); 
                ?>
            </div>
            <!-- Content Row -->
            <div class="row">
                <div class="col-md-12 mx-auto mb-5">
                    <!--Nombre de mi calendario-->
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center lead">BIENVENID@: <?php echo $_SESSION['nombre_usuario'] ?></h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card">
                        <div class="card-body">
                            <a href="Registrados" class="btn btn-primary text-center text-white">Medicos Horarios Registrados</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card">
                        <div class="card-body">
                            <a href="Aprobados" class="btn btn-success text-center text-white">Medicos Horarios Aprobados</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card">
                        <div class="card-body">
                            <a href="Rechazados" class="btn btn-danger text-center text-white">Medicos Horarios Rechazados</a>
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