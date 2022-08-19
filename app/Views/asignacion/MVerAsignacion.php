<div class="page-content page-container" id="page-content">
  <div class="padding">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>

    <div class="row">
      <div class="col-md-12">
        <!-- Widget: user widget style 2 -->
        <div class="card card-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-warning">
            <div class="widget-user-image">
              <img class="img-circle elevation-2" src="<?php echo base_url(); ?>/assest/img/asignacion.png" alt="stack photo" class="img" alt="User Avatar">
            </div>
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username">Conductor:
              <?php
              foreach ($lista_conductor as $conductor) {
                $idCond = $conductor["id_conductor"];
                $nomCond = $conductor['nombre_cond'];
                $apellidoCond = $conductor['apellido_cond'];
              }
              ?>
              <?php
              if ($idCond == $asignacion["id_conductor"]) {
                echo $nomCond;
              }
              ?>
            </h3>
            <h5 class="widget-user-desc">Nro de Asignación: <?php echo $asignacion["nombre_asig"] ?></h5>
          </div>
          <div class="card-footer p-0">
            <ul class="nav flex-column">
              <li class="nav-item">
                <h5 class="nav-link font-weight-normal">
                  Placa: <span class="float-right font-weight-light"><?php echo $asignacion["id_camion"] ?></span>
                </h5>
                
              </li>
              <li class="nav-item">
                <h5 class="nav-link font-weight-normal">
                  Fecha de Asignación: <span class="float-right font-weight-light"><?php echo $asignacion["fecha_asig"] ?></span>
                </h5>
              </li>
              <li class="nav-item">
                <h5 class="nav-link font-weight-normal">
                  Fecha Baja de Asignación: <span class="float-right font-weight-light"><?php echo $asignacion["fecha_baja_asig"] ?></span>
                </h5>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>