<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
      <div class="card-header">
        <h3 class="font-weight-light ">Lista de Rutas</h3>
      </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <table id="DataTableCamion" class="table table-bordered table-striped">
        <thead class="text-center align-items-center justify-content-center">
          <tr>
            <th>ID</th>
            <th>RUTA PARTIDA</th>
            <th>RUTA DE LLEGADA</th>
            <th>TOTAL KILOMETROS</th>
            <th>COMBUSTIBLE</th>
            <th> <button class="btn btn-primary" style="width: 80%;" onclick="MNuevoRuta()"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($ruta as $lista) {
            $idRuta = $lista['id_ruta'];
            $rutaIni = $lista['ruta_inicio'];
            $rutaFin = $lista['ruta_fin'];
            $distancia = $lista['kilometros'];
            $combustible = $lista['combustible'];
          ?>
            <tr>
              <td><?php echo $idRuta; ?></td>
              <td><?php echo $rutaIni; ?></td>
              <td><?php echo $rutaFin; ?></td>
              <td><?php echo $distancia; ?></td>
              <td><?php echo $combustible; ?></td>
              <td>
                <div class="text-center">
                  <button class="btn btn-sm btn-outline-info btn-circle" onclick="MVerRuta(<?php echo $idRuta; ?>)">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn btn-sm btn-warning btn-circle" onclick="MEditarRuta(<?php echo $idRuta; ?>)">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="btn btn-sm btn-outline-danger btn-circle" onclick="MEliminarRuta(<?php echo $idRuta; ?>)">
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