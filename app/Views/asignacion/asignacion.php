<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="">
      <div class="card-header">
        <h3 class="font-weight-light ">Lista de Asignaciones</h3>
      </div>
    </div>
  </section>
  <section class="content">

    <div class="container-fluid">
      <table id="DataTableAsignacion" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>CÓDIGO DE ASIGNACIÓN</th>
            <th>FECHA DE ASIGNACIÓN</th>
            <th>CONDUCTOR</th>
            <th>ESTADO</th>
            <th> <button class="btn btn-block btn-primary" onclick="MNuevoAsignacion()"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($asignacion as $lista) {
            $idAsig = $lista['id_asignacion'];
            $nombreAsig = $lista['nombre_asig'];
            $fechaAsig = $lista['fecha_asig'];
            $fechaBaja = $lista['fecha_baja_asig'];
            $placaCamion = $lista['placa'];
            $nomCond = $lista['nombre_cond'];
            $apCond = $lista['apellido_cond'];
            $estado = $lista['activo_asig'];
          ?>
            <tr>
              <td><?php echo $idAsig; ?></td>
              <td><?php echo $nombreAsig; ?></td>
              <td><?php echo $fechaAsig; ?></td>
              <td><?php echo $nomCond . " " . $apCond; ?></td>
              <?php
              if ($estado == 1) {
              ?>
                <td><span class="badge bg-success">Activo</span></td>
              <?php
              } else {
              ?>
                <td><span class="badge bg-danger">Inactivo</span></td>
              <?php
              }
              ?>

              <td>
                <div class="text-center">
                  <button class="btn btn-outline-info btn-circle" onclick="MVerAsignacion(<?php echo $idAsig; ?>)">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn btn-warning btn-circle" onclick="MEditarAsignacion(<?php echo $idAsig; ?>)">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="btn btn-outline-danger btn-circle" onclick="MEliminarAsignacion(<?php echo $idAsig; ?>)">
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