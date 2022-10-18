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
                </div>
                <div class="form-group col-md-6">
                    <label>Ubicación del contenedor</label>
                    <input rows="2" cols="20" class="form-control" id="ubicacionCont" name="ubicacionCont">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Descripción del movimiento</label>
                    <textarea type="text" class="form-control" id="descripcionCont" name="descripcionCont"> </textarea>
                </div>

                <div class="form-group col-md-6">
                    <label>Estado del Contenedor</label>
                    <select  class="form-control" name="estadoCont" id="estadoCont">
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
    <button type="button" class="btn btn-primary" onclick="RegMovimiento()">Guardar</button>
</div>