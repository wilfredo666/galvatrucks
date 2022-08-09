<div class="modal-header bg-info" >
    <h4 class="modal-title">EDITAR DATOS DE LA NAVIERA</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">
<form id="FEditEmpMaritima">
        <div class="card-body">

                <div class="row">

                    <div class="form-group col-md-12">
                        <label>Razón Social</label>
                        <input type="text" class="form-control" id="razonSocial" name="razonSocial" value="<?php echo $empMaritima["razon_social_emp"];?>">
                        <p class="text-danger" id="error-razonSocial"></p>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>N. I. T.</label>
                        <input type="text" class="form-control" id="nitEmp" name="nitEmp" value="<?php echo $empMaritima["nit_emp"];?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Número de Contacto</label>
                        <input type="text" class="form-control" id="contactoEmp" name="contactoEmp" value="<?php echo $empMaritima["contacto_emp"];?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Correo Electrónico</label>
                        <input type="email" class="form-control" id="correoEmp" name="correoEmp" placeholder="Ingrese correo electrónico" value="<?php echo $empMaritima["correo_emp"];?>">
                        <p class="text-danger" id="error-correoEmp"></p>
                    </div>

                    <div class="form-group col-md-12">
                        <label>Dirección</label>
                        <input type="text" class="form-control" id="dirEmp" name="dirEmp" value="<?php echo $empMaritima["direccion_emp"];?>">
                    </div>
                </div>

        </div>
        <!-- /.card-body -->
    </form>
</div> 

<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditEmpMaritima(<?php echo $empMaritima["id_emp_maritima"];?>)">Actualizar</button>
</div>