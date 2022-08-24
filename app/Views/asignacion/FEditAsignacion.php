<div class="modal-header bg-info">
    <h4 class="modal-title">EDITAR DATOS DE LA ASIGNACION</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">

    <form id="FEditAsignacion">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Asignación <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" id="asignacion" name="asignacion" value="<?php echo $asignacion["nombre_asig"]; ?>">
                        <p class="text-danger" id="error-asignacion"></p>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Fecha de Asignación <span class="text-danger"> *</span></label>
                        <input type="date" class="form-control" id="fechaIni" name="fechaIni" value="<?php echo $asignacion["fecha_asig"] ?>">
                        <p class="text-danger" id="error-fechaIni"></p>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Fecha Conclusión de Asig.<span class="text-primary"> °</span></label>
                        <input type="date" class="form-control" id="fechaFin" name="fechaFin" value="<?php echo $asignacion["fecha_baja_asig"] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-8">
                        <label>Conductor<span class="text-danger"> *</span></label>
                        <select name="conductorAsig" id="conductorAsig" class="form-control">
                            <option value="">-- Seleccionar --</option>
                            <?php
                            foreach ($lista_conductor as $conductor) {
                                $idCond = $conductor['id_conductor'];
                                $nombreCond = $conductor['nombre_cond'];
                                $apCond = $conductor['apellido_cond'];
                            ?>
                                <option value="<?php echo $idCond ?>" <?php if ($asignacion["nombre_cond"] == $nombreCond) : ?> selected <?php endif; ?>><?php echo $nombreCond." ".$apCond?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Placa <span class="text-danger"> *</span></label>
                        <select name="placaAsig" id="placaAsig" class="form-control">
                            <option value="">-- Seleccionar --</option>
                            <?php
                            foreach ($lista_camion as $camion) {
                                $idCam = $camion['id_camion'];
                                $placa = $camion['placa'];
                            ?>
                                <option value="<?php echo $idCam ?>" <?php if ($asignacion["placa"] == $placa) : ?> selected <?php endif; ?>><?php echo $placa ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-8">
                        <p class="font-italic text-danger" style="padding-bottom: 0%;">Nota: - (*) Llenar de manera Obligatoria <br> - (°) Llenar, solo si se tiene la fecha de Conclusión</p>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Estado<span class="text-danger"> *</span></label>
                        <select class="form-control" name="estado" id="estado">
                            <option value="">-- Seleccionar --</option>
                            <option value="1" <?php if ($asignacion["activo_asig"] == "1") : ?> selected <?php endif; ?>>Activo</option>
                            <option value="0" <?php if ($asignacion["activo_asig"] == "0") : ?> selected <?php endif; ?>>Inactivo</option>
                        </select>
                    </div>

                </div>
                
                <p class="text-danger" id="error-password"></p>
            </div>
            <!-- /.card-body -->
    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditAsignacion(<?php echo $asignacion["id_asignacion"]?>)">Actualizar</button>
</div>