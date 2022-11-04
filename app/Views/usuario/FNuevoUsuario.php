<div class="encabezado modal-header">
  <h4 class="modal-title"> REGISTRO NUEVO USUARIO </h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form id="FNuevoUsuario">
    <div class="card-body">
      <div class="row">
        <div class="form-group col-md-12">
          <label>Nombre Usuario</label>
          <input type="text" class="form-control" id="nomUsuario" name="nomUsuario">
          <p class="text-danger" id="error-nomUsuario"></p>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label>Login Usuario</label>
          <input type="text" class="form-control" id="loginUsuario" name="loginUsuario">
          <p class="text-danger" id="error-loginUsuario"></p>
        </div>

        <div class="form-group col-md-6">
          <label>Rol de Usuario</label>
          <select name="rolUsuario" id="rolUsuario" class="form-control">
            <option value="null">Seleccionar</option>
            <option value="Administrador">Administrador</option>
            <option value="Auxiliar">Auxiliar</option>
            <option value="Cliente">Cliente</option>
          </select>
          <p class="text-danger" id="error-rolUsuario"></p>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label>Password</label>
          <input type="password" class="form-control" id="password" name="password">
          <p class="text-danger" id="error-pass1"></p>
        </div>
        <div class="form-group col-md-6">
          <label>Repetir password</label>
          <input type="password" class="form-control" id="password2" name="password2">
          <p class="text-danger" id="error-password"></p>
        </div>
       
      </div>
    </div>
    <!-- /.card-body -->
  </form>

</div>
<div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="button" class="btn btn-primary" onclick="RegUsuario()">Guardar</button>
</div>