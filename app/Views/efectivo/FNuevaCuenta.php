<?php
foreach ($datosCliente as $value) {
    $id_cliente = $value["id_cliente"];
    $nombre_cli = $value["nombre_cli"];
}
?>
<div class="modal-header encabezado">
    <h4 class="modal-title"> REGISTRO NUEVA CUENTA </h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FNuevaCuenta">
        <div class="card-body mt-0 pt-0">
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="">Nombre del Cliente</label>
                    <select class="form-control select2bs4" name="nomCliente" id="nomCliente">
                        <option value="">Seleccionar Cliente</option>
                        <?php
                        foreach ($datosCliente as $value) {
                            $id_cliente = $value["id_cliente"];
                            $nombre_cli = $value["nombre_cli"];
                            $apellido_cli = $value["apellido_cli"];
                        ?>
                            <option value="<?php echo $id_cliente ?>"><?php echo $nombre_cli . " ". $apellido_cli; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Cod Cuenta</label>
                    <input type="text" class="form-control" id="ctaCliente" name="ctaCliente">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Descipción cuenta</label>
                    <div class="input-group">
                        <input type="text" class="form-control"  id="descripcionCuenta" name="descripcionCuenta">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label>Fecha de Apertura</label>
                    <input type="date" class="form-control" id="fechaApertura" name="fechaApertura">
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="RegCuenta()">Guardar</button>
</div>

<script>
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })
</script>