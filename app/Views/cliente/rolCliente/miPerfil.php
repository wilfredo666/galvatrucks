<?php
$razon_social = $cliente["razon_social_cli"];
?>

<div class="content-wrapper">
    <div class="modal-header bg-info col-sm-12">
        <h3 class="modal-title"> <b> DATOS DE MI PERFIL</b></h3>
    </div>
    <div class="container bootstrap snippet col-md-12">
        <div class="container col-md-11">

            <br>
            <div class="row">
                <div class="col-sm-3">
                    <!--left col 3-->


                    <div class="text-center">
                        <img src="<?php echo base_url(); ?>/assest/img/cliente/<?php echo $cliente["imagen_cli"] ?>" class="avatar img-circle img-thumbnail" alt="avatar" width="75%">

                        <h6>Cargar Logotipo de la Empresa</h6>
                        <input type="file" class="form-control" id="fotoCli" name="fotoCli">
                        <input type="hidden" class="form-control" id="fotoCliActual" name="fotoCliActual" value="<?php echo $cliente["imagen_cli"] ?>">
                    </div>
                    </hr><br>
                    <ul class="list-group">
                        <li class="list-group-item text-center bg-info">Información Importante <i class="fas fa-info-circle"></i></li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Login de Acceso al sistema:</strong></span> <?php echo $cliente["login_usuario"] ?></li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Rol:</strong></span> <?php echo $cliente["rol"] ?></li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Tipo Cliente:</strong></span> <?php echo $cliente["tipo_cli"] ?></li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>N.I.T / C.I:</strong></span> <?php echo $cliente["ci_nit_cli"] ?></li>
                    </ul>
                </div>
                <!-- col 9 -->
                <div class="col-sm-9">
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <hr>
                            <form id="actualizarDatosCli">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Razón Social </label>
                                        <input type="text" class="form-control" name="razonSocial" id="razonSocial" title="Actualiza tu Nombre." value="<?php echo $razon_social; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">N.I.T.</label>
                                        <input type="text" class="form-control" name="nit" id="nit" value="<?php echo $cliente["ci_nit_cli"] ?>" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Correo electrónico</label>
                                        <input type="text" class="form-control" name="correoCli" id="correoCli" value="<?php echo $cliente["email_cli"]; ?>">
                                        <p class="text-danger font-italic" id="error-correoCli"></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Número de Contacto</label>
                                        <input type="text" class="form-control" name="contactoCli" id="contactoCli" value="<?php echo $cliente["contacto_cli"] ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Nombres del Representante Legal</label>
                                        <input type="text" class="form-control" name="nombreCli" id="nombreCli" value="<?php echo $cliente["nombre_cli"] ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Apellidos del Representante Legal</label>
                                        <input type="text" class="form-control" name="apellidoCli" id="apellidoCli" value="<?php echo $cliente["apellido_cli"] ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Dirección</label>
                                        <input type="text" class="form-control" name="direccionCli" id="direccionCli" value="<?php echo $cliente["direccion_cli"] ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Número de Cuenta Bancaria</label>
                                        <input type="text" class="form-control" name="cuentaCli" id="cuentaCli" value="<?php echo $cliente["num_cuenta_cli"] ?>">
                                    </div>
                                </div>

                                <?php
                                $pass = $cliente["pass_usuario"];
                                $decript = password_verify($pass, $cliente["pass_usuario"]);
                                ?>
                                <!--    <div class="form-control is-warning" > -->
                                <!-- <div class="callout callout-info">
                                    <i class="fas fa-info"></i> Actualiza tu contraseña....!!!
                                </div> -->
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control" name="password" id="password" value="<?php echo $cliente["pass_usuario"]; ?>">
                                        <p class="text-danger font-italic" id="error-password"></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Repetir Contraseña</label>
                                        <input type="password" class="form-control" name="password2" id="password2" value="<?php echo $cliente["pass_usuario"]; ?>">
                                        <p class="text-danger font-italic" id="error-password2"></p>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-9"></div>
                                    <div class="col-md-3" style="border: 8px ; display: flex; justify-content: right">
                                        <button class="btn btn-lg btn-success" type="button" onclick="ActualizarCli(<?php echo $cliente["id_cliente"] ?>);"><i class="fas fa-user-edit"></i> Actualizar</button>
                                        <!--   <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button> -->
                                        <!--    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button> -->
                                    </div>
                                </div>
                            </form>

                            <hr>

                        </div>

                    </div>
                    <!--/tab-pane-->
                </div>
                <!--/tab-content-->
            </div>




        </div>



    </div>
</div>