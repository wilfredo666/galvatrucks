<div class="modal-header bg-info">
    <h3 class="modal-title"> <b> ELIMNAR CONDUCTOR </b></h3>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
<h3 class="text-danger">Seguro de eliminar este registro?</h3>
</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-primary" onclick="EliConductor(<?php echo $id;?>)">Confirmar</button>
</div>