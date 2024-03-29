<div class="content-wrapper">
  <section class="content-header">
    <div class="card-header">
      <h3 class="font-weight-light ">Lista de Conductores</h3>
    </div>
  </section>
  <section class="content">

    <div class="container-fluid">
      <table id="DataTableConductor" class="table table-bordered table-striped">
        <thead class="text-center align-items-center justify-content-center">
          <tr>
            <th>ID</th>
            <th>NOMBRES</th>
            <th>APELLIDOS</th>
            <th> C.I.</th>
            <th>CAT. LICENCIA</th>
            
            <th>IMAGEN</th>
            <th><button class="btn btn-primary" style="width: 80%;" onclick="MNuevoConductor()"><i class="fas fa-plus-circle"></i> NUEVO</button></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($conductor as $lista) {
            $idCond = $lista['id_conductor'];
            $nomCond = $lista['nombre_cond'];
            $apellidoCond = $lista['apellido_cond'];
            $ciCond = $lista['ci_cond'];
            $categoriaCond = $lista['tipo_licencia'];
            $fechaNac = $lista['fecha_nac_cond'];
            $direccionCond = $lista['direccion_cond'];
            $email = $lista['email_cond'];
            $telefono = $lista['contacto_cond'];
            $persContacto = $lista['persona_contacto_cond'];
            $estadoCivil = $lista['estado_civil_cond'];
            $cuentaBanc1 = $lista['num_cuenta_cond'];
            $cuentaBanc2 = $lista['num_cuenta2_cond'];
            $imagenCond = $lista['imagen_cond'];

          ?>
            <tr>
              <td><?php echo  $idCond; ?></td>
              <td><?php echo  $nomCond; ?></td>
              <td><?php echo  $apellidoCond; ?></td>
              <td><?php echo  $ciCond; ?></td>
              <td><?php echo  $categoriaCond; ?></td>
              
              <?php if ($imagenCond == "") {
              ?>
                <td><img class="img1"  src="<?php echo base_url(); ?>/assest/img/conductor/img-conductor-default.png"></td>
              <?php
              } else {
              ?>
                <td class="text-center align-items-center justify-content-center"><img class="img1" src="<?php echo base_url(); ?>/assest/img/conductor/<?php echo $imagenCond; ?>" ></td>
              <?php
              }
              ?>

              <td class="text-center">
                <div>

                  <button class="btn btn-sm btn-outline-info btn-circle" title=" Ver registro" onclick="MVerConductor(<?php echo  $idCond; ?>)">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn btn-sm  btn-warning btn-circle" title="Editar registro" onclick="MEditarConductor(<?php echo  $idCond; ?>)">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="btn btn-sm  btn-outline-danger btn-circle" title="Eliminar registro" onclick="MEliminarConductor(<?php echo  $idCond; ?>)">
                    <i class="fas fa-trash-alt"></i>
                  </button>


                  <!-- Custom Tabs -->


                 <!--  <ul class="nav nav-pills ml-auto p-2 col-md-12 ">

                    <li class="nav-item dropdown ">
                      <a class="nav-link dropdown-toggle btn-info" data-toggle="dropdown" href="#" style="color: #fff;">
                        Acción<span class="caret"></span>
                      </a>
                      <div class="dropdown-menu ">
                        <button class="btn btn-info btn-circle dropdown-item" tabindex="-1" onclick="MVerConductor(<?php echo  $idCond; ?>)">
                          <i class="fas fa-eye"></i> Ver
                        </button>
                        <button class="btn btn-warning btn-circle dropdown-item" tabindex="-1" onclick="MEditarConductor(<?php echo  $idCond; ?>)">
                          <i class="fas fa-edit"></i> Editar
                        </button>
                        <button class="btn btn-danger btn-circle dropdown-item" tabindex="-1" onclick="MEliminarConductor(<?php echo  $idCond; ?>)">
                          <i class="fas fa-trash-alt"></i> Eliminar
                        </button>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item " tabindex="-1" href="#">Servicios Realizados</a>
                      </div>
                    </li>
                  </ul> -->


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