<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="card-header">
      <h3 class="font-weight-light ">Lista de Camiones</h3>
    </div>
  </section>
  <section class="content">

    <div class="container-fluid">
      <table id="DataTableCamion" class="table table-bordered table-striped">
        <thead class="text-center align-items-center justify-content-center">
          <tr>
            <th>ID</th>
            <th>PLACA</th>
            <th>CLASE DE CAMIÓN</th>
            <th>CAPACIDAD DE CARGA</th>
            <th>MARCA DEL CAMIÓN</th>
            <th> <button class="btn  btn-primary" style="width: 80%;" onclick="MNuevoCamion()"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($camion as $lista) {
            $idCam = $lista['id_camion'];
            $placa = $lista['placa'];
            $clase = $lista['clase'];
            $ejes = $lista['ejes'];
            $capacidad = $lista['capacidad'];
            $chasis = $lista['chasis'];
            $marca = $lista['marca'];
            $color = $lista['color'];
          ?>
            <tr>
              <td><?php echo $idCam; ?></td>
              <td><?php echo $placa; ?></td>
              <td><?php echo $clase; ?></td>
              <td><?php echo $capacidad; ?></td>
              <td><?php echo $marca; ?></td>
              <td>
                <div class="text-center">
                  <button class="btn btn-sm btn-outline-info btn-circle" onclick="MVerCamion(<?php echo $idCam; ?>)">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn btn-sm btn-warning btn-circle" onclick="MEditarCamion(<?php echo $idCam; ?>)">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="btn btn-sm btn-outline-danger btn-circle" onclick="MEliminarCamion(<?php echo $idCam; ?>)">
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