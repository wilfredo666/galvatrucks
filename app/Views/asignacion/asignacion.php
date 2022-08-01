<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">

  </section>
  <section class="content">

    <div class="container-fluid">
      <table id="DataTableUsuario" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>ASIGNACIÓN</th>
            <th>FECHA DE ASIGNACIÓN</th>
            <th>FECHA DE BAJA ASIGNACIÓN</th>
            <th>CAMION</th>
            <th>PLACA</th>
            <th> <button class="btn btn-block btn-primary"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($asignacion as $lista) {
            $idAsig = $lista['id_asignacion'];
            $nombreAsig = $lista['nombre_asig'];
            $fechaAsig = $lista['fecha_asig'];
            $fechaBaja = $lista['fecha_baja_asig'];
            $camion = $lista['id_camion'];
            $conductor = $lista['id_conductor'];

          ?>
            <tr>
              <td><?php echo $idAsig; ?></td>
              <td><?php echo $nombreAsig; ?></td>
              <td><?php echo $fechaAsig; ?></td>
              <td><?php echo $fechaBaja; ?></td>
              <td><?php echo $camion; ?></td>
              <td><?php echo $conductor; ?></td>
              <td>
                <div>
                  <button class="btn btn-info btn-circle">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn btn-warning btn-circle">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="btn btn-danger btn-circle">
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