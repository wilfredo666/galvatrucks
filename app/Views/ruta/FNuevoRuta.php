<div class="modal-header encabezado">
    <h4 class="modal-title">REGISTRO NUEVA RUTA</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">

    <form id="FNuevoRuta">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Ruta de Inicio</label>
                        <input type="text" class="form-control" id="rutaIni" name="rutaIni" placeholder="Ingrese el lugar Inicial de Origen">
                        <p class="text-danger" id="error-rutaInicio"></p>
                    </div>

                    <div class="form-group col-md-12">
                        <label>Ruta Final</label>
                        <input type="text" class="form-control" id="rutaFin" name="rutaFin" placeholder="Ingrese el lugar de Destino">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Distancia en Kilometros</label>
                        <input type="text" class="form-control" id="distancia" name="distancia">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Combustible</label>
                        <input type="text" class="form-control" id="combustible" name="combustible">
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </form>

</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="RegRuta()">Guardar</button>
</div>