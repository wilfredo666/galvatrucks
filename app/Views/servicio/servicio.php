<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="card-header">
      <h3 class="font-weight-light ">Lista de Servicios</h3>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <table id="DataTableCamion" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>COD. SERVICIO</th>
            <th>NOMBRE CLIENTE</th>
            <!--             <th>NAVIERA</th> -->
            <th>NRO BL/BILL</th>
            <th>FECHA ARRIBO</th>
            <th>ESTADO</th>
            <th> <button class="btn btn-block btn-primary" onclick="MNuevoServicio()"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($servicio as $lista) {
            $idServicio = $lista['id_servicio'];
            $codServicio = $lista['cod_servicio'];
            $cli = $lista['razon_social_cli'];
            $naviera = $lista['razon_social_emp'];
            $nroBl = $lista['num_bill'];
            $fechaArribo = $lista['fecha_arribo'];
            $estadoServicio = $lista['activo_serv'];
          ?>
            <tr>
              <td><?php echo $codServicio; ?></td>
              <td><?php echo $cli; ?></td>

              <td><?php echo $nroBl; ?></td>
              <td><?php echo $fechaArribo; ?></td>

              <?php
              if ($estadoServicio == 1) {
              ?>
                <td><span class="badge bg-danger">Pendiente</span></td>
              <?php
              } else {
              ?>
                <td><span class="badge bg-success">Finalizado</span></td>
              <?php
              }
              ?>

              <td>
                <div class="text-center">
                  <button class="btn btn-outline-info btn-circle" onclick="MVerServicio(<?php echo $idServicio; ?>)">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn btn-warning btn-circle" onclick="MEditarServicio(<?php echo $idServicio; ?>)">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="btn btn-outline-danger btn-circle" onclick="MEliminarServicio(<?php echo $idServicio; ?>)">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->