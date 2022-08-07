<div class="modal-header bg-primary">
  <h3 class="modal-title"> <b> Informacion de USUARIO </b></h3>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
<table class="table">
  <tr>
    <th>ID usuario</th>
    <td><?php echo $usuario["id_usuario"]?></td>
  </tr>
  <tr>
    <th>Nombre</th>
    <td><?php echo $usuario["nombre_usuario"]?></td>
  </tr>
  <tr>
    <th>Login</th>
    <td><?php echo $usuario["login_usuario"]?></td>
  </tr>
  <tr>
    <th>Rol</th>
    <td><?php echo $usuario["rol"]?></td>
  </tr>
</table>
</div>
<div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
</div>