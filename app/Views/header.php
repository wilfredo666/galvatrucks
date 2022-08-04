<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galvatrucks</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/dist/css/adminlte.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/dist/css/style.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar pushmenu -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Barra principal con fullscreen -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?php echo base_url(); ?>/assest/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
                <span class="brand-text font-weight-light">Galvatrucks SRL</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url(); ?>/assest/img/cliente2.jpg" class="img-circle elevation-5" alt="User Image">
                    </div>
                    <div class=" info">
                        <a href="#" class="d-block">Elias Fernandez</a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <!--  Usuario  -->
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>/CUsuario" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Usuario
                                </p>
                            </a>
                        </li>
                        <!--  Asignaciones -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-truck-moving"></i>

                                <p>
                                    Camiones
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>/CAsignacion" class="nav-link">
                                        <i class="nav-icon fas fa-file-signature text-info"></i>
                                        <p>Asignaciones</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>/CCamion" class="nav-link">
                                        <i class="nav-icon fas fa-shipping-fast text-warning"></i>
                                        <p>Camión</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>/CContratoCamion" class="nav-link">
                                        <i class="nav-icon fas fa-file-contract text-info"></i>
                                        <p>Contrato Camión</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <!-- Clientes  -->
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>/CConductor" class="nav-link">

                                <i class="nav-icon fas fa-universal-access"></i>
                                <p>
                                    Conductores
                                </p>
                            </a>
                        </li>
                        <!-- Clientes  -->
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>/CCliente" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    Clientes
                                </p>
                            </a>
                        </li>
                        <!--  Navieras  -->
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>/CEmpresaMaritima" class="nav-link">
                                <i class="nav-icon fas fa-ship"></i>
                                <p>
                                    Navieras
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fab fa-shirtsinbulk"></i>

                                <p>
                                    Servicio
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">DOCUMENTACIÓN</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-folder-open"></i>
                                <p>
                                    Documentos
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav.html" class="nav-link">
                                        <i class="nav-icon fas fa-copy text-info"></i>
                                        <p>Clientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                        <i class="nav-icon fas fa-copy text-info"></i>
                                        <p>Conductores</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                        <i class="nav-icon fas fa-copy text-info"></i>
                                        <p>Contrato Camiones</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-door-open text-info "></i>
                                <p>Salir</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>