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
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/dist/css/adminlte.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/plugins/bs-stepper/css/bs-stepper.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/dist/css/style.css">
  <!-- icono pagina -->
  <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>/assest/img/faviconG.ico" />
  <style>

  </style>

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
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>/CUsuario/Panel" role="button"><i class="fas fa-home"></i> Panel Principal</i></a>
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
      <a href="<?php echo base_url(); ?>/CUsuario/Panel" class="brand-link">
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
          <div class="info">
            <!-- colocar para sessiones session('usuario') y descomentar la lineas SESSIONS Del controlador HOME linea 30,31 -->
            <a class=""><?php echo session("nombre_usuario"); ?></a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
            <!--  Usuario  -->
            <?php if (session("rol") == "Administrador") {
            ?>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/CUsuario" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Usuario
                  </p>
                </a>
              </li>
            <?php
            } ?>
            <?php if (session("rol") == "Administrador" || session("rol") == "Auxiliar") {
            ?>
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
                      <i class="nav-icon far fa-circle text-warning"></i>
                      <p>Asignaciones</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/CCamion" class="nav-link">
                      <i class="nav-icon fa fa-shipping-fast text-info"></i>
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

              <!--  CONDUCTORES -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/CConductor" class="nav-link">
                  <i class="nav-icon fas fa-universal-access"></i></i>
                  <p>
                    Conductores
                  </p>
                </a>
              </li>

              <!-- Clientes  -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/CCliente" class="nav-link">
                  <i class="nav-icon fas fa-users "></i></i>
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

              <!-- Para Conductor y tambien Administrador -->

              <!--  <php
            if (session("rol") == "Conductor" || session("rol") == "Administrador") {
            ?> -->
              <!--  Rutas  -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/CRuta" class="nav-link">
                  <i class="nav-icon fas fa-map-marker-alt"></i>
                  <p>
                    Rutas
                  </p>
                </a>
              </li>
              <!--   <php
            }
            ?> -->

              <!-- Para Conductor y tambien Administrador -->


              <!--  SERVICIOS-->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fab fa-docker"></i>
                  <p>
                    Servicios
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/CCliente/solicitudServ" class="nav-link">
                      <i class="nav-icon fas fa-check-circle text-warning"></i>
                      <p>Solicitud de Servicios</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/CServicio" class="nav-link">
                      <i class="nav-icon fab fa-shirtsinbulk text-warning"></i>
                      <p>Lista de Servicios</p>
                    </a>
                  </li>
                  <!--  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/CPagos" class="nav-link">
                      <i class="nav-icon fas fa-credit-card text-info"></i>
                      <p>Pagos</p>
                    </a>
                  </li> -->
                </ul>
              </li>
              <!-- PAGOS -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-credit-card"></i>
                  <p>
                    Pagos
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url() ?>/CPago/NuevoPago" class="nav-link">
                      <i class="nav-icon fas fa-plus-circle text-warning"></i>
                      <p>Nuevo Pago</p>
                    </a>
                  </li>
                  <!-- <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/CPago" class="nav-link">
                      <i class="nav-icon fas fa-receipt text-warning"></i>
                      <p>Lista de Pagos</p>
                    </a>
                  </li> -->
                </ul>
              </li>
              <!--  SEGUIMIENTOS DE CONTENEDOR -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/CServicio/seguimientoContenedor" class="nav-link">
                  <i class="nav-icon  fas fa-flag-checkered"></i>
                  <p>
                    Seguimiento de Contenedores
                  </p>
                </a>
              </li>


              <!--  REPORTES -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon  fas fa-poll"></i>
                  <p>
                    Reportes
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/CServicio/notaDebito" class="nav-link">
                      <i class="nav-icon far fa-circle text-warning"></i>
                      <p>Generar Nota de Débito</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/CCliente/repCliente" class="nav-link">
                      <i class="nav-icon far fa-circle text-warning"></i>
                      <p>Reporte por Cliente</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/CConductor/repConductor" class="nav-link">
                      <i class="nav-icon far fa-circle text-warning"></i>
                      <p>Reporte por Conductor</p>
                    </a>
                  </li>
                </ul>
              </li>
            <?php
            } ?>


            <?php if (session("rol") == "Administrador") {
            ?>
              <li class="nav-header">DOCUMENTACIÓN</li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/CServicio/notaDebito" class="nav-link">
                  <i class="nav-icon fas fa-folder-open"></i>
                  <p>
                    Generar Nota de Débito
                  </p>
                </a>
              </li>
              <!-- <li class="nav-item">
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
              </li> -->
            <?php
            }
            ?>



            <!-- PARA LAS VISTAS DEL ROL CLIENTE -->
            <?php
            if (session("rol") == "Cliente") {
            ?>
              <!-- MI PERFIL -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/CCliente/miPerfil" class="nav-link">
                  <i class="nav-icon fas fa-user-cog"></i>
                  <p>
                    Mi Perfil
                  </p>
                </a>
              </li>
              <!-- FUNCIONES DEL ROL CLIENTE -->
              <li class="nav-header">OPCIONES</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-layer-group"></i>
                  <p>
                    Funciones
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/CSolicitudServicio" class="nav-link">
                      <i class="nav-icon far fa-plus-square text-warning"></i>
                      <p>Solicitar Servicio</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/CServicio/seguimientoContenedor" class="nav-link">
                      <i class="nav-icon fas fa-map-marked-alt text-warning"></i>
                      <p>Seguimiento de contenedores</p>
                    </a>
                  </li>
                  <!--                   <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-file-upload text-warning"></i>
                      <p>Subir Archivos de Importacion</p>
                    </a>
                  </li> -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-print text-warning"></i>
                      <p>Mis Reportes</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-money-check text-warning"></i>
                      <p>Mis notas de Débito</p>
                    </a>
                  </li>
                </ul>
              </li>
            <?php
            }
            ?>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>/Home/salir" class="nav-link">
                <i class="nav-icon fas fa-power-off text-info "></i>
                <p>Cerrar sesión</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>