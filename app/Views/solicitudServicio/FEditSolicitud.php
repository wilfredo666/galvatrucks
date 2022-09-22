<div class="modal-header" style="background: linear-gradient(180deg, #122B68 10%, #6F80FF 100%); color:#fff;">
    <h3 class="modal-title"> <b>EDITAR SOLICITUD DE SERVICIO</b></h3>
    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FEditSolicitud">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>NUMERO DE BILL/BL </label> <span class="text-danger"> (*)</span>
                    <input type="text" class="form-control" id="numBill" name="numBill" value="<?php echo $solicitudServ["numero_bill"] ?>">
                    <p class="text-danger" id="error-numBill"></p>
                </div>

                <div class="form-group col-md-6">
                    <label>NAVIERA </label><span class="text-danger"> (*)</span>
                    <select name="naviera" id="naviera" class="form-control ">
                        <option value="">-- Seleccionar --</option>
                        <?php
                        foreach ($empMaritima as $emp) {
                            $idEmp = $emp['id_emp_maritima'];
                            $nombreEmp = $emp['razon_social_emp'];
                        ?>
                            <option value="<?php echo $idEmp ?>" <?php if ($solicitudServ["razon_social_emp"] == $nombreEmp) : ?> selected <?php endif; ?>> <?php echo $nombreEmp ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                    <p class="text-danger" id="error-naviera"></p>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 ">
                    <label>Fecha de Solicitud</label><span class="text-danger"> (*)</span>
                    <input type="date" class="form-control" id="fechaSolicitud" name="fechaSolicitud" required min=<?php $hoy = date("Y-m-d");
                                                                                                                    echo $hoy; ?> value="<?php echo $solicitudServ["fecha_solicitud"] ?>">
                    <p class="text-danger" id="error-fecha"></p>
                </div>
                <div class="form-group col-md-6 ">
                    <label>Subir el BL</label><span class="text-danger"> (*)</span>
                    <input type="file" class="form-control" id="docBill" name="docBill" accept=".pdf" >
                    <input type="hidden" class="form-control" id="docBillActual" name="docBillActual" accept=".pdf" value="<?php echo $solicitudServ["doc_bill"] ?>">
                    <p class="text-danger" id="error-doc"></p>
                </div>

            </div>

            <div class="row">
                <div class="form-group col-md-6 ">
                    <label>Subir la Factura comercial</label><span class="text-danger"> (*)</span>
                    <input type="file" class="form-control" id="docFactura" name="docFactura" accept=".pdf" >
                    <input type="hidden" class="form-control" id="docFacturaActual" name="docFacturaActual" accept=".pdf" value="<?php echo $solicitudServ["doc_factura"] ?>">
                </div>
                <div class="form-group col-md-6 ">
                    <label>Subir la lista de Empaque</label><span class="text-danger"> (*)</span>
                    <input type="file" class="form-control" id="docEmpaque" name="docEmpaque" accept=".pdf" >
                    <input type="hidden" class="form-control" id="docEmpaqueActual" name="docEmpaqueActual" accept=".pdf" value="<?php echo $solicitudServ["doc_lista_empaque"] ?>">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 ">
                    <label>Subir otros documentos</label>
                    <input type="file" class="form-control" id="docOtros" name="docOtros" accept=".pdf" >
                    <input type="hidden" class="form-control" id="docOtrosActual" name="docOtrosActual" accept=".pdf , .jpg , .png" value="<?php echo $solicitudServ["doc_otros"] ?>">
                </div>
                <div class="form-group col-md-6 ">
                    <label>Observaciones</label>
                    <textarea type="text" class="form-control" id="observaciones" name="observaciones" rows="2" cols="50" style="float:left;"><?php echo $solicitudServ["observaciones"] ?></textarea>
                </div>
                <div class="row " style="background-color: #DBEEF3 ;  ">
                    <div class="col-md-12  disabled color-palette">
                        <span class="font-italic"> <span class="font-weight-bold">NOTA:</span> Debe subir los documentos escaneados de la importación en los campos correspondientes, en formato PDF.
                            <br> - BL / BILL
                            <br> - FACTURA COMERCIAL
                            <br> - LISTA DE EMPAQUE
                            <br> - <span class="text-danger">(*)</span> Llenar de manera obligatoria.
                        </span>
                    </div>
                </div>
            </div>

    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-success" onclick="EditSolicitud(<?php echo $solicitudServ["id_solicitud"] ?>)">Actualizar Solicitud</button>
</div>