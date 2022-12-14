<div class="modal-header encabezado">
    <h4 class="modal-title">  EDITAR DATOS DEL CONTRATO DE CAMIÓN</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">

    <form id="FEditContratoCam">
        <div class="card-body">

            <div class="row">
            <div class="form-group col-md-6">
                    <label>Propietario de Camión / Celular</label>
                    <input type="text" class="form-control" id="propietario" name="propietario" value="<?php echo $contratoCam["propietario_camion"];?>" onchange="codigoContrato()">
                    <span class="text-danger chartjs-render-monitor" id="error-propietario"></span>
                </div>
                <div class="form-group col-md-6">
                    <label>Placa</label>
                    <input type="text" class="form-control" id="placaCon" name="placaCon" value="<?php echo $contratoCam["placa"];?>" onchange="codigoContrato()">
                    <p class="text-danger" id="error-placaCon"></p>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Fecha de Contrato</label>
                    <input type="date" class="form-control" id="fechaIni" name="fechaIni" value="<?php echo $contratoCam["fecha_inicio_contrato"];?>">
                    <p class="text-danger" id="error-fechaIni"></p>
                </div>
                <div class="form-group col-md-6">
                    <label>Fecha Conclusión de Contrato</label>
                    <input type="date" class="form-control" id="fechaFin" name="fechaFin" value="<?php echo $contratoCam["fecha_fin_contrato"];?>">
                </div>
            </div>
            <div class="row"> 
                <div class="form-group col-md-6">
                    <label>Observaciones</label>
                    <textarea type="text" class="form-control" id="obsCon" name="obsCon" ><?php echo $contratoCam["observacion"];?></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label>Nro de Contrato</label>
                    <input type="text" class="form-control" id="nomContrato" name="nomContrato" value="<?php echo $contratoCam["num_contrato"];?>" readonly>
                    <p class="text-danger" id="error-nomContrato"></p>
                </div>
            </div>

        </div>
        <!-- /.card-body -->
    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-success" onclick="EditContratoCam(<?php echo $contratoCam["id_contrato_camion"];?>)">Actualizar</button>
</div>