<div class="modal-header bg-primary" >
    <h4 class="modal-title">REGISTRO NUEVA NAVIERA</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">
<form id="FNuevoEmpMaritima">
        <div class="card-body">

                <div class="row">

                    <div class="form-group col-md-12">
                        <label>Razón Social</label>
                        <input type="text" class="form-control" id="razonSocial" name="razonSocial">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>N. I. T.</label>
                        <input type="text" class="form-control" id="nitEmp" name="nitEmp">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Número de Contacto</label>
                        <input type="text" class="form-control" id="contactoEmp" name="contactoEmp">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Correo Electrónico</label>
                        <input type="email" class="form-control" id="correoEmp" name="correoEmp" placeholder="Ingrese correo electrónico">
                    </div>

                    <div class="form-group col-md-12">
                        <label>Dirección</label>
                        <input type="text" class="form-control" id="dirEmp" name="dirEmp">
                    </div>
                </div>

        </div>
        <!-- /.card-body -->
    </form>
</div> 

<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="RegEmpMaritima()">Guardar</button>
</div>