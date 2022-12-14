<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="card-header">
      <h3 class="font-weight-light ">Panel Principal </h3>
    </div>
  </section>
    <!-- /.content-header -->

    <?php if (session("usuario.rol") == "Administrador" || session("usuario.rol") == "Auxiliar") {
    ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box encabezado3">
                            <div class="inner">
                                <h3><i class="fas fa-users">  <?php echo session( "clientes")?></i></h3>
                                <p>CLIENTES REGISTRADOS</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-stalker"></i>
                            </div>
                            <a href="<?php echo base_url(); ?>/CCliente" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box encabezado2">
                            <div class="inner">
                                <h3><i class="fas fa-exclamation-circle"> <?php echo session( "solPendiente");?></i></h3>

                                <p>SOLICITUDES PENDIENTES</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-information-circled"></i>
                            </div>
                            <a href="<?php echo base_url(); ?>/CCliente/solicitudServ" class="small-box-footer">Más Información<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box encabezado">
                            <div class="inner">
                                <h3><i class="fas fa-truck"> <?php echo session( "servicio");?></i></h3>

                                <p>SERVICIOS</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-load-b"></i>
                            </div>
                            <a href="<?php echo base_url(); ?>/CServicio" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                   <!--  <div class="col-lg-3 col-6">
                      
                        <div class="small-box encabezado4">
                            <div class="inner">
                                <h3>65</h3>

                                <p>SERVICIOS FINALIZADOS</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-flag"></i>
                            </div>
                            <a href="#" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div> -->
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    <?php
    } ?>
    <?php if (session("usuario.rol") == "Cliente") {
    ?>
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box encabezado3">
                            <div class="inner">
                                <h3><?php  $soli ?><i class="fas fa-map-marker-alt"></i></h3>
                                <p>RASTREAR CONTENEDOR</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-location"></i>
                            </div>
                            <a href="<?php echo base_url(); ?>/CServicio/seguimientoContCli" class="small-box-footer">Más Información<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box encabezado5">
                            <div class="inner">
                                <h3><i class="fas fa-sort-amount-down-alt"><?php echo $servicioPen ?></i></h3>
                                <p>MIS SOLICITUDES</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-load-b"></i>
                            </div>
                            <a href="<?php echo base_url(); ?>/CSolicitudServicio" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box encabezado4">
                            <div class="inner">
                                <h3><?php echo $servicio ?><i class="fab fa-atlassian"></i></h3>
                                <p>MIS SERVICIOS</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-flag"></i>
                            </div>
                            <a href="<?php echo base_url(); ?>/CServicio/servCliente" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    <?php
    } ?>
    <!-- <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <img src="<?php echo base_url(); ?>/assest/img/descarga.webp" alt="" style="width: 98%;">
            </div>
        </div>
    </div> -->
    <!-- /.content -->
</div>