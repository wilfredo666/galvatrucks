<?php
foreach($datosServicio as $serv){
 $idServi = $serv["id_servicio"];
 $numBill = $serv["num_bill"];
}
?>
<div class="modal-header encabezado">
    <h4 class="modal-title"> REGISTRO NUEVO PAGO </h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FNuevoPago">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-4">
                    <label>Fecha de Pago</label>
                    <input type="date" class="form-control" id="fechaPago" name="fechaPago">
                    <p class="text-danger" id="error-loginUsuario"></p>
                </div>
                <div class="form-group col-md-8">
                    <label>Concepto de Pago</label>
                    <input type="text" class="form-control" id="conceptoPago" name="conceptoPago">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Monto Pagado</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="number" class="form-control" title="Digite monto numérico" id="montoPago" name="montoPago">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>Tipo de Moneda</label>
                    <select class="form-control" name="tipoMoneda" id="tipoMoneda">
                        <option value="">--- Seleccionar ---</option>
                        <option value="BS">[BS]-Bolivianos</option>
                        <option value="USD">[USD]-Dolares Americanos</option>
                    </select>
                </div>
                <input type="hidden" class="form-control" id="numBill" name="numBill" value="<?php echo $numBill?>">
                <input type="hidden" class="form-control" id="idServicio" name="idServicio" value="<?php echo $idServi?>">
            </div>
        </div>
        <!-- /.card-body -->
    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="RegPago()">Guardar</button>
</div>