<div class="modal-header encabezado">
    <h4 class="modal-title"> REGISTRO NUEVA CUENTA </h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FNuevoCredito">
        <div class="card-body mt-0 pt-0">
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="">Nombre del Cliente</label>
                    <select class="form-control" name="nomCliente" id="nomCliente">
                        <option value="">Seleccionar Cliente</option>
                        <?php
                        foreach ($efectivo as $value) {
                            $id_cuenta_cli = $value["id_cuenta_cli"];
                            $nombre_cli = $value["nombre_cli"];
                            $apellido_cli = $value["apellido_cli"];
                        ?>
                            <option value="<?php echo $id_cuenta_cli ?>"><?php echo $nombre_cli . " ". $apellido_cli; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label>Cod Crédito</label>
                    <input type="text" class="form-control" id="codCredito" name="codCredito">
                </div>
                <div class="form-group col-md-8">
                    <label>Concepto de depósito</label>
                    <div class="input-group">
                        <input type="text" class="form-control"  id="descripcionCredito" name="descripcionCredito">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Importe</label>
                    <div class="input-group">
                        <input type="number" class="form-control"  id="importe" name="importe">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>Fecha de Apertura</label>
                    <input type="date" class="form-control" id="fechaCredito" name="fechaCredito">
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="RegCredito()">Guardar</button>
</div>
