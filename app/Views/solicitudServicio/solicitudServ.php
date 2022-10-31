<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <div class="card-header">
            <h3 class="font-weight-light ">Lista de mis solicitudes</h3>
        </div>

    </section>

    <section class="content">

        <div class="container-fluid">
            <table id="DataTableSolicitud" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAVIERA</th>
                        <th>NRO BILL/BL</th>
                        <th>FECHA SOLICITUD</th>
                        <th>OBSERVACIONES</th>
                        <th>ESTADO</th>
                        <th> <button class="btn btn-block btn-primary" onclick="MNuevoSolicitud()"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($solicitud as $soli) {
                        $idSolicitud = $soli['id_solicitud'];
                        $empMaritima = $soli['id_emp_maritima'];
                        $empMarit = $soli['razon_social_emp'];
                        $nroBill = $soli['numero_bill'];
                        $nroCont = $soli['numero_cont'];
                        $tamCont = $soli['tam_cont'];
                        $pesoCont = $soli['peso_cont'];
                        $fechaSolicitud = $soli['fecha_solicitud'];
                        $doc1 = $soli['doc_bill'];
                        $doc2 = $soli['doc_factura'];
                        $doc3 = $soli['doc_lista_empaque'];
                        $doc4 = $soli['doc_otros'];
                        $observaciones = $soli['observaciones'];
                        $estadoSolicitud = $soli['activo_solicitud'];
                    ?>
                        <tr>
                            <td><?php echo $idSolicitud; ?></td>
                            <td><?php echo $empMarit; ?></td>
                            <td><?php echo $nroBill; ?></td>
                            <td><?php echo $fechaSolicitud; ?></td>

                            <td><?php echo $observaciones; ?></td>

                            <?php
                            if ($estadoSolicitud == "pendiente") {
                            ?>
                                <td><span class="badge badge-pill badge-warning">Pendiente</span></td>
                            <?php
                            } elseif ($estadoSolicitud == "rechazado") {
                            ?>
                                <td><span class="badge badge-pill badge-danger">Rechazado</span></td>
                            <?php
                            } else {
                            ?>
                                <td><span class="badge badge-pill badge-success">Aceptado</span></td>
                            <?php } ?>

                            <td class="text-center">
                                <div>
                                    <!-- PARA EL BOTON EDITAR-->
                                    <?php
                                    if ($estadoSolicitud == "aceptado") {
                                    ?>
                                        <button class="btn btn-sm btn-warning btn-circle" onclick="MEditarSolicitud(<?php echo $idSolicitud; ?>)" title="Esta opción no esta habilitada." disabled>
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    <?php
                                    } else {
                                    ?>
                                        <button class="btn btn-sm btn-warning btn-circle" onclick="MEditarSolicitud(<?php echo $idSolicitud; ?>)" title="Editar Solicitud">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    <?php
                                    }
                                    ?>
                                    <!-- PARA EL BOTON ELIMINAR -->
                                    <?php
                                    if ($estadoSolicitud == "rechazado" || $estadoSolicitud == "aceptado") {
                                    ?>
                                        <button class="btn btn-sm btn-danger btn-circle" onclick="MEliminarSolicitud(<?php echo $idSolicitud; ?>)" title="Esta opción no esta habilitada." disabled>
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    <?php
                                    } else {
                                    ?>
                                        <button class="btn btn-sm btn-danger btn-circle" onclick="MEliminarSolicitud(<?php echo $idSolicitud; ?>)" title="Eliminar Solicitud">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    <?php
                                    }
                                    ?>
                                    
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