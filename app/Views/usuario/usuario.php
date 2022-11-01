<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <div class="card-header ">
      <h3 class="font-weight-light ">Lista de Usuarios</h3>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <table id="DataTableUsuario" class="table table-bordered table-striped">
        <thead class="text-center align-items-center justify-content-center"> 
          <tr >
            <th>ID</th>
            <th>NOMBRE DEL USUARIO</th>
            <th>LOGIN</th>
            <th>ROL</th>
            <th><button class="btn btn-primary" onclick="MNuevoUsuario()" style="width: 80%;"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
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
              <td><?php echo $rol; ?></td>
              <td>
                <div class="text-center">
                  <button class="btn btn-outline-info btn-circle" title="Ver información" onclick="MVerUsuario(<?php echo $idUsu; ?>)">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn btn-warning btn-circle" title="Editar registro" onclick="MEditarUsuario(<?php echo $idUsu; ?>)">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="btn btn-outline-danger btn-circle"  title="Eliminar registro" onclick="MEliminarUsuario(<?php echo $idUsu; ?>)">
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