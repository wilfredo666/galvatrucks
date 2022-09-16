<?php 
$razon_social= $cliente["razon_social_cli"];
?>
   <div class="content-wrapper">
    <div class="container bootstrap snippet col-md-12">
        <div class="container col-md-11">
            <div class="modal-header bg-info col-sm-12">
                <h3 class="modal-title"> <b> DATOS DE MI PERFIL</b></h3>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    <!--left col 3-->


                    <div class="text-center">
                        <img src="<?php echo base_url(); ?>/assest/img/cliente/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar" width="80%">
                        <h6>Cargar Logotipo de la Empresa</h6>
                        <input type="file" class="form-control " id="fotoCli" name="fotoCli">
                    </div>
                    </hr><br>
                    <ul class="list-group">
                        <li class="list-group-item text-center bg-info">Información Importante <i class="fas fa-info-circle"></i></li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Login Usuario</strong></span> login</li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Rol</strong></span> Cliente</li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Tipo Cliente</strong></span> Empresa jurídica</li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>N.I.T / C.I</strong></span> 425455745</li>
                    </ul>
                </div>
                <!-- col 9 -->
                <div class="col-sm-9">
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <hr>
                            <form id="">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Razón Social </label>
                                        <input type="text" class="form-control" name="razonSocial" id="razonSocial" title="Actualiza tu Nombre." value="<?php echo $razon_social;?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">N.I.T.</label>
                                        <input type="text" class="form-control" name="nit" id="nit">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control" name="password" id="password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Repetir Contraseña</label>
                                        <input type="password" class="form-control" name="password2" id="password2">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Correo electrónico</label>
                                        <input type="text" class="form-control" name="correoCli" id="correoCli" value="<?php echo $cliente["email_cli"];?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Número de Contacto</label>
                                        <input type="text" class="form-control" name="contactoCli" id="contactoCli">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Nombres del Representante Legal</label>
                                        <input type="text" class="form-control" name="nombreCli" id="nombreCli">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Apellidos del Representante Legal</label>
                                        <input type="text" class="form-control" name="apellidoCli" id="apellidoCli">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Dirección</label>
                                        <input type="text" class="form-control" name="direccionCli" id="direccionCli">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Número de Cuenta Bancaria</label>
                                        <input type="text" class="form-control" name="cuentaCli" id="cuentaCli">
                                    </div>
                                </div>

                                <br>
                                
                                <div class="row">
                                    <div class="col-md-9"></div>
                                    <div class="col-md-3" style="border: 8px ; display: flex; justify-content: right">
                                        <button class="btn btn-lg btn-success" type="button"><i class="fas fa-user-edit"></i> Actualizar</button>
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