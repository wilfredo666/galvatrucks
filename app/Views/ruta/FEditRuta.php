<div class="modal-header encabezado">
    <h4 class="modal-title">EDITAR RUTA</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">

    <form id="FEditRuta">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-12 ">
                        <label >Ruta de Inicio</label>
                        <input type="text" class="form-control" id="rutaIni" name="rutaIni" value="<?php echo $ruta["ruta_inicio"]?>">
                        <p class="text-danger" id="error-rutaInicio"></p>
                    </div>

                    <div class="form-group col-md-12">
                        <label>Ruta Final</label>
                        <input type="text" class="form-control" id="rutaFin" name="rutaFin" value="<?php echo $ruta["ruta_fin"]?>">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Distancia en Kilometros</label>
                        <input type="text" class="form-control" id="distancia" name="distancia" value="<?php echo $ruta["kilometros"]?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Combustible</label>
                        <input type="text" class="form-control" id="combustible" name="combustible" value="<?php echo $ruta["combustible"]?>">
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-success" onclick="EditRuta(<?php echo $ruta["id_ruta"]?>)">Actualizar</button>
</div>