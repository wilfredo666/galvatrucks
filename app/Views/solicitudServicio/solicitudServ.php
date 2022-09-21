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
                        $doc1 = $soli['doc1'];
                        $doc2 = $soli['doc2'];
                        $doc3 = $soli['doc3'];
                        $doc4 = $soli['doc4'];
                        $observaciones = $soli['observaciones'];
                        $estadoSolicitud = $soli['activo_solicitud'];
                    ?>
                        <tr>
                            <td><?php echo $idSolicitud; ?></td>
                            <td><?php echo $empMarit; ?></td>
                            <td><?php echo $nroBill; ?></td>

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
                                    <button class="btn btn-outline-info btn-circle" onclick="MVerSolicitud(<?php echo $idSolicitud; ?>)">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-warning btn-circle" onclick="MEditarSolicitud(<?php echo $idSolicitud; ?>)">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-outline-danger btn-circle" onclick="MEliminarSolicitud(<?php echo $idSolicitud; ?>)">
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