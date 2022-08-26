<div class="modal-header bg-primary">
    <h4 class="modal-title">REGISTRO NUEVA ASIGNACIÓN</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">

    <form id="FNuevoAsignacion">
        <div class="card-body">
            <div class="container">

                <div class="row">
                    <div class="form-group col-md-8">
                        <label>Coductor <span class="text-danger"> *</span></label>
                        <select name="conductorAsig" id="conductorAsig" class="form-control" onchange="codAsignacion()">
                            <option value="">-- Seleccionar --</option>
                            <?php
                            foreach ($lista_conductor as $conductor) {
                                $idCond = $conductor["id_conductor"];
                                $nomCond = $conductor['nombre_cond'];
                                $apellidoCond = $conductor['apellido_cond'];
                            ?>
                                <option value="<?php echo $idCond ?>"><?php echo $nomCond . " " . $apellidoCond ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Placa <span class="text-danger"> *</span></label>
                        <select name="placaAsig" id="placaAsig" class="form-control" onchange="codAsignacion()">
                            <option value="">-- Seleccionar --</option>
                            <?php
                            foreach ($lista_camion as $camion) {
                                $idCam = $camion['id_camion'];
                                $placa = $camion['placa'];
                            ?>
                                <option value="<?php echo $idCam ?>"><?php echo $placa ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Fecha de Asignación <span class="text-danger"> *</span></label>
                        <input type="date" class="form-control" id="fechaIni" name="fechaIni">
                        <p class="text-danger" id="error-fechaIni"></p>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Fecha Conclusión de Asig.<span class="text-primary"> °</span></label>
                        <input type="date" class="form-control" id="fechaFin" name="fechaFin">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Código de Asignación <span class="text-danger"> *</span></label>
                        <input type="text" class="form-control" id="asignacion" name="asignacion" readonly>
                        <p class="text-danger" id="error-asignacion"></p>
                    </div>
                </div>
                <p class="font-italic text-danger" style="padding-bottom: 0%;">Nota: - (*) Llenar de manera Obligatoria <br> - (°) Llenar, solo si se tiene la fecha de Conclusión</p>
            </div>
        </div>
        <!-- /.card-body -->
    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="RegAsignacion()">Guardar</button>
</div>