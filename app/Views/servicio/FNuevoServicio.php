<div class="modal-header " style="background: linear-gradient(180deg, #252675 0%, #5657BB 100%); color:#fff;">
    <h4 class="modal-title">REGISTRO NUEVO SERVICIO</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">

    <form id="FNuevoServicio">
        <div class="card-body">
            <div class="container">
                <!-- SECCION 1 -->
                <h3 class="font-italic" style="color: #252675; background:#E4E6F5;" ><i class="fas fa-user-check"></i> Datos Personales:</h3>
                <hr style="color: #7577F0;" />

                <div class="row">
                    <div class="form-group col-md-2">
                        <label>Código de Servicio</label>
                        <input type="text" class="form-control font-italic" id="codServicio" name="codServicio" placeholder="Ejm. 'Imp-0001' ">
                        <p class="text-danger" id="error-rutaInicio"></p>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Cliente</label>
                        <select name="servCliente" id="servCliente" class="form-control ">
                            <option value="">-- Seleccionar --</option>
                            <?php
                            foreach ($cliente as $cli) {
                                $idCli = $cli['id_cliente'];
                                $nomCli = $cli['razon_social_cli'];
                            ?>
                                <option value="<?php echo $idCli ?>"><?php echo $nomCli ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Naviera</label>
                        <select name="servNaviera" id="servNaviera" class="form-control ">
                            <option value="">-- Seleccionar --</option>
                            <?php
                            foreach ($empMaritima as $emp) {
                                $idEmp = $emp['id_emp_maritima'];
                                $nomEmp = $emp['razon_social_emp'];
                            ?>
                                <option value="<?php echo $idEmp ?>"><?php echo $nomEmp ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Fecha Inicio Servicio</label>
                        <input type="date" class="form-control " id="servIni" name="servIni">
                    </div>
                </div>

                <!-- SECCION 2 -->
                <h3 class="font-italic" style="color: #252675; background:#E4E6F5;"> <i class="fab fa-docker"></i> Datos de Importación:</h3>
                <hr style="color: #7577F0;" />

                <div class="row">
                    <div class="form-group col-md-2">
                        <label>Nro BL/Bill of Lading</label>
                        <input type="text" class="form-control" id="nroBill" name="nroBill" placeholder="Ejm. 'COSU4522544'">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Nro Contenedor</label>
                        <input type="text" class="form-control" id="nroCont" name="nroCont">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Tamaño Contenedor</label>
                        <select name="tamañoCont" id="tamañoCont" class="form-control">
                            <option value="">-- Seleccionar --</option>
                            <option value="1x20">1x20</option>
                            <option value="1x40">1x40</option>
                            <option value="1x20 Hight">1x20 Hight</option>
                            <option value="1x40 Hight">1x40 Hight</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Peso Mercadería</label>
                        <input type="text" class="form-control" id="pesoMerc" name="pesoMerc">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Detalle de Mercadería</label>
                        <textarea rows="1" cols="50" class="form-control" id="detalleMerc" name="detalleMerc">  </textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Origen Mercadería</label>
                        <input type="text" class="form-control" id="origenMerc" name="origenMerc">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Destino de Mercadería</label>
                        <input type="text" class="form-control" id="destMerc" name="destMerc">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Fecha de Arribo</label>
                        <input type="date" class="form-control" id="fechaArribo" name="fechaArribo">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Fecha en Almacén</label>
                        <input type="date" class="form-control" id="fechaAlmacen" name="fechaAlmacen">
                    </div>
                </div>

                <!-- SECCION 3 -->
                <h3 class="font-italic" style="color: #252675; background:#E4E6F5;"><i class="fas fa-truck"></i> Datos de Asignación del Servicio:</h3>
                <hr style="color: #CBDB56;" />

                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Conductor Asignado</label>
                        <select name="conductorAsig" id="conductorAsig" class="form-control">
                            <option value="">-- Seleccionar --</option>
                            <?php
                            foreach ($asignacion as $asig) {
                                $idAsig = $asig['id_asignacion'];
                                $nomCond = $asig['nombre_cond'];
                                $placa = $asig['placa'];
                            ?>
                                <option value="<?php echo $idAsig ?>"><?php echo $nomCond . " - " . $placa ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Contrato Camión</label>
                        <select name="contratoCam" id="contratoCam" class="form-control ">
                            <option value="">-- Seleccionar --</option>
                            <?php
                            foreach ($contratoCam as $contrato) {
                                $idContrato = $contrato['id_contrato_camion'];
                                $propietario = $contrato['propietario_camion'];
                                $placa = $contrato['placa'];
                            ?>
                                <option value="<?php echo $idContrato ?>"><?php echo $propietario . " / PLACA: " . $placa ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Ruta</label>
                        <select name="ruta" id="ruta" class="form-control ">
                            <option value="">-- Seleccionar --</option>
                            <?php
                            foreach ($ruta as $rutas) {
                                $idRuta = $rutas['id_ruta'];
                                $rutaIni = $rutas['ruta_inicio'];
                                $rutaFin = $rutas['ruta_fin'];
                            ?>
                                <option value="<?php echo $idRuta ?>"><?php echo $rutaIni . " - " . $rutaFin ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-md-2">
                        <label>Costo de Servicio Bs.</label>
                        <input type="number" placeholder="Ejm. '600.00' " step="0.01" class="form-control" id="costoServ" name="costoServ">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Documentos PDF <span class="font-italic">(MIC, CRT, FACTURA, PARTE REC.)</span></label>
                        <input type="file" accept=".pdf" class="form-control" id="docImportacion" name="docImportacion">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Observaciones</label>
                        <textarea rows="1" cols="50" class="form-control" id="observacion" name="observacion">  </textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="RegServicio()">Guardar</button>
</div>