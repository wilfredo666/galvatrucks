<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="card-header">
      <h3 class="font-weight-light ">Lista de Clientes </h3>
    </div>
  </section>
  <section class="content">

    <div class="container-fluid">
      <table id="DataTableCliente" class="table table-bordered table-striped">
        <thead class="text-center align-items-center justify-content-center">
          <tr>
            <th>ID</th>
            <th>RAZON SOCIAL</th>
            <th>N.I.T.</th>
<!--             <th>CONTACTO</th> -->
            <th>TIPO DE CLIENTE</th>
            <th>LOGO</th>
            <th> <button class="btn bg-blue" style="width: 80%;" onclick="MNuevoCliente()"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($cliente as $lista) {
            $idCli = $lista['id_cliente'];
            $nombre = $lista['nombre_cli'];
            $apellidos = $lista['apellido_cli'];
            $ciNit = $lista['ci_nit_cli'];
            $fechaNac = $lista['fecha_nac_cli'];
            $estadoCivil = $lista['estado_civil_cli'];
            $cuenta1 = $lista['num_cuenta_cli'];
            $cuenta2 = $lista['num_cuenta2_cli'];
            $razonSocial = $lista['razon_social_cli'];
            $direccion = $lista['direccion_cli'];
            $email = $lista['email_cli'];
            $contacto = $lista['contacto_cli'];
            $personaContacto = $lista['persona_contacto_cli'];
            $tipoCli = $lista['tipo_cli'];
            $imagen = $lista['imagen_cli'];

          ?>
            <tr>
              <td><?php echo $idCli; ?></td>
              <td><?php echo $razonSocial; ?></td>
              <td><?php echo $ciNit; ?></td>

           <!--    <td><?php echo $contacto; ?></td> -->

              <td><?php echo $tipoCli; ?></td>
              <?php if ($imagen == "") {
              ?>
                <td><img class="img1" src="<?php echo base_url(); ?>/assest/img/conductor/img-conductor-default.png" style="width:70px;"></td>
              <?php
              } else {
              ?>
                <td><img class="img1" src="<?php echo base_url(); ?>/assest/img/cliente/<?php echo $imagen; ?>" style="width:70px;"></td>
              <?php
              }
              ?>

              <td class="text-center">
                <div>
                  <button class="btn btn-sm btn-outline-info btn-circle" onclick="MVerCliente(<?php echo $idCli; ?>)">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn btn-sm  btn-warning btn-circle" onclick="MEditarCliente(<?php echo $idCli; ?>)">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="btn btn-sm btn-outline-danger btn-circle" onclick="MEliminarCliente(<?php echo $idCli; ?>)">
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