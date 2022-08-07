<div class="modal-header bg-primary" >
    <h4 class="modal-title">REGISTRO NUEVO CAMIÓN</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">
   
<form id="FNuevoCamion">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Placa</label>
                        <input type="text" class="form-control" id="placa" name="placa">
                        <p class="text-danger" id="error-placa"></p>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Clase de Camión</label>
                        <select name="clase" id="clase" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="TRACTO CAMIÓN">TRACTO CAMIÓN</option>
                            <option value="CAMIÓN RÍGIDO">CAMIÓN RÍGIDO</option>
                            <option value="SEMIREMOLQUE">SEMIREMOLQUE</option>
                            <option value="REMOLQUE">REMOLQUE</option>
                            <option value="SEMIREMOLQUE CON BARANDAS">SEMIREMOLQUE CON BARANDAS</option>
                        </select>
                        <p class="text-danger" id="error-clase"></p>
                    </div>

                    
                    <div class="form-group col-md-6">
                        <label>Capacidad de Carga</label>
                        <select name="capacidad" id="capacidad" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="21 TONELADAS">21 TONELADAS</option>
                            <option value="22 TONELADAS">22 TONELADAS</option>
                            <option value="23 TONELADAS">23 TONELADAS</option>
                            <option value="24 TONELADAS">24 TONELADAS</option>
                            <option value="25 TONELADAS">25 TONELADAS</option>
                        </select>
                        <p class="text-danger" id="error-capacidad"></p>
                    </div>
                   
                    <div class="form-group col-md-6">
                        <label>Nro. de Chasis</label>
                        <input type="text" class="form-control" id="chasis" name="chasis">
                    </div>
                    
                    
                    <div class="col-md-4 form-group">
                        <label>Nro. de Ejes</label>
                        <select name="ejes" id="ejes" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="2 EJES">2 EJES</option>
                            <option value="3 EJES">3 EJES</option>
                            <option value="4 EJES">4 EJES</option>
                            <option value="5 EJES">5 EJES</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Marca del Camión</label>
                        <select name="marca" id="marca" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="SCANIA">SCANIA</option>
                            <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                            <option value="RENAULT TRUCKS">RENAULT TRUCKS</option>
                            <option value="VOLVO">VOLVO</option>
                            <option value="NISSAN">NISSAN</option>
                            <option value="RENAULT-Nissan">RENAULT-Nissan</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Color del Camión</label>
                        <input type="text" class="form-control" id="colorCamion" name="colorCamion">
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
    <button type="button" class="btn btn-primary" onclick="RegCamion()">Guardar</button>
</div>