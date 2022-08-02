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
            <th>NOMBRE DEL USUARIO</th>
            <th>LOGIN</th>
            <th>CONTRASEÑA</th>
            <th>ROL</th>
            <th><button class="btn btn-block btn-primary" onclick="MNuevoUsuario()"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($usuario as $lista) {
            $idUsu = $lista['id_usuario'];
            $nombre = $lista['nombre_usuario'];
            $login = $lista['login_usuario'];
            $pass = $lista['pass_usuario'];
            $rol = $lista['rol'];

          ?>
            <tr>
              <td><?php echo $idUsu; ?></td>
              <td><?php echo $nombre; ?></td>
              <td><?php echo $login; ?></td>
              <td><?php echo $pass; ?></td>
              <td><?php echo $rol; ?></td>
              <td>
                <div class="text-center">
                  <button class="btn btn-info btn-circle" onclick="MVerUsuario()">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn btn-warning btn-circle" onclick="MEditarUsuario()">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="btn btn-danger btn-circle" onclick="MEliminarUsuario()">
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