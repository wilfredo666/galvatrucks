<div class="page-content page-container fondo-modal" id="page-content">
  <div class="padding">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="row container d-flex justify-content-center">
      <div class="col-xl-12 col-md-12">
        <div class="card user-card-full">
          <div class="row m-l-0 m-r-0">
            <div class="col-sm-4 bg-c-lite-green user-profile">
              <div class="card-block text-center text-white">
                <div class="m-b-25">
                  <img src="<?php echo base_url(); ?>/assest/img/default.jpg" alt="stack photo" class="img">
                </div>
                <p><?php echo $usuario["nombre_usuario"] ?></p>
                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="card-block">
                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Información del Usuario</h6>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">ID del Usuario</p>
                    <h6 class="text-muted f-w-400"><?php echo $usuario["id_usuario"] ?></h6>
                  </div>
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Nombre completo</p>
                    <h6 class="text-muted f-w-400"><?php echo $usuario["nombre_usuario"] ?></h6>
                  </div>
                </div>
                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Datos de Acceso al sistema</h6>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Login de acceso</p>
                    <h6 class="text-muted f-w-400"><?php echo $usuario["login_usuario"] ?></h6>
                  </div>
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">Rol</p>
                    <p class="badge badge-primary f-w-600"><?php echo $usuario["rol"] ?></p>
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