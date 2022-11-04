<div class="modal-header encabezado">
    <h4 class="modal-title"> EDITAR PAGO </h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FEditPago">
        <div class="card-body">
            <div class="row">

                <div class="form-group col-md-12">
                    <label>Concepto de Pago</label>
                    <input type="text" class="form-control" id="conceptoPago" name="conceptoPago" value="<?php echo  $pagosId["concepto"]?>">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Monto Pagado</label>
                    <div class="input-group">

                        <input type="number" class="form-control" title="Digite monto numérico" id="montoPago" name="montoPago" value="<?php echo $pagosId["monto"] ?>">
                        <div class="input-group-append">
                            <span class="input-group-text">Bs.</span>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>Fecha de Pago</label>
                    <input type="date" class="form-control" id="fechaPago" name="fechaPago" value="<?php echo $pagosId["fecha_pago"]?>">
                    <p class="text-danger" id="error-loginUsuario"></p>
                </div>

            </div>
        </div>
        <!-- /.card-body -->
    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-success" onclick="EditPago(<?php echo $pagosId["id_pago"] ?>)">Guardar</button>
</div>