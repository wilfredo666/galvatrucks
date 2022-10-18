<div class="content-wrapper">
    <div class="container-fluid">
        <br>
        <div class=" titulo col-md-12">
            <h2 class="text-center">
                <font class="display-4">Seguimiento de Contenedor</font>
            </h2>
            <hr class="hr-seguimiento">
        </div>

        <br>
        <div class="row ">
            <div class="col-md-3">
            </div>
            <div class="col-md-5 col-sm-6">
                <input type="text" class="form-control form-control input-seguimiento" id="numContenedor" name="numContenedor">
                <p class="font-italic intruzca" style="font-size: 1.2rem;">Introduzca el Número del Contenedor</p>
            </div>
            <div class="col-md-2 col-sm-6 butt">
                <button type="button" class="btn btn-outline-warning form-control buttom-buscar" id="busqueda" name="busqueda" onclick="buscarContenedor()"><i class="fas fa-search"></i> Búsqueda</button>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="row container-fluid col-md-12 ">
            <div class="row col-12 container-fluid">
                <div class="col-9 container-fluid">
                    <h3 class="font-weight-bold">CONTENEDOR: <span class="font-weight-light ">COSU778823642</span></h3>
                </div>
                <div class="col-3">
                    <button type="button" class="btn align-right" onclick="javascript:window.print()">Imprimir <i class="fas fa-print fa-2x fa-lg text-primary"></i></button>
                </div>
            </div>
        </div>
        <hr class="hr-2">
        <div class="container-fluid">
            <div class="row">
                <div class="row col-md-12 align-items-start">
                    <div class="col-md-2 col-sm-6">
                        <d>Bill of Lading/ BL</d>
                        <dd class="text font-weight-bold text-uppercase " style="font-size: 18px; margin-left: 0;">MEdunG121068</dd>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <d>Enviado desde</d>
                        <dd class="text-muted text-uppercase" style="font-size: 18px;">NINGBO, CN</dd>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <d>Enviado a</d>
                        <dd class="text-muted text-uppercase" style="font-size: 18px;">ARICA, CL</dd>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <d>Ubicación</d>
                        <dd class="text-muted text-uppercase" style="font-size: 18px;">CALLAO, PE</dd>
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <d>Fecha estimada de Arribo</d>
                        <dd class="text-muted  text-uppercase" style="font-size: 18px;">18/01/2020</dd>
                    </div>
                </div>
            </div>
            <div class="row font-italic text-sm">
                <span> * La fecha estimada de arribo es orientativa. Póngase en contacto con su oficina local de GALVATRUCKS para verificar esta información.</span>
            </div>

            <div class="row conti ">

                <div class="col-md-4 text-center col-sm-12">
                    <i class="fas fa-2x fa-lg fa-truck-moving mt-4"></i>
                    <p class="parr">Contenedor</p>
                    <p class="parr">MSCU4737672</p>
                </div>
                <div class="col-md-4 text-center  col-sm-12">
                    <i class="fas fa-box fa-2x fa-lg mt-4"></i>
                    <p class="parr">Tamaño de Contenedor</p>
                    <p class="parr">40'</p>
                </div>
                <div class="col-md-4 text-center  col-sm-12 arribo">
                    <i class="fas fa-map-marker-alt fa-2x fa-lg mt-4"></i>
                    <p class="parr">Ultimo punto de Movimiento</p>
                    <p class="parr">ARICA, CHILE</p>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding: 10px;">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Timelime example  -->
            <div class="row">
                <div class="col-md-12">
                    <!-- The time line -->
                    <div class="timeline">
                        <!-- timeline time label -->
                        <div class="time-label">
                            <span style="background-color: #f4f6f9;">Movimientos</span>
                            <button class="btn btn-sm btn-success btn-circle" onclick="MovimientoContenedor();"> Agregar Movimiento
                                <i class="fas fa-plus-square"></i>
                            </button>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                            <i class="fas fa-ship bg-blue"></i>
                            <div class="row container timeline-item col-10">
                                <div class="col-md-3">
                                    <dt class="ml-2">Fecha</dt>
                                    <span class="ml-2">
                                        17/10/2022
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <dt>Ubicación</dt>
                                    <span>
                                        ARICA, CHILE
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <dt>Descripción</dt>
                                    <span>
                                        Importación descargada del buque a puerto
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <dt>Estado</dt>
                                    <span>
                                        MSC NORA Voyage PM009A
                                    </span>
                                </div>

                            </div>
                        </div>

                        <!--  <div class="time-label">
                            <span class="bg-green">3 Jan. 2014</span>
                        </div> -->

                        <div>
                            <i class="fas fa-flag-checkered bg-purple"></i>

                            <div class="row container timeline-item col-10">
                                <div class="col-md-3">
                                    <dt class="ml-2">Fecha</dt>
                                    <span class="ml-2">
                                        2/09/2022
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <dt>Ubicación</dt>
                                    <span>
                                        CALLAO, PE
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <dt>Descripción</dt>
                                    <span>
                                        Importar a consignatario
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <dt>Estado</dt>
                                    <span>
                                        CARGADO
                                    </span>
                                </div>

                            </div>
                        </div>

                        <div>
                            <i class="fas fa-flag-checkered bg-purple"></i>
                            <div class="row container timeline-item col-10">
                                <div class="col-md-3">
                                    <dt class="ml-2">Fecha</dt>
                                    <span class="ml-2">
                                        23/08/2022
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <dt>Ubicación</dt>
                                    <span>
                                        CALLAO, PERÚ
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <dt>Descripción</dt>
                                    <span>
                                        Importación descargada del buque a puerto
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <dt>Estado</dt>
                                    <span>
                                        MSC NORA Voyage PM009A
                                    </span>
                                </div>

                            </div>
                        </div>

                        <div>
                            <i class="fas fa-flag-checkered bg-purple"></i>

                            <div class="row container timeline-item col-10">
                                <div class="col-md-3 ">
                                    <dt class="ml-2">Fecha</dt>
                                    <span class="ml-2">
                                        5/08/2022
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <dt>Ubicación</dt>
                                    <span>
                                        NINGBO, CHINA
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <dt>Descripción</dt>
                                    <span>
                                        Importar a consignatario
                                    </span>
                                </div>
                                <div class="col-md-3">
                                    <dt>Estado</dt>
                                    <span>
                                        CARGADO
                                    </span>
                                </div>

                            </div>
                        </div>

                        <div>
                            <i class="fas fa-clock bg-gray"></i>
                            <span style="margin-left: 60px;">Inicio de la Operación</span>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>

            <!-- /.timeline -->

        </div>
    </section>
</div>