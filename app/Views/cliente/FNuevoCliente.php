<div class="modal-header bg-primary">
    <h3 class="modal-title"> <b> REGISTRO NUEVO CLIENTE</b></h3>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FNuevoCliente">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Razón Social</label>
                        <input type="text" class="form-control" id="razonSocial" name="razonSocial">
                        <p class="text-danger" id="error-razonSocial"></p>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>N. I. T.</label>
                        <input type="text" class="form-control" id="nit" name="nit">
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Tipo de Cliente</label>
                        <select name="tipoCli" id="tipoCli" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="PERSONA NATURAL">Persona Natural</option>
                            <option value="PERSONA JURÍDICA">Persona Jurídica</option>
                        </select>
                        <p class="text-danger" id="error-tipoCli"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Nombres del Representante Legal</label>
                        <input type="text" class="form-control" id="nombreCli" name="nombreCli">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Apellidos del Representante Legal</label>
                        <input type="text" class="form-control" id="apellidoCli" name="apellidoCli">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label>Estado Civil</label>
                        <select name="estadoCli" id="estadoCli" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="Soltero/a">Soltero/a</option>
                            <option value="Casado/a">Casado/a</option>
                            <option value="Viudo/a">Viudo/a</option>
                            <option value="Divorciado/a">Divorciado/a</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fechaNacCli" name="fechaNacCli" min="1960-01-01" max="2004-12-31">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Número de Contacto</label>
                        <input type="text" class="form-control" id="contactoCli" name="contactoCli">
                        <p class="text-danger" id="error-contactoCli"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Dirección</label>
                        <input type="text" class="form-control" id="dirCli" name="dirCli">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Correo Electrónico</label>
                        <input type="email" class="form-control" id="correoCli" name="correoCli" placeholder="Ingrese correo electrónico">
                        <p class="text-danger" id="error-correoCli"></p>
                    </div>
                    <div class="form-group col-6">
                        <label>Persona de Contacto - Referencia</label>
                        <input type="text" class="form-control" id="personaContactoCli" name="personaContactoCli">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Número de Cuenta Bancaria 1</label>
                        <input type="text" class="form-control" id="ctaCli" name="ctaCli">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Número de Cuenta Bancaria 2</label>
                        <input type="text" class="form-control" id="cta2Cli" name="cta2Cli">
                    </div>

                    <div class="form-group col-4 ">
                        <label>Subir Imagen/Fotografía</label>
                        <input type="file" class="form-control" id="fotoCli" name="fotoCli">
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
    <button type="button" class="btn btn-primary" onclick="RegCliente()">Guardar</button>
</div>