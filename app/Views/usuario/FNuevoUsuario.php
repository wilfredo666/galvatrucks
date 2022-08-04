<div class="modal-header bg-primary">
  <h3 class="modal-title"> <b> REGISTRO NUEVO USUARIO </b></h3>
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
        </div>
        <div class="form-group col-md-6">
          <label>Login Usuario</label>
          <input type="text" class="form-control" id="loginUsuario" name="loginUsuario">
        </div>
        <div class="form-group col-md-6">
          <label>Rol de Usuario</label>
          <select name="rolUsuario" id="rolUsuario" class="form-control">
            <option value="null">Seleccionar</option>
            <option value="Administrador">Administrador</option>
            <option value="Conductor">Conductor</option>
            <option value="Cliente">Cliente</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label>Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group col-md-6">
          <label>Repetir password</label>
          <input type="password" class="form-control" id="password2" name="password2">
        </div>
        <p class="text-danger" id="error-password"></p>
      </div>
    </div>
    <!-- /.card-body -->
  </form>

</div>
<div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="button" class="btn btn-primary" onclick="RegUsuario()">Guardar</button>
</div>