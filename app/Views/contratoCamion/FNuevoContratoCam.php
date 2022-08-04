<div class="modal-header bg-primary">
    <h4 class="modal-title">REGISTRO NUEVO CONTRATO CAMIÓN</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">

    <form id="FNuevoContratoCam">
        <div class="card-body">

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Nro de Contrato</label>
                    <input type="text" class="form-control" id="nomContrato" name="nomContrato">
                </div>
                <div class="form-group col-md-6">
                    <label>Placa</label>
                    <input type="text" class="form-control" id="placaCon" name="placaCon">
                </div>
                <div class="form-group col-md-6">
                    <label>Fecha de Contrato</label>
                    <input type="date" class="form-control" id="fechaIni" name="fechaIni">
                </div>
                <div class="form-group col-md-6">
                    <label>Fecha Conclusión de Contrato</label>
                    <input type="date" class="form-control" id="fechaFin" name="fechaFin">
                </div>
                <div class="form-group col-md-6">
                    <label>Propietario de Camión / Celular</label>
                    <input type="text" class="form-control" id="propietario" name="propietario">
                </div>
                <div class="form-group col-md-6">
                    <label>Observaciones</label>
                    <input type="text" class="form-control" id="obsCon" name="obsCon">
                </div>

            </div>

        </div>
        <!-- /.card-body -->
    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="RegContratoCam()">Guardar</button>
</div>