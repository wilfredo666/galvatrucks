<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">

  </section>
  <section class="content">

    <div class="container-fluid">
      <table id="DataTableEmpresaMaritima" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>RAZON SOCIAL</th>
            <th>NIT </th>

            <th>CORREO</th>
            <th>CONTACTO</th>
            <th> <button class="btn btn-block btn-primary" onclick="MNuevoEmpMaritima()"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($empresaMaritima as $lista) {
            $idEmp = $lista['id_emp_maritima'];
            $razonSocial = $lista['razon_social_emp'];
            $nit = $lista['nit_emp'];
            $direccion = $lista['direccion_emp'];
            $correo = $lista['correo_emp'];
            $contacto = $lista['contacto_emp'];

          ?>
            <tr>
              <td><?php echo $idEmp; ?></td>
              <td><?php echo $razonSocial; ?></td>
              <td><?php echo $nit; ?></td>

              <td><?php echo $correo; ?></td>
              <td><?php echo $contacto; ?></td>
              <td>
                <div class="text-center">
                  <button class="btn btn-info btn-circle" onclick="MVerEmpMaritima(<?php echo $idEmp; ?>)">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn btn-warning btn-circle" onclick="MEditarEmpMaritima(<?php echo $idEmp; ?>)">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="btn btn-danger btn-circle" onclick="MEliminarEmpMaritima(<?php echo $idEmp; ?>)">
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