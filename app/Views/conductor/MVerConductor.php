<div class="page-content page-container" id="page-content">
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

                                    <?php if ($conductor["imagen_cond"] == "") {
                                    ?>
                                        <td><img src="<?php echo base_url(); ?>/assest/img/conductor/img-conductor-default.png" alt="stack photo" class="img"></td>
                                    <?php
                                    } else {
                                    ?>
                                        <td><img src="<?php echo base_url(); ?>/assest/img/conductor/<?php echo $conductor["imagen_cond"] ?>" alt="stack photo" class="img"></td>
                                    <?php
                                    }
                                    ?>
                                    
                                </div>

                                <p class="m-b-10 f-w-600">Nombre Completo</p>
                                <p><?php echo $conductor["nombre_cond"] ?> <?php echo $conductor["apellido_cond"] ?></p>
                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">INFORMACIÓN DEL CONDUCTOR</h6>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">ID del Conductor</p>
                                        <h6 class="text-muted f-w-400"><?php echo $conductor["id_conductor"] ?></h6>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Cédula de Identidad</p>
                                        <p class="text-muted f-w-400"><?php echo $conductor["ci_cond"] ?></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Licencia - Categoría</p>
                                        <p class="text-muted f-w-400"><?php echo $conductor["tipo_licencia"] ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Correo Electrónico</p>
                                        <p class="text-muted f-w-400"><?php echo $conductor["email_cond"] ?></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Fecha de Nacimiento</p>
                                        <p class="text-muted f-w-400"><?php echo $conductor["fecha_nac_cond"] ?></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Contácto</p>
                                        <p class="badge badge-success f-w-600"><?php echo $conductor["contacto_cond"] ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Estado Civil</p>
                                        <p class="text-muted f-w-400"><?php echo $conductor["estado_civil_cond"] ?></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Cuenta Bancaria 1</p>
                                        <p class="text-muted f-w-400"><?php echo $conductor["num_cuenta_cond"] ?></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="m-b-10 f-w-600">Cuenta Bancaria 2</p>
                                        <p class="text-muted f-w-400"><?php echo $conductor["num_cuenta2_cond"] ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Persona de Contácto</p>
                                        <p class="text-muted f-w-400"><?php echo $conductor["persona_contacto_cond"] ?></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Dirección</p>
                                        <p class="text-muted f-w-400"><?php echo $conductor["direccion_cond"] ?></p>
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