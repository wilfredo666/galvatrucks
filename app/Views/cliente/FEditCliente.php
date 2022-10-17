<div class="modal-header encabezado">
    <h4 class="modal-title">  EDITAR DATOS DEL CLIENTE</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FEditCliente">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Razón Social</label>
                        <input type="text" class="form-control" id="razonSocial" name="razonSocial" value="<?php echo $cliente["razon_social_cli"]?>">
                        <p class="text-danger" id="error-razonSocial"></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>N. I. T.</label>
                        <input type="text" class="form-control" id="nit" name="nit" value="<?php echo $cliente["ci_nit_cli"]?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Tipo de Cliente</label>
                        <select name="tipoCli" id="tipoCli" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="PERSONA NATURAL" <?php if($cliente["tipo_cli"]=="PERSONA NATURAL"):?> selected <?php endif;?>>Persona Natural</option>
                            <option value="PERSONA JURÍDICA" <?php if($cliente["tipo_cli"]=="PERSONA JURÍDICA"):?> selected <?php endif;?>>Persona Jurídica</option>
                        </select>
                        <p class="text-danger" id="error-tipoCli"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Nombres del Representante Legal</label>
                        <input type="text" class="form-control" id="nombreCli" name="nombreCli" value="<?php echo $cliente["nombre_cli"]?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Apellidos del Representante Legal</label>
                        <input type="text" class="form-control" id="apellidoCli" name="apellidoCli" value="<?php echo $cliente["apellido_cli"]?>">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label>Estado Civil</label>
                        <select name="estadoCli" id="estadoCli" class="form-control">
                            <option value="null" >Seleccionar</option>
                            <option value="Soltero/a" <?php if($cliente["estado_civil_cli"]=="Soltero/a"):?> selected <?php endif;?>>Soltero/a</option>
                            <option value="Casado/a" <?php if($cliente["estado_civil_cli"]=="Casado/a"):?> selected <?php endif;?>>Casado/a</option>
                            <option value="Viudo/a" <?php if($cliente["estado_civil_cli"]=="Viudo/a"):?> selected <?php endif;?>>Viudo/a</option>
                            <option value="Divorciado/a" <?php if($cliente["estado_civil_cli"]=="Divorciado/a"):?> selected <?php endif;?>>Divorciado/a</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fechaNacCli" name="fechaNacCli" min="1960-01-01" max="2004-12-31" value="<?php echo $cliente["fecha_nac_cli"]?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Número de Contacto</label>
                        <input type="text" class="form-control" id="contactoCli" name="contactoCli" value="<?php echo $cliente["contacto_cli"]?>">
                        <p class="text-danger" id="error-contactoCli"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Dirección</label>
                        <input type="text" class="form-control" id="dirCli" name="dirCli" value="<?php echo $cliente["direccion_cli"]?>">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Correo Electrónico</label>
                        <input type="email" class="form-control" id="correoCli" name="correoCli" placeholder="Ingrese correo electrónico" value="<?php echo $cliente["email_cli"]?>">
                        <p class="text-danger" id="error-correoCli"></p>
                    </div>
                    <div class="form-group col-6">
                        <label>Persona de Contacto - Referencia</label>
                        <input type="text" class="form-control" id="personaContactoCli" name="personaContactoCli" value="<?php echo $cliente["persona_contacto_cli"]?>">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Número de Cuenta Bancaria 1</label>
                        <input type="text" class="form-control" id="ctaCli" name="ctaCli" value="<?php echo $cliente["num_cuenta_cli"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Número de Cuenta Bancaria 2</label>
                        <input type="text" class="form-control" id="cta2Cli" name="cta2Cli" value="<?php echo $cliente["num_cuenta2_cli"]?>">
                    </div>

                    <div class="form-group col-4 ">
                        <label>Subir Imagen/Fotografía</label>
                        <input type="file" class="form-control" id="fotoCli" name="fotoCli">
                        <input type="hidden" class="form-control" id="fotoCliActual" name="fotoCliActual" value="<?php echo $cliente["imagen_cli"]?>">
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- /.card-body -->
</form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-success" onclick="EditCliente(<?php echo $cliente["id_cliente"];?>)">Actualizar</button>
</div>