<?php foreach ($servicioContenedor as $serv) {
    $id_servicio = $serv['id_servicio'];
    $contenedor = $serv['nro_contenedor'];
    
} ?>
    <div class="modal-header encabezado">
        <h4 class="modal-title">REGISTRO NUEVO MOVIMIENTO</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="modal-body">
        <form id="FNuevoMovimiento">
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Fecha y Hora del Movimiento</label>
                        <input type="datetime-local" name="fechaHora" id="fechaHora" class="form-control">
                        <span class="text-danger chartjs-render-monitor" id="error-fecha"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Ubicación del contenedor</label>
                        <input type="text" class="form-control" id="ubicacionCont" name="ubicacionCont" style='text-transform:uppercase'>
                        <span class="text-danger chartjs-render-monitor" id="error-ubicacion"></span>
                    </div>
                    <input type="hidden" class="form-control" id="idServicio" name="idServicio" value="<?php echo $id_servicio ?>">
                    <input type="hidden" class="form-control" id="numeroCont" name="numeroCont" value="<?php echo $contenedor ?>">
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Descripción del movimiento</label>
                        <textarea type="text" rows="2" cols="20" class="form-control" id="descripcionCont" name="descripcionCont"> </textarea>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Estado del Contenedor</label>
                        <select class="form-control" name="estadoCont" id="estadoCont">
                            <option value="">-- Seleccionar --</option>
                            <option value="CARGADO">CARGADO</option>
                            <option value="TRANSBORDO">TRANSBORDO</option>
                            <option value="DESCARGADO">DESCARGADO</option>
                            <option value="TRANSPORTANDO">TRANSPORTANDO</option>
                            <option value="CONTENEDOR DEVUELTO">CONTENEDOR DEVUELTO</option>
                        </select>
                    </div>
                </div>
            </div>
    </div>
    <!-- /.card-body -->
    </form>

    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="RegMovimiento(<?php echo $id_servicio ?>)">Guardar</button>
    </div>
