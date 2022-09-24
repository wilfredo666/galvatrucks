<?php
foreach ($EstadoSolicitud as $value) {
    $idServ = $value['id_solicitud'];
    $razonSocialCli = $value['razon_social_cli'];
    $razonSocialEmp = $value['razon_social_emp'];
    $fechaSoli = $value['fecha_solicitud'];
    $docBill = $value['doc_bill'];
    $docFactura = $value['doc_factura'];
    $docListaEmpaque = $value['doc_lista_empaque'];
    $docOtros = $value['doc_otros'];
    $observaciones = $value['observaciones'];
    $estadoSoli = $value['activo_solicitud'];
?>
    <tr>
        <td><?php echo $idServ; ?></td>
        <td><?php echo $razonSocialCli; ?></td>
        <td><?php echo $razonSocialEmp; ?></td>
        <td><?php echo $fechaSoli; ?></td>
        <td><?php echo $observaciones; ?></td>
        <?php
        if ($estadoSoli == "pendiente") {
        ?>
            <td><span class="badge badge-pill badge-warning">Pendiente</span></td>
        <?php
        } elseif ($estadoSoli == "rechazado") {
        ?>
            <td><span class="badge badge-pill badge-danger">Rechazado</span></td>
        <?php
        } else {
        ?>
            <td><span class="badge badge-pill badge-success">Aceptado</span></td>
        <?php }
        ?>
        <td>
            <div class="text-center">
                <button class="btn btn-info btn-circle" title="Ver documentos" onclick="MVerDocumento()">
                <i class="fas fa-arrow-alt-circle-down"></i> Ver doc.
                </button>
                <button class="btn btn-warning btn-circle" onclick="MEditarSolicitud()">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="btn btn-outline-danger btn-circle" onclick="MEliminarSolicitud()">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </div>
        </td>
    </tr>

<?php
} ?>