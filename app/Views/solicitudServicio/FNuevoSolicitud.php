<div class="modal-header" style="background: linear-gradient(180deg, #122B68 10%, #6F80FF 100%); color:#fff;">
    <h3 class="modal-title"> <b>NUEVA SOLICITUD DE SERVICIO</b></h3>
    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FNuevoSolicitud">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>NUMERO DE BILL/BL </label> <span class="text-danger"> (*)</span>
                    <input type="text" class="form-control" id="numBill" name="numBill">
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
                            <option value="<?php echo $idEmp ?>"><?php echo $nombreEmp ?></option>  
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
                    <input type="date" class="form-control" id="fechaSolicitud" name="fechaSolicitud" required min=<?php $hoy = date("Y-m-d"); echo $hoy; ?>>
                    <p class="text-danger" id="error-fecha"></p>
                </div>
                <div class="form-group col-md-6 ">
                    <label>Subir el BL</label><span class="text-danger"> (*)</span>
                    <input type="file" class="form-control" id="docBill" name="docBill" accept=".pdf">
                    <p class="text-danger" id="error-doc"></p>
                </div>

            </div>
            <div class="row">
                <div class="form-group col-md-6 ">
                    <label>Subir la Factura comercial</label><span class="text-danger"> (*)</span>
                    <input type="file" class="form-control" id="docFactura" name="docFactura" accept=".pdf">
                </div>
                <div class="form-group col-md-6 ">
                    <label>Subir la lista de Empaque</label><span class="text-danger"> (*)</span>
                    <input type="file" class="form-control" id="docEmpaque" name="docEmpaque" accept=".pdf">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 ">
                    <label>Subir otros documentos</label>
                    <input type="file" class="form-control" id="docOtros" name="docOtros" accept=".pdf , .jpg , .png">
                </div>
                <div class="col-md-6  disabled color-palette" style="background-color: #DBEEF3 ;"><span class="font-italic"> <span class="font-weight-bold">NOTA:</span>  Debe subir los documentos de importación en los campos correspondientes, en formato PDF.
                   <br> - BL / BILL 
                   <br> - FACTURA COMERCIAL
                   <br> - LISTA DE EMPAQUE
                   <br> - <span class="text-danger">(*)</span> Llenar de manera obligatoria.

                </span></div>
            </div>
    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="RegSolicitud()">Enviar Solicitud</button>
</div>