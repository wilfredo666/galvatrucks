<div class="page-content page-container fondo-modal" id="page-content">
  <div class="padding">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="row container d-flex justify-content-center">
      <div class="col-xl-12 col-md-12">
        <div class="card user-card-full">
          <div class="row m-l-0 m-r-0">
            <div class="col-sm-3 bg-c-lite-green user-profile">
              <div class="card-block text-center text-white">
                <div class="m-b-25">
                  <img src="<?php echo base_url(); ?>/assest/img/camion-default2.jpg" alt="stack photo" class="img">
                </div>
                <p class="m-b-10 f-w-600">PLACA:</p>
                <span class="badge badge-warning f-w-600"><?php echo $contratoCam["placa"] ?></span>
                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                <div class="col-sm-12">
                    <p class="m-b-10 f-w-600">ID contrato de Camión</p>
                    <h6 class="text f-w-400"><?php echo $contratoCam["id_contrato_camion"] ?></h6>
                  </div>
              </div>
            </div>
            <div class="col-sm-9">
              <div class="card-block">
                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">INFORMACIÓN DEL CONTRATO DEL CAMIÓN</h6>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Propietario del Camión</p>
                    <h6 class="text-muted f-w-400"><?php echo $contratoCam["propietario_camion"] ?></h6>
                  </div>
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Número de Contrato</p>
                    <h6 class="text-muted f-w-400"><?php echo $contratoCam["num_contrato"] ?></h6>
                  </div>
                </div>
                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Fecha Inicio de Contrato</p>
                    <h6 class="text-muted f-w-400"><?php echo date('d-m-Y', strtotime($contratoCam["fecha_inicio_contrato"]))  ?></h6>
                  </div>
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Fecha Final de Contrato</p>
                    <p class="text-muted f-w-400"><?php echo date('d-m-Y', strtotime($contratoCam["fecha_fin_contrato"] )) ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <p class="m-b-10 f-w-600">Observaciones</p>
                    <h6 class="text-muted f-w-400"><?php echo $contratoCam["observacion"] ?></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>