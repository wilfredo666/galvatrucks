<div class="modal-header bg-danger">
  <h4 class="modal-title" class="glyphicon glyphicon-trash"> <b> ELIMINAR USUARIO </b> <i class="fas fa-trash"></i></h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">

<h4 class="text-dange font-italic"> ¿Está seguro de eliminar este registro?</h4>

</div>
<div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
  <button type="button" class="btn btn-danger" onclick="EliUsuario(<?php echo $id;?>)">Confirmar</button>
</div>