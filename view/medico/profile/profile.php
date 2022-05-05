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
                        <form action="update" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">USUARIO ACTUAL</label>
                                        <input type="text" class="form-control" name="txt_usuario" value="<?php echo $_SESSION['nombre_usuario'] ?>" id="txt_usuario">
                                    </div>

                                    <div class="form-group">
                                        <label for="">CONTRASEÑA ACTUAL</label>
                                        <input type="text" class="form-control" name="txt_pass" value="<?php echo $_SESSION['contra_usuario'] ?>" id="txt_pass">
                                    </div>

                                    <div class="form-group">
                                        <label for="">PERFIL</label>
                                        <input type="text" readonly class="form-control" name="txt_perfil" value="<?php echo $_SESSION['perfil'] ?>" id="txt_perfil">
                                    </div>

                                    <div class="form-group">
                                        <label for="">AREA</label>
                                        <input type="text" readonly class="form-control" name="txt_area" id="txt_area" value="<?php echo $_SESSION['area_usuario']; ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="morado my-2">Seleccione una Foto</label>
                                        <input type="file" name="file" class="form-control" accept=".jpg, .jpeg, .png" id="img">
                                        <div class="text-center my-3 img-vista"> <img src="" id="imgPreview" alt="imgPreview" class="img-fluid"></div>
                                    </div>

                                    <div class="form-group text-center">
                                        <label for="" class="morado my-2">Foto Actual</label>
                                        <img src="<?php echo $_SESSION['foto']; ?>" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div><button type="submit" class="btn btn-primary w-100" name="btn-update-profile" id="btn-update-profile">UPDATE PROFILE</button></div>
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
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
<?php include_once('view/template/footer.php'); ?>