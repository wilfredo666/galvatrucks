<div class="page-content page-container fondo-modal" id="page-content">
    <div class="padding">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-12 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-3 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">

                                    <?php if ($cliente["imagen_cli"] == "") {
                                    ?>
                                        <td><img src="<?php echo base_url(); ?>/assest/img/conductor/img-conductor-default.png" alt="stack photo" class="img"></td>
                                    <?php
                                    } else {
                                    ?>
                                        <td><img src="<?php echo base_url(); ?>/assest/img/cliente/<?php echo $cliente["imagen_cli"] ?>" alt="stack photo" class="img"></td>
                                    <?php
                                    }
                                    ?>

                                </div>

                                <p class="m-b-10 f-w-600">Razón Social</p>
                                <p><?php echo $cliente["razon_social_cli"] ?></p>
                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                <div class="col-sm-12">
                                    <p class="badge badge-dark f-w-600">ID Cliente: <?php echo $cliente["id_cliente"] ?></p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">INFORMACIÓN DEL CLIENTE</h6>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">N. I. T.</p>
                                        <p class="text-muted f-w-400"><?php echo $cliente["ci_nit_cli"] ?></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Tipo de Cliente</p>
                                        <p class="text-muted f-w-400"><?php echo $cliente["tipo_cli"] ?></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Contácto</p>
                                        <p class="badge badge-success f-w-600"><?php echo $cliente["contacto_cli"] ?></p>
                                    </div>
                                </div>
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">DATOS DEL REPRESENTATE LEGAL</h6>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Representante Legal</p>
                                        <h6 class="text-muted f-w-400"><?php echo $cliente["nombre_cli"] ?> <?php echo $cliente["apellido_cli"] ?></h6>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Fecha de Nacimiento</p>
                                        <p class="text-muted f-w-400"><?php echo date('d-m-Y', strtotime( $cliente["fecha_nac_cli"])) ?></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Estado Civil</p>
                                        <p class="text-muted f-w-400"><?php echo $cliente["estado_civil_cli"] ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Correo Electrónico</p>
                                        <h6 class="text-muted f-w-400"> <?php echo $cliente["email_cli"] ?></h6>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Cuenta Bancaria 1</p>
                                        <p class="text-muted f-w-400"><?php echo $cliente["num_cuenta_cli"] ?></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Cuenta Bancaria 2</p>
                                        <p class="text-muted f-w-400"><?php echo $cliente["num_cuenta2_cli"] ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Persona de Contácto / Ref.</p>
                                        <h6 class="text-muted f-w-400"> <?php echo $cliente["persona_contacto_cli"] ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Dirección</p>
                                        <h6 class="text-muted f-w-400"><?php echo $cliente["direccion_cli"] ?></h6>
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