<div class="page-content page-container fondo-modal" id="page-content">
  <div class="padding">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="row container d-flex justify-content-center">
      <div class="col-xl-12 col-md-12">
        <div class="card user-card-full">
          <div class="row m-l-0 m-r-0">
            <div class="col-sm-4 bg-c-lite-red user-profile">
              <div class="card-block text-center text-white">
                <div class="m-b-25">
                  <img src="<?php echo base_url(); ?>/assest/img/rutadefault.jpg" alt="stack photo" class="img">
                </div>

                <div class="col-sm-12">
                    <p class="m-b-10 f-w-600">ID Ruta</p>
                    <h6 class="text badge badge-warning f-w-400"><?php echo $ruta["id_ruta"] ?></h6>
                  </div>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="card-block">
                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">INFORMACIÓN DE  LA RUTA</h6>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Punto de Partida</p>
                    <h6 class="text-muted f-w-400"><?php echo $ruta["ruta_inicio"] ?></h6>
                  </div>
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Punto de Llegada</p>
                    <h6 class="text-muted f-w-400"><?php echo $ruta["ruta_fin"] ?></h6>
                  </div>
                </div>
                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Distancia en Kilometros</p>
                    <h6 class="text-muted f-w-400"><?php echo $ruta["kilometros"] ?></h6>
                  </div>
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Total Conbustible en (Litros)</p>
                    <p class="text-muted f-w-400"><?php echo $ruta["combustible"] ?></p>
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