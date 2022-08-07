<div class="modal-header bg-primary">
    <h3 class="modal-title"> <b> REGISTRO NUEVO CONDUCTOR </b></h3>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FNuevoConductor">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Nombres</label>
                        <input type="text" class="form-control" id="nomConductor" name="nomConductor">
                        <p class="text-danger" id="error-nomConductor"></p>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" id="apConductor" name="apConductor">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label>Cédula de Identidad</label>
                        <input type="text" class="form-control" id="ciCond" name="ciCond">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Estado Civil</label>
                        <select name="estadoCond" id="estadoCond" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="Soltero/a">Soltero/a</option>
                            <option value="Casado/a">Casado/a</option>
                            <option value="Viudo/a">Viudo/a</option>
                            <option value="Divorciado/a">Divorciado/a</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fechaNac" name="fechaNac" min="1960-01-01" max="2004-12-31">
                        <p class="text-danger" id="error-fechaNac"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Correo Electrónico</label>
                        <input type="email" class="form-control" id="correoCond" name="correoCond" placeholder="Ingrese correo electrónico">
                        <p class="text-danger" id="error-correoCond"></p>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Número de Contacto</label>
                        <input type="text" class="form-control" id="contactoCond" name="contactoCond">
                        <p class="text-danger" id="error-contactoCond"></p>
                    </div>
                    <div class="col-md-4 form-group">
                        <label>Categoría de Licencia</label>
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        <p class="text-danger" id="error-categoria"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Dirección</label>
                        <input type="text" class="form-control" id="dirCond" name="dirCond">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Número de Cuenta Bancaria 1</label>
                        <input type="text" class="form-control" id="ctaCond" name="ctaCond">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Número de Cuenta Bancaria 2</label>
                        <input type="text" class="form-control" id="cta2Cond" name="cta2Cond">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-8">
                        <label>Persona de Contacto - Nro de Celular</label>
                        <input type="text" class="form-control" id="personaContacto" name="personaContacto">
                    </div>
                    <div class="form-group col-4 ">
                        <label>Fotografía</label>
                        <input type="file" class="form-control" id="fotoCond" name="fotoCond">
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
    <button type="button" class="btn btn-primary" onclick="RegConductor()">Guardar</button>
</div>