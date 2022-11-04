<div class="page-content page-container fondo-modal" id="page-content">
    <div class="padding">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-12 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-red user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <img src="<?php echo base_url(); ?>/assest/img/servicio1.jpeg" alt="stack photo" class="img" width="180%">
                                </div>

                                <div class="col-sm-12">
                                    <p class="m-b-10 f-w-600">Código Servicio</p>
                                    <h6 class="text badge badge-warning f-w-400"><?php echo $servicio["cod_servicio"] ?></h6>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="col-sm-12">
                                    <p class="m-b-10 f-w-600">Estado del Servicio</p>

                                    <?php
                                    if ($servicio["activo_serv"] == 1) {
                                    ?>
                                        <td>
                                            <sh2 class="badge bg-danger">Pendiente</span>
                                        </td>
                                    <?php
                                    } else {
                                    ?>
                                        <td><span class="badge bg-success">Finalizado</span></td>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <!-- PARA MOSTRAR DOCUMENTO SI SE CARGO -->
                                <?php
                                if ($servicio["documento"] != "") {
                                ?>
                                    <br>
                                    <br>
                                    <div class="col-sm-12">
                                        <div class=" form-group col-md-12">
                                            <label>Documentos de Importación PDF <span class="font-italic">(MIC, CRT, FACTURA, ASPB, PARTE REC.)</span></label>
                                            <a href="<?php echo base_url() ?>/assest/documentos/servicios/<?php echo $servicio["documento"] ?>" class="btn btn-info btn-circle" target="_blank" ><i class="fa fa-download"></i> Ver Documento</a>
                                        </div>
                                    </div>

                                <?php }
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-es p-b-5 b-b-default f-w-600 " style="color: #252675; background:#E4E6F5; font-family: Segoe UI Emoji;">INFORMACIÓN DEL CLIENTE</h6>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <p class="m-b-10 f-w-600">Nombre del CLiente</p>
                                        <h6 class="text-muted f-w-400"><?php echo $servicio["razon_social_cli"] ?></h6>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <p class="m-b-10 f-w-600">N. I. T.</p>
                                        <h6 class="text-muted f-w-400"><?php echo $servicio["ci_nit_cli"] ?></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <p class="m-b-10 f-w-600">Naviera</p>
                                        <h6 class="text-muted f-w-400"><?php echo $servicio["razon_social_emp"] ?></h6>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <p class="m-b-10 f-w-600">Fecha Inicio Servicio</p>
                                        <h6 class="text-muted f-w-400"><?php echo date('d-m-Y', strtotime($servicio["fecha_inicio_servicio"])) ?></h6>
                                    </div>
                                </div>

                                <h6 class="m-b-es p-b-5 b-b-default f-w-600 " style="color: #252675; background:#E4E6F5; font-family: Segoe UI Emoji;">INFORMACIÓN DEL SERVICIO IMPORTACIÓN / EXPORTACIÓN</h6>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <p class="m-b-10 f-w-600">N° de BL/Bill</p>
                                        <h6 class="text-muted f-w-400"><?php echo $servicio["num_bill"] ?></h6>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <p class="m-b-10 f-w-600">Contenedor</p>
                                        <h6 class="text-muted f-w-400"><?php echo $servicio["nro_contenedor"] ?></h6>
<!--                                         <span class="align-items-center justify-content-center text-center">
                                            <i class="fa fa-copy"> copiar</i>
                                        </span> -->
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <p class="m-b-10 f-w-600">Tamaño</p>
                                        <h6 class="text-muted f-w-400"><?php echo $servicio["medida_contenedor"] ?></h6>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <p class="m-b-10 f-w-600">Peso (Kg)</p>
                                        <h6 class="text-muted f-w-400"><?php echo $servicio["peso_mercaderia"] ?></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-8">
                                        <p class="m-b-10 f-w-600">Detalle Mercadería</p>
                                        <h6 class="text-muted f-w-400"><?php echo $servicio["detalle_mercaderia"] ?></h6>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <p class="m-b-10 f-w-600">Origen Mercadería</p>
                                        <h6 class="text-muted f-w-400"><?php echo $servicio["origen_mercaderia"] ?></h6>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <p class="m-b-10 f-w-600">Destino Mercadería</p>
                                        <h6 class="text-muted f-w-400"><?php echo $servicio["destino_mercaderia"] ?></h6>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <p class="m-b-10 f-w-600">Fecha de Arribo Contenedor</p>
                                        <h6 class="text-muted f-w-400"><?php echo date('d-m-Y', strtotime($servicio["fecha_arribo"]))  ?></h6>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <p class="m-b-10 f-w-600">Fecha entrega en Almacén</p>
                                        <h6 class="text-muted f-w-400"><?php echo date('d-m-Y', strtotime($servicio["fecha_almacen"]))  ?></h6>
                                    </div>
                                </div>

                                <h6 class="m-b-es p-b-5 b-b-default f-w-600" style="color: #252675; background:#E4E6F5; font-family: Segoe UI Emoji;">INFORMACIÓN DE LA ASIGNACIÓN DEL SERVICIO</h6>
                                <div class="row">
                                    <?php
                                    if (/* $servicio2["nombre_asig"] != "" */ $servicio2 != null ) {

                                    ?>
                                        <div class="col-md-6 col-sm-12">
                                            <p class="m-b-10 f-w-600">Conductor Asignado / Placa</p>
                                            <h6 class="text-muted f-w-400"><?php echo $servicio2["nombre_asig"] ?></h6>
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="col-md-6 col-sm-12">
                                            <p class="m-b-10 f-w-600">Contrato Camion / Placa</p>
                                            <h6 class="text-muted f-w-400"><?php echo $servicio3["num_contrato"] ?></h6>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="col-md-6 col-sm-12">
                                        <p class="m-b-10 f-w-600">Ruta</p>
                                        <h6 class="text-muted f-w-400"><?php echo $servicio["ruta_inicio"] . " " . $servicio["ruta_fin"] ?></h6>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12 col-sm-12">
                                        <p class="m-b-10 f-w-600">Observaciones</p>
                                        <h6 class="text-muted f-w-400"><?php echo $servicio["observaciones"] ?></h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>