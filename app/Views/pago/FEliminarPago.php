<div class="modal-header bg-danger">
    <h4 class="modal-title" class="glyphicon glyphicon-trash"> <b> ELIMINAR PAGO</b> <i class="fas fa-trash"></i></h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">

    <h5 class="text-dange font-italic"> ¿Está seguro de eliminar este pago?</h5>

</div>

<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-danger" onclick="EliPago(<?php echo $pagosId["id_pago"] ?>)">Confirmar</button>
</div>