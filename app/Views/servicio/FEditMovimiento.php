
<div class="modal-header encabezado">
    <h4 class="modal-title">EDITAR MOVIMIENTO</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">
    <form id="FEditMovimiento">
        <div class="container">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Fecha y Hora del Movimiento</label>
                    <input type="datetime-local" name="fechaHora" id="fechaHora" class="form-control" value="<?php echo $movimiento["fecha_mov"] ?>" readonly>
                    <span class="text-danger chartjs-render-monitor" id="error-fecha"></span>
                </div>
                <div class="form-group col-md-6">
                    <label>Ubicación del contenedor</label>
                    <input type="text" class="form-control" id="ubicacionCont" name="ubicacionCont" value="<?php echo $movimiento["ubicacion_mov"]?>" style='text-transform:uppercase'>
                    <span class="text-danger chartjs-render-monitor" id="error-ubicacion"></span>
                </div>

            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Descripción del movimiento</label>
                    <textarea type="text" rows="2" cols="20" class="form-control" id="descripcionCont" name="descripcionCont"> <?php echo $movimiento["descripcion_mov"]?></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label>Estado del Contenedor</label>
                    <select class="form-control" name="estadoCont" id="estadoCont">
                        <option value="">-- Seleccionar --</option>
                        <option value="CARGADO" <?php if($movimiento["estado_mov"]=="CARGADO"):?> selected <?php endif;?>>CARGADO</option>
                        <option value="TRANSBORDO"<?php if($movimiento["estado_mov"]=="TRANSBORDO"):?> selected <?php endif;?>>TRANSBORDO</option>
                        <option value="DESCARGADO"<?php if($movimiento["estado_mov"]=="DESCARGADO"):?> selected <?php endif;?>>DESCARGADO</option>
                        <option value="TRANSPORTANDO"<?php if($movimiento["estado_mov"]=="TRANSPORTANDO"):?> selected <?php endif;?>>TRANSPORTANDO</option>
                        <option value="CONTENEDOR DEVUELTO"<?php if($movimiento["estado_mov"]=="CONTENEDOR DEVUELTO"):?> selected <?php endif;?>>CONTENEDOR DEVUELTO</option>
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
    <button type="button" class="btn btn-success" onclick="EditMovimiento(<?php echo $movimiento["id_movimiento"]?>)">Actualizar</button>
</div>