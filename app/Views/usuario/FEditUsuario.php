<div class="modal-header bg-info">
  <h3 class="modal-title"> <b> EDITAR DATOS DEL USUARIO </b></h3>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form id="FEditUsuario">
    <div class="card-body">
      <div class="row">
        <div class="form-group col-md-12">
          <label>Nombre Usuario</label>
          <input type="text" class="form-control" id="nomUsuario" name="nomUsuario" value="<?php echo $usuario["nombre_usuario"];?>">
          <p class="text-danger" id="error-nomUsuario"></p>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label>Login Usuario</label>
          <input type="text" class="form-control" id="loginUsuario" name="loginUsuario" value="<?php echo $usuario["login_usuario"];?>" readonly>
          <p class="text-danger" id="error-loginUsuario"></p>
        </div>

        <div class="form-group col-md-6">
          <label>Rol de Usuario</label>
          <select name="rolUsuario" id="rolUsuario" class="form-control">
            <option value="null">Seleccionar</option>
            <option value="Administrador" <?php if($usuario["rol"]=="Administrador"):?> selected <?php endif;?>>Administrador</option>
            <option value="Conductor" <?php if($usuario["rol"]=="Conductor"):?> selected <?php endif;?>>Conductor</option>
            <option value="Cliente" <?php if($usuario["rol"]=="Cliente"):?> selected <?php endif;?>>Cliente</option>
          </select>
          <p class="text-danger" id="error-rolUsuario"></p>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label>Password</label>
          <input type="password" class="form-control" id="password" name="password" value="<?php echo $usuario["pass_usuario"];?>">
        </div>
        <div class="form-group col-md-6">
          <label>Repetir password</label>
          <input type="password" class="form-control" id="password2" name="password2" value="<?php echo $usuario["pass_usuario"];?>">
          <p class="text-danger" id="error-password"></p>
        </div>
       
      </div>
    </div>
    <!-- /.card-body -->
  </form>

</div>
<div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="button" class="btn btn-primary" onclick="EditUsuario( <?php echo $usuario["id_usuario"];?> )">Guardar</button>
</div>