<div class="page-content page-container fondo-modal"  id="page-content">
  <div class="padding">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="row container d-flex justify-content-center ">
      <div class="col-xl-12 col-md-12">
        <div class="card user-card-full">
          <div class="row m-l-0 m-r-0">
            <div class="col-sm-3 bg-c-lite-green user-profile">
              <div class="card-block text-center text-white">
                <div class="m-b-25">
                  <img src="<?php echo base_url(); ?>/assest/img/camion-default.jpg" alt="stack photo" class="img">
                </div>
                <h1 class="badge badge-warning f-w-600"> PLACA: <?php echo $camion["placa"] ?></h1>
                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                <div class="col-sm-12">
                    <p class="m-b-10 f-w-600">ID del Camión</p>
                    <h6 class="text f-w-400"><?php echo $camion["id_camion"] ?></h6>
                  </div>
              </div>
            </div>
            <div class="col-sm-9">
              <div class="card-block">
                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">INFORMACIÓN DEL CAMIÓN</h6>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Número de Ejes</p>
                    <h6 class="text-muted f-w-400"><?php echo $camion["ejes"] ?></h6>
                  </div>
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Clase de Camión</p>
                    <h6 class="text-muted f-w-400"><?php echo $camion["clase"] ?></h6>
                  </div>
                </div>
                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Capacidad de Carga</p>
                    <h6 class="text-muted f-w-400"><?php echo $camion["capacidad"] ?></h6>
                  </div>
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Nro. de Chasis</p>
                    <p class="text-muted f-w-400"><?php echo $camion["chasis"] ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Marca</p>
                    <h6 class="text-muted f-w-400"><?php echo $camion["marca"] ?></h6>
                  </div>
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Color</p>
                    <p class="text-muted f-w-400"><?php echo $camion["color"] ?></p>
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