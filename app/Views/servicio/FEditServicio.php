<div class="modal-header encabezado">
    <h4 class="modal-title">EDITAR SERVICIO</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">

    <form id="FEditServicio">
        <div class="card-body">
            <div class="container">
                <!-- SECCION 1 -->
                <h3 class="font-italic" style="color: #252675; background:#E4E6F5;"><i class="fas fa-user-check"></i> Datos Personales:</h3>
                <hr style="color: #7577F0;" />

                <div class="row">
                    <div class="form-group col-md-2">
                        <label>Cod. Servicio</label>
                        <input type="text" class="form-control font-italic" id="codServicio" name="codServicio" placeholder="Ejm. 'Imp-0001' " value="<?php echo $servicio["cod_servicio"] ?>">
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
                                <option value="<?php echo $idCli ?>" <?php if ($servicio["razon_social_cli"] == $nomCli) : ?> selected <?php endif; ?>><?php echo $nomCli ?>
                                </option>
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
                                <option value="<?php echo $idEmp ?>" <?php if ($servicio["id_emp_maritima"] == $idEmp) : ?> selected <?php endif; ?>><?php echo $nomEmp ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Fecha Inicio Servicio</label>
                        <input type="date" class="form-control " id="servIni" name="servIni" value="<?php echo $servicio["fecha_inicio_servicio"] ?>">
                    </div>
                </div>

                <!-- SECCION 2 -->
                <h3 class="font-italic" style="color: #252675; background:#E4E6F5;"> <i class="fab fa-docker"></i> Datos de Importación:</h3>
                <hr style="color: #7577F0;" />

                <div class="row">
                    <div class="form-group col-md-3">
                        <label>Nro BL/Bill of Lading</label>
                        <input type="text" class="form-control" id="nroBill" name="nroBill" value="<?php echo $servicio["num_bill"] ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Nro Contenedor</label>
                        <input type="text" class="form-control" id="nroCont" name="nroCont" value="<?php echo $servicio["nro_contenedor"] ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Tamaño Contenedor</label>
                        <select name="tamañoCont" id="tamañoCont" class="form-control">
                            <option value="">-- Seleccionar --</option>
                            <option value='1x20"'<?php if ($servicio["medida_contenedor"] == '1x20"') : ?> selected <?php endif; ?>>1x20</option>
                            <option value='1x40"' <?php if ($servicio["medida_contenedor"] == '1x40"') : ?> selected <?php endif; ?>>1x40</option>
                            <option value='1x20" Hight' <?php if ($servicio["medida_contenedor"] == '1x20" Hight' ) : ?> selected <?php endif; ?>>1x20 Hight</option>
                            <option value='1x40" Hight' <?php if ($servicio["medida_contenedor"] == '1x40" Hight') : ?> selected <?php endif; ?>>1x40 Hight</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Peso Mercadería</label>
                        <input type="text" class="form-control" id="pesoMerc" name="pesoMerc" value="<?php echo $servicio["peso_mercaderia"] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Detalle de Mercadería</label>
                        <textarea rows="1" cols="50" class="form-control" id="detalleMerc" name="detalleMerc"> <?php echo $servicio["detalle_mercaderia"] ?> </textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Origen Mercadería</label>
                        <input type="text" class="form-control" id="origenMerc" name="origenMerc" value="<?php echo $servicio["origen_mercaderia"] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Destino de Mercadería</label>
                        <input type="text" class="form-control" id="destMerc" name="destMerc" value="<?php echo $servicio["destino_mercaderia"] ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Fecha de Arribo</label>
                        <input type="date" class="form-control" id="fechaArribo" name="fechaArribo" value="<?php echo $servicio["fecha_arribo"] ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Fecha en Almacén</label>
                        <input type="date" class="form-control" id="fechaAlmacen" name="fechaAlmacen" value="<?php echo $servicio["fecha_almacen"] ?>">
                    </div>
                </div>

                <!-- SECCION 3 -->
                <h3 class="font-italic" style="color: #252675; background:#E4E6F5;"><i class="fas fa-truck"></i> Datos de Asignación del Servicio:</h3>
                <hr style="color: #CBDB56;" />

                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Conductor Asignado / Placa</label>
                        <select name="conductorAsig" id="conductorAsig" class="form-control" onchange="SeleccionServicio()">
                            <option value=0>-- Seleccionar --</option>
                            <?php
                            foreach ($asignacion as $asig) {
                                $idAsig = $asig['id_asignacion'];
                                $nomCond = $asig['nombre_cond'];
                                $apCond = $asig['apellido_cond'];
                                $placa = $asig['placa'];
                            ?>
                                <option value="<?php echo $idAsig ?>" <?php if ($servicio["id_asignacion"] ==  $idAsig) : ?> selected <?php endif; ?>>
                                    <?php echo $nomCond . " " . $apCond . " - " . $placa ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Contrato Camión</label>
                        <select name="contratoCam" id="contratoCam" class="form-control " onchange="SeleccionServicio()">
                            <option value=0>-- Seleccionar --</option>
                            <?php
                            foreach ($contratoCam as $contrato) {
                                $idContrato = $contrato['id_contrato_camion'];
                                $propietario = $contrato['propietario_camion'];
                                $placa = $contrato['placa'];
                            ?>
                                <option value="<?php echo $idContrato ?>" <?php if ($servicio["id_contrato_camion"] == $idContrato) : ?> selected <?php endif; ?>>
                                    <?php echo $propietario . " / PLACA: " . $placa ?></option>
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
                                <option value="<?php echo $idRuta ?>" <?php if ($servicio["ruta_inicio"] == $rutaIni && $servicio["ruta_fin"] == $rutaFin) : ?> selected <?php endif; ?>>
                                    <?php echo $rutaIni . " A: " . $rutaFin ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Observaciones</label>
                        <textarea rows="1" cols="50" class="form-control" id="observacion" name="observacion"> <?php echo $servicio["observaciones"] ?> </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Costo de Servicio Bs.</label>
                        <input type="number" placeholder="Ejm. '600.00' " step="0.01" class="form-control" id="costoServ" name="costoServ" value="<?php echo $servicio["costo_servicio"] ?>">
                    </div>
                    <div class="form-group col-md-5">
                        <label>Subir Documentos de importación PDF </label>
                        <input type="file" accept=".pdf" class="form-control" id="docImportacion" name="docImportacion">
                        <input type="hidden" class="form-control" id="docImportacionActual" name="docImportacionActual" value="<?php echo $servicio["documento"] ?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label>Estado Servicio</label>
                        <select class="form-control encabezado" name="estado" id="estado">
                            <option value="">-- Seleccionar --</option>
                            <option value="1" <?php if ($servicio["activo_serv"] == "1") : ?> selected <?php endif; ?>>Pendiente</option>
                            <option value="0" <?php if ($servicio["activo_serv"] == "0") : ?> selected <?php endif; ?>>Finalizado</option>
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
    <button type="button" class="btn btn-success" onclick="EditServicio(<?php echo $servicio["id_servicio"] ?>)">Actualizar</button>
</div>