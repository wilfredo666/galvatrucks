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
              <img class="img-circle elevation-2" src="<?php echo base_url(); ?>/assest/img/conductor/<?php echo $asignacion["imagen_cond"] ?>" alt="stack photo" class="img" alt="User Avatar" width="80%">
            </div>
            <!-- /.widget-user-image -->
            <h4 class="widget-user-desc font-italic">Conductor:<br>
              <?php
              echo $asignacion["nombre_cond"] . " " . $asignacion["apellido_cond"];
              ?>
            </h4>
            <h4 class="widget-user-desc font-italic">Placa: <?php echo $asignacion["placa"] ?></h4>
          </div>
          <div class="card-footer p-0">
            <ul class="nav flex-column">
              <li class="nav-item">
                <h5 class="nav-link font-weight-normal">
                  Nro de Asignación: <span class="float-right font-weight-light"><?php echo $asignacion["nombre_asig"] ?></span>
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
              <li class="nav-item">
                <h5 class="nav-link font-weight-normal">
                  Estado:

                  <?php
                  if ($asignacion["activo_asig"] == 1) {
                  ?>
                    <span class="float-right  badge bg-success">Activo</span>
                  <?php
                  } else {
                  ?>
                    <span class="float-right  badge bg-danger">Inactivo</span>
                  <?php
                  }
                  ?>
                </h5>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>