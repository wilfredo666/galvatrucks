<div class="content-wrapper">
  <section class="content-header" style="padding-bottom: 0;">
    <h3 class="content-header">Servicios realizados por Conductor <small class="font-weight-lighter">Reportes</small></h3>
    <hr style="border-color: #72C5CF; margin: 0;">
  </section>

  <div class="modal-body" style="padding-bottom: 0;">
    <div class="card">
      <form id="ReporteSolicitud">
        <div class="card-body" style="padding-bottom: 0;">
          <div class="container col-md-12">
            <div class="row">
              <div class="form-group col-md-5">
                <label>Nombre y Apellido del Conductor</label>
                <select class="form-control" name="estado" id="estado">
                  <option value="Seleccionar">-- Seleccionar --</option>
                  <option value="Pendientes">Pendientes</option>
                  <option value="Rechazados">Rechazados</option>
                  <option value="Aceptados">Aceptados</option>
                  <option value="Todos">Todos</option>
                  <!-- <php
                  foreach ($solicitud as $soli) {
                    $idSolicitud = $soli["id_solicitud"];
                    $estadoSoli = $soli['activo_solicitud'];
                    $numeroBill = $soli['numero_bill'];
                  ?>
                  <option value="<php echo $idSolicitud ?>"> <php echo $estadoSoli  ?> </option>
                  <php
                  }
                  ?> -->
                </select>
                <p class="text-danger" id="error-nomConductor"></p>
              </div>
              <div class="form-group col-md-2">
                <label>Fecha desde:</label>
                <input type="date" class="form-control" id="fechaDesde" name="fechaDesde">
              </div>
              <div class="form-group col-md-2">
                <label>Fecha hasta:</label>
                <input type="date" class="form-control" id="fechaHasta" name="fechaHasta">
              </div>
              <div class="form-group col-md-3" style=" display: flex; align-items: center;">
                <button type="button" class="btn btn-navbar btn-app bg-warning" onclick="reporteSolicitudes();">
                  <i class="fas fa-search "></i>
                </button>
                <button type="button" class="btn btn-navbar  btn-app bg-primary">
                  <i class="fas fa-print"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>

  <hr style="background: #72C5CF; height: 1px;">
  <!-- /.card-body -->
  <section class="content">

    <div class="container-fluid">
      <table id="Tabla2" class="table table-bordered table-striped">  
        <thead class="thead-dark">
          <tr>
            <th>COD. SERVICIO</th>
            <th>NRO BL/BILL</th>
            <th>LUGAR PARTIDA</th>
            <th>DESTINO</th>
            <th>FECHA</th>
          </tr>
        </thead>
        <tbody id="repServConductor">

        </tbody>
      </table>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->