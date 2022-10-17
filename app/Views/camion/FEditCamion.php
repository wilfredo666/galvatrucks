<div class="modal-header encabezado" >
    <h4 class="modal-title">EDITAR DATOS DEL CAMIÓN</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">
   
<form id="FEditCamion">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Placa</label>
                        <input type="text" class="form-control" id="placa" name="placa" value="<?php echo $camion["placa"];?>">
                        <p class="text-danger" id="error-placa"></p>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Clase de Camión</label>
                        <select name="clase" id="clase" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="TRACTO CAMIÓN" <?php if($camion["clase"]=="TRACTO CAMIÓN"):?> selected <?php endif;?>>TRACTO CAMIÓN</option>
                            <option value="CAMIÓN RÍGIDO" <?php if($camion["clase"]=="CAMIÓN RÍGIDO"):?> selected <?php endif;?>>CAMIÓN RÍGIDO</option>
                            <option value="SEMIREMOLQUE" <?php if($camion["clase"]=="SEMIREMOLQUE"):?> selected <?php endif;?>>SEMIREMOLQUE</option>
                            <option value="REMOLQUE" <?php if($camion["clase"]=="REMOLQUE"):?> selected <?php endif;?>>REMOLQUE</option>
                            <option value="SEMIREMOLQUE CON BARANDAS" <?php if($camion["clase"]=="SEMIREMOLQUE CON BARANDAS"):?> selected <?php endif;?>>SEMIREMOLQUE CON BARANDAS</option>
                        </select>
                        <p class="text-danger" id="error-clase"></p>
                    </div>

                    
                    <div class="form-group col-md-6">
                        <label>Capacidad de Carga</label>
                        <select name="capacidad" id="capacidad" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="21 TONELADAS" <?php if($camion["capacidad"]=="21 TONELADAS"):?> selected <?php endif;?>>21 TONELADAS</option>
                            <option value="22 TONELADAS" <?php if($camion["capacidad"]=="22 TONELADAS"):?> selected <?php endif;?>>22 TONELADAS</option>
                            <option value="23 TONELADAS" <?php if($camion["capacidad"]=="23 TONELADAS"):?> selected <?php endif;?>>23 TONELADAS</option>
                            <option value="24 TONELADAS" <?php if($camion["capacidad"]=="24 TONELADAS"):?> selected <?php endif;?>>24 TONELADAS</option>
                            <option value="25 TONELADAS" <?php if($camion["capacidad"]=="25 TONELADAS"):?> selected <?php endif;?>>25 TONELADAS</option>
                        </select>
                        <p class="text-danger" id="error-capacidad"></p>
                    </div>
                   
                    <div class="form-group col-md-6">
                        <label>Nro. de Chasis</label>
                        <input type="text" class="form-control" id="chasis" name="chasis" value="<?php echo $camion["chasis"];?>">
                    </div>
                    
                    
                    <div class="col-md-4 form-group">
                        <label>Nro. de Ejes</label>
                        <select name="ejes" id="ejes" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="2 EJES" <?php if($camion["ejes"]=="2 EJES"):?> selected <?php endif;?>>2 EJES</option>
                            <option value="3 EJES" <?php if($camion["ejes"]=="3 EJES"):?> selected <?php endif;?>>3 EJES</option>
                            <option value="4 EJES" <?php if($camion["ejes"]=="4 EJES"):?> selected <?php endif;?>>4 EJES</option>
                            <option value="5 EJES" <?php if($camion["ejes"]=="5 EJES"):?> selected <?php endif;?>>5 EJES</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Marca del Camión</label>
                        <select name="marca" id="marca" class="form-control">
                            <option value="null">Seleccionar</option>
                            <option value="SCANIA" <?php if($camion["marca"]=="SCANIA"):?> selected <?php endif;?>>SCANIA</option>
                            <option value="VOLKSWAGEN" <?php if($camion["marca"]=="VOLKSWAGEN"):?> selected <?php endif;?>>VOLKSWAGEN</option>
                            <option value="RENAULT TRUCKS" <?php if($camion["marca"]=="RENAULT TRUCKS"):?> selected <?php endif;?>>RENAULT TRUCKS</option>
                            <option value="VOLVO" <?php if($camion["marca"]=="VOLVO"):?> selected <?php endif;?>>VOLVO</option>
                            <option value="NISSAN" <?php if($camion["marca"]=="NISSAN"):?> selected <?php endif;?>>NISSAN</option>
                            <option value="RENAULT-Nissan" <?php if($camion["marca"]=="RENAULT-Nissan"):?> selected <?php endif;?>>RENAULT-Nissan</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Color del Camión</label>
                        <input type="text" class="form-control" id="colorCamion" name="colorCamion" value="<?php echo $camion["color"];?>">
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
    <button type="button" class="btn btn-success" onclick="EditCamion(<?php echo $camion["id_camion"];?>)">Actualizar</button>
</div>