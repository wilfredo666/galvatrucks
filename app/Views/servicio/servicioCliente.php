<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="card-header">
      <h3 class="font-weight-light ">Lista de Mis Servicios</h3>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <table id="DataTableServi" class="table table-bordered table-striped">
        <thead class="text-center align-items-center justify-content-center">
          <tr>
            <th>NAVIERA</th>
            <th>NRO BL/BILL</th>
            <th>NRO CONTENEDOR</th>
            <!-- <th>FECHA INICIO SERVICIO</th> -->
            <th>ORIGEN MERCADERIA</th>
            <th>DESTINO MERCADERIA</th>
            <th>FECHA ARRIBO</th>
            <th>ESTADO</th>
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
            $fechaIni = $lista['fecha_inicio_servicio'];
            $fechaInicio = date('d-m-Y', strtotime($fechaIni));

            $fechaArribo = $lista['fecha_arribo'];
            $estadoServicio = $lista['activo_serv'];
            $origen_mercaderia = $lista['origen_mercaderia'];
            $destino_mercaderia = $lista['destino_mercaderia'];

            $fechaArriboContenedor = date('d-m-Y', strtotime($fechaArribo));
          ?>
            <tr>
              <td><?php echo $naviera; ?></td>
              <td><?php echo $nroBl; ?></td>
              <td><?php echo $nroCont; ?></td>
              <!-- <td><php echo $fechaInicio; ?></td> -->
              <td><?php echo $origen_mercaderia; ?></td>
              <td><?php echo $destino_mercaderia; ?></td>
              
              
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
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->