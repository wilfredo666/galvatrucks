<div class="content-wrapper">
  <section class="content-header" style="padding-bottom: 0;">
    <h3 class="content-header">Solicitud de Servicios<small class="font-weight-lighter h5"> Reportes</small></h3>
    <hr style="border-color: #72C5CF; margin: 0;">
  </section>

  <div class="modal-body" style="padding-bottom: 0;">
    <div class="card">
      <form id="ReporteSolicitud">
        <div class="card-body" style="padding-bottom: 0;">
          <div class="container col-md-12">
            <div class="row">
              <div class="form-group col-md-5">
                <label>Mostrar por Estado de Solicitud:</label>
                <select class="form-control" name="estado" id="estado">
                  <option value="">-- Seleccionar --</option>
                  <option value="pendiente">Pendientes</option>
                  <option value="rechazado">Rechazados</option>
                  <option value="aceptado">Aceptados</option>
                  <option value="Todos">Todos</option>
                </select>
              </div>
              <!-- <div class="form-group col-md-2">
                <label>Fecha desde:</label>
                <input type="date" class="form-control" id="fechaDesde" name="fechaDesde">
              </div>
              <div class="form-group col-md-2">
                <label>Fecha hasta:</label>
                <input type="date" class="form-control" id="fechaHasta" name="fechaHasta">
              </div> -->
              <div class="form-group col-md-3" style=" display: flex; align-items: center;">
                <button type="button" class="btn btn-navbar btn-app bg-warning" onclick="reporteSolicitudes();">
                  <i class="fas fa-search "></i>
                </button>
                <button type="button" class="btn btn-navbar  btn-app bg-primary" onclick="javascript:window.print()">
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

    <div class="container-fluid ">
      <table id="Tabla3" class="table table-bordered table-striped ">
        <thead class="thead-dark ">
          <tr class="text-center">
            <th>ID</th>
            <th>RAZON SOCIAL</th>
            <th>NAVIERA</th>
            <th>FECHA SOLICI.</th>
            <th>OBSERVACIONES</th>
            <th>ESTADO</th>
            <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody id="repServSolicitud">
          
        </tbody>
      </table>
    </div>
  </section>
  <!-- /.content -->
<!-- /.content-wrapper -->
</div>
