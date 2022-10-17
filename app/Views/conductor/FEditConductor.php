<div class="modal-header encabezado">
    <h3 class="modal-title">  EDITAR DATOS DEL CONDUCTOR </h3>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FEditConductor">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Nombres</label>
                        <input type="text" class="form-control" id="nomConductor" name="nomConductor" value="<?php echo $conductor["nombre_cond"]?>">
                        <p class="text-danger" id="error-nomConductor"></p>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" id="apConductor" name="apConductor" value="<?php echo $conductor["apellido_cond"]?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label>Cédula de Identidad</label>
                        <input type="text" class="form-control" id="ciCond" name="ciCond" value="<?php echo $conductor["ci_cond"]?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Estado Civil</label>
                        <select name="estadoCond" id="estadoCond" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="Soltero/a" <?php if($conductor["estado_civil_cond"]=="Soltero/a"):?> selected <?php endif;?>>Soltero/a</option>
                            <option value="Casado/a" <?php if($conductor["estado_civil_cond"]=="Casado/a"):?> selected <?php endif;?>>Casado/a</option>
                            <option value="Viudo/a" <?php if($conductor["estado_civil_cond"]=="Viudo/a"):?> selected <?php endif;?>>Viudo/a</option>
                            <option value="Divorciado/a" <?php if($conductor["estado_civil_cond"]=="Divorciado/a"):?> selected <?php endif;?>>Divorciado/a</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fechaNac" name="fechaNac" min="1960-01-01" max="2004-12-31" value="<?php echo $conductor["fecha_nac_cond"]?>">
                        <p class="text-danger" id="error-fechaNac"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Correo Electrónico</label>
                        <input type="email" class="form-control" id="correoCond" name="correoCond" placeholder="Ingrese correo electrónico" value="<?php echo $conductor["email_cond"]?>">
                        <p class="text-danger" id="error-correoCond"></p>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Número de Contacto</label>
                        <input type="text" class="form-control" id="contactoCond" name="contactoCond"  value="<?php echo $conductor["contacto_cond"]?>">
                        <p class="text-danger" id="error-contactoCond"></p>
                    </div>
                    <div class="col-md-4 form-group">
                        <label>Categoría de Licencia</label>
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="A" <?php if($conductor["tipo_licencia"]=="A"):?> selected <?php endif;?>>A</option>
                            <option value="B" <?php if($conductor["tipo_licencia"]=="B"):?> selected <?php endif;?>>B</option>
                            <option value="C" <?php if($conductor["tipo_licencia"]=="C"):?> selected <?php endif;?>>C</option>
                        </select>
                        <p class="text-danger" id="error-categoria"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Dirección</label>
                        <input type="text" class="form-control" id="dirCond" name="dirCond" value="<?php echo $conductor["direccion_cond"]?>">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Número de Cuenta Bancaria 1</label>
                        <input type="text" class="form-control" id="ctaCond" name="ctaCond" value="<?php echo $conductor["num_cuenta_cond"]?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Número de Cuenta Bancaria 2</label>
                        <input type="text" class="form-control" id="cta2Cond" name="cta2Cond" value="<?php echo $conductor["num_cuenta2_cond"]?>">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-8">
                        <label>Persona de Contacto - Nro de Celular</label>
                        <input type="text" class="form-control" id="personaContacto" name="personaContacto" value="<?php echo $conductor["persona_contacto_cond"]?>">
                    </div>
                    <div class="form-group col-4 ">
                        <label>Fotografía</label>
                        <input type="file" class="form-control" id="fotoCond" name="fotoCond">
                        <input type="hidden" class="form-control" id="fotoCondActual" name="fotoCondActual" value="<?php echo $conductor["imagen_cond"]?>">
                    </div>
                </div>
            </div>
        </div>
        <p class="text-danger" id="error-password"></p>
</div>
<!-- /.card-body -->
</form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-success" onclick="EditConductor(<?php echo $conductor["id_conductor"];?>)" >Actualizar</button>
</div>