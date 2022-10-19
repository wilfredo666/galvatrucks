<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="card-header">
            <h3 class="font-weight-light ">Lista de Contrato de Camiones</h3>
        </div>
    </section>
    <section class="content">

        <div class="container-fluid">
            <table id="DataTableContratoCamion" class="table table-bordered table-striped">
                <thead class="text-center align-items-center justify-content-center">
                    <tr>
                        <th>ID</th>
                        <th>CÓD. DE CONTRATO</th>
                        <th>INICIO DE CONTRATO</th>

                        <th>PLACA</th>
                        <th>PROPIETARIO DE CAMION</th>

                        <th> <button class="btn btn-primary" style="width: 80%;" onclick="MNuevoContratoCam()"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($contratoCamion as $lista) {
                        $idContrato = $lista['id_contrato_camion'];
                        $fechaIni = $lista['fecha_inicio_contrato'];
                        $fechaFin = $lista['fecha_fin_contrato'];
                        $numContrato = $lista['num_contrato'];
                        $placa = $lista['placa'];
                        $propietario = $lista['propietario_camion'];
                        $observacion = $lista['observacion'];

                        $fechaInicio = date('d-m-Y', strtotime($fechaIni));
                        $fechaFinal = date('d-m-Y', strtotime($fechaFin));
                    ?>

                        <tr>
                            <td><?php echo $idContrato; ?></td>
                            <td><?php echo $numContrato; ?></td>
                            <td><?php echo $fechaInicio; ?></td>
                            <td><?php echo $placa; ?></td>
                            <td><?php echo $propietario; ?></td>

                            <td>
                                <div class="text-center">
                                    <button class="btn btn-sm btn-outline-info btn-circle" onclick="MVerContratoCam(<?php echo $idContrato; ?>)">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning btn-circle" onclick="MEditarContratoCam(<?php echo $idContrato; ?>)">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger btn-circle" onclick="MEliminarContratoCam(<?php echo $idContrato; ?>)">
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