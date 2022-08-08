<div class="content-wrapper">
  <section class="content-header">

  </section>
  <section class="content">

    <div class="container-fluid">
      <table id="DataTableConductor" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>NOMBRES</th>
            <th>APELLIDOS</th>
            <th> C.I.</th>
            <th>CAT. LICENCIA</th>
            <th>CONTACTO</th>
            <th>IMAGEN</th>
            <th><button class="btn btn-block btn-primary" onclick="MNuevoConductor()"><i class="fas fa-plus-circle"></i> NUEVO</button></th>
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
            <td><?php echo  $telefono; ?></td>
            <?php if($imagenCond==""){
            ?>
            <td><img src="<?php echo base_url();?>/assest/img/conductor/img-conductor-default.png" style="width:70px;"></td>
            <?php
          }else{
            ?>
            <td><img src="<?php echo base_url();?>/assest/img/conductor/<?php echo $imagenCond;?>" style="width:70px;"></td>
            <?php
          }
            ?>

            <td class="text-center">
              <div>
                <button class="btn btn-info btn-circle" onclick="MVerConductor(<?php echo  $idCond; ?>)">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="btn btn-warning btn-circle" onclick="MEditarConductor(<?php echo  $idCond; ?>)">
                  <i class="fas fa-edit"></i>
                </button>
                <button class="btn btn-danger btn-circle" onclick="MEliminarConductor(<?php echo  $idCond; ?>)">
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