<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="card-header">
      <h3 class="font-weight-light ">Lista de Servicios</h3>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <table id="DataTableServi" class="table table-bordered table-striped">
        <thead class="text-center align-items-center justify-content-center">
          <tr>
            <th>CÓDIGO SERV</th>
            <th>NOMBRE CLIENTE</th>
            <!--             <th>NAVIERA</th> -->
            <th>NRO BL/BILL</th>
            <th>NRO CONTENEDOR</th>
            <!-- <th>NRO BL/BILL</th> -->
            <th>FECHA ARRIBO</th>
            <th>ESTADO</th>
            <th> <button class="btn btn-primary" style="width: 80%;" onclick="MNuevoServicio()"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($servicio as $lista) {
            $idServicio = $lista['id_servicio'];
            $codServicio = $lista['cod_servicio'];
            $cli = $lista['razon_social_cli'];
            $naviera = $lista['razon_social_emp'];
            $nroBl = $lista['num_bill'];
            $nroCont = $lista['nro_contenedor'];
            $fechaArribo = $lista['fecha_arribo'];
            $estadoServicio = $lista['activo_serv'];

            $fechaArriboContenedor = date('d-m-Y', strtotime($fechaArribo));
          ?>
            <tr>
              <td><?php echo $codServicio; ?></td>
              <td><?php echo $cli; ?></td>
              <td><?php echo $nroBl; ?></td>
              <td><?php echo $nroCont; ?></td>
              
              <td><?php echo $fechaArriboContenedor; ?></td>

              <?php
              if ($estadoServicio == 1) {
              ?>
                <td><span class="badge bg-danger">En progreso</span></td>
              <?php
              } else {
              ?>
                <td><span class="badge bg-success">Finalizado</span></td>
              <?php
              }
              ?>

              <td>
                <div class="text-center">
                  <button class="btn btn-xs btn-outline-info btn-circle" style=" width: 30px;
            height: 30px;
            padding: 6px 0px;
            border-radius: 15px;
            font-size: 12px;
            text-align: center;" title="Ver detalles de Servicio" onclick="MVerServicio(<?php echo $idServicio; ?>)">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn btn-xs btn-warning btn-circle" title="Editar Servicio" onclick="MEditarServicio(<?php echo $idServicio; ?>)">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="btn btn-xs btn-outline-danger btn-circle" title="Eliminar Servicio" onclick="MEliminarServicio(<?php echo $idServicio; ?>)">
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