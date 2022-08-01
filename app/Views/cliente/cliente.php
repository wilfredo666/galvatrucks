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
            <th>NOMBRE CLIENTE</th>
            <th>APELLIDOS</th>
            <th>CI - N.I.T.</th>
            <th>FECHA NACIMIENTO</th>
            <th>ESTADO CIVIL</th>
            <th>CUENTA BANCARIA 1</th>
            <th>CUENTA BANCARIA 2</th>
            <th>RAZON SOCIAL</th>
            <th>DIRECCIÓN</th>
            <th>CORREO ELECTRÓNICO</th>
            <th>CONTACTO</th>
            <th>PERSONA CONTACTO - CELULAR</th>
            <th>TIPO DE CLIENTE</th>
            <th>IMAGEN</th>
            <th> <button class="btn btn-block btn-primary"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
          </tr>
        </thead>
        <tbody>
       <?php foreach($cliente as $lista){
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
            <td><?php echo $idCli;?></td>
            <td><?php echo $nombre;?></td>
            <td><?php echo $apellidos;?></td>
            <td><?php echo $ciNit;?></td>
            <td><?php echo $fechaNac;?></td>
            <td><?php echo $estadoCivil;?></td>
            <td><?php echo $cuenta1;?></td>
            <td><?php echo $cuenta2;?></td>
            <td><?php echo $razonSocial;?></td>
            <td><?php echo $direccion;?></td>
            <td><?php echo $email;?></td>
            <td><?php echo $contacto;?></td>
            <td><?php echo $personaContacto;?></td>
            <td><?php echo $tipoCli;?></td>
            <td><?php echo $imagen;?></td>
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

        <?php }?>
        </tbody>
      </table>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->