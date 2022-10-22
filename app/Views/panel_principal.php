<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Panel Principal</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php if (session("rol") == "Administrador" || session("rol") == "Auxiliar") {
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
                                <h3>150</h3>

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
                                <h3>53<sup style="font-size: 20px">%</sup></h3>

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
                                <h3>44</h3>

                                <p>SERVICIOS EN PROGRESO</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-load-b"></i>
                            </div>
                            <a href="#" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
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
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    <?php
    } ?>
    <?php if (session("rol") == "Cliente") {
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
                                <h3>53<sup style="font-size: 20px">%</sup></h3>
                                <p>RASTREAR CONTENEDOR</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-location"></i>
                            </div>
                            <a href="<?php echo base_url(); ?>/CServicio/seguimientoContenedor" class="small-box-footer">Más Información<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box encabezado5">
                            <div class="inner">
                                <h3>44</h3>
                                <p>SERVICIOS EN PROGRESO</p>
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
                                <h3>65</h3>
                                <p>SERVICIOS FINALIZADOS</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-flag"></i>
                            </div>
                            <a href="#" class="small-box-footer">Más Información <i class="fas fa-arrow-circle-right"></i></a>
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