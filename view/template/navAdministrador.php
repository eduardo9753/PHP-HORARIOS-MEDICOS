<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboardADM">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="dashboardADM">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu-->
    <li class="nav-item <?php echo $active_usuario; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseComponentes" aria-expanded="true" aria-controls="collapseComponentes">
            <i class="fas fa-fw fa-cog"></i>
            <span>Gestion Usuario</span>
        </a>
        <div id="collapseComponentes" class="collapse <?php echo $show_usuario; ?>" aria-labelledby="headingComponentes" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Usuarios:</h6>
                <a class="collapse-item <?php echo ($ruta == 'listarUsuarios') ? "active" : ""; ?>" href="listarUsuarios">Lista de Usuarios</a>
            </div>
        </div>
    </li>


    <!-- PAGINAS ESTADO MEDICOS -->
    <li class="nav-item <?php echo $active_medico; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMedico" aria-expanded="true" aria-controls="collapseMedico">
            <i class='bx bx-link-alt'></i>
            <span>Estados Medicos <?php echo $this->ASSET->mesActualCadena() ?></span>
        </a>
        <div id="collapseMedico" class="collapse <?php echo $show_medico; ?>" aria-labelledby="headingMedico" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Metodos:</h6>
                <a class="collapse-item <?php echo ($ruta == 'Registrados') ? "active" : ""; ?>" href="Registrados">Medicos Registrados</a>
                <a class="collapse-item <?php echo ($ruta == 'Aprobados') ? "active" : ""; ?>" href="Aprobados">Medicos Aprobados</a>
                <a class="collapse-item <?php echo ($ruta == 'Rechazados') ? "active" : ""; ?>" href="Rechazados">Medicos Rechazados</a>
            </div>
        </div>
    </li>

    <!-- PAGINAS ESTADO MEDICOS MES SIGUIENTE-->
    <li class="nav-item <?php echo $active_medico_mes_siguiente; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMedicoMesSiguiente" aria-expanded="true" aria-controls="collapseMedicoMesSiguiente">
            <i class='bx bx-link-alt'></i>
            <span>Estados Medicos <?php echo $this->ASSET->mesSiguienteCadena() ?></span>
        </a>
        <div id="collapseMedicoMesSiguiente" class="collapse <?php echo $show_medico_mes_siguiente; ?>" aria-labelledby="headingMedico" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Metodos:</h6>
                <a class="collapse-item <?php echo ($ruta == 'RegistradosMesSiguiente') ? "active" : ""; ?>" href="RegistradosMesSiguiente">Registrados <?php echo $this->ASSET->mesSiguienteCadena() ?></a>
                <a class="collapse-item <?php echo ($ruta == 'AprobadosMesSiguiente') ? "active" : ""; ?>" href="AprobadosMesSiguiente">Aprobados <?php echo $this->ASSET->mesSiguienteCadena() ?></a>
                <a class="collapse-item <?php echo ($ruta == 'RechazadosMesSiguiente') ? "active" : ""; ?>" href="RechazadosMesSiguiente">Rechazados <?php echo $this->ASSET->mesSiguienteCadena() ?></a>
            </div>
        </div>
    </li>

    <!-- PAGINAS GESTION MEDICOS -->
    <li class="nav-item <?php echo $active_medico_gestion; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGestionMedico" aria-expanded="true" aria-controls="collapseGestionMedico">
            <i class='bx bx-link-alt'></i>
            <span>Gestion Medicos</span>
        </a>
        <div id="collapseGestionMedico" class="collapse <?php echo $show_medico_gestion; ?>" aria-labelledby="headingGestionMedico" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Metodos:</h6>
                <a class="collapse-item <?php echo ($ruta == 'Medico') ? "active" : ""; ?>" href="Medico">Nuevo Medico</a>
                <a class="collapse-item <?php echo ($ruta == 'Consultorios') ? "active" : ""; ?>" href="Consultorios">Consultorios</a>
                <a class="collapse-item <?php echo ($ruta == 'Especialidades') ? "active" : ""; ?>" href="Especialidades">Especialidades</a>
                <a class="collapse-item <?php echo ($ruta == 'Companias') ? "active" : ""; ?>" href="Companias">Compañias</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item <?php echo $active_grafico; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEstadistica" aria-expanded="true" aria-controls="collapseEstadistica">
            <i class="fas fa-fw fa-wrench"></i>
            <span>ESTADISTICAS</span>
        </a>
        <div id="collapseEstadistica" class="collapse <?php echo $show_grafico; ?>" aria-labelledby="headingEstadistica" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">GRAFICOS Y ESTADOS:</h6>
                <a class="collapse-item <?php echo ($ruta == 'Graficos') ? "active" : ""; ?>" href="Graficos">Graficos</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Acciones
    </div>


    <!-- ACTUALIZAR MI USUARIO -->
    <li class="nav-item <?php echo ($ruta == 'ProfileAdministrador') ? "active" : ""; ?>">
        <a class="nav-link " href="ProfileAdministrador">
            <i class='bx bxs-user-pin'></i>
            <span>Profile</span></a>
    </li>

    <!-- CERRAR SESSION -->
    <li class="nav-item <?php echo ($ruta == 'Close') ? "active" : ""; ?>">
        <a class="nav-link" href="Close">
            <i class='bx bx-log-out bx-tada'></i>
            <span> Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>