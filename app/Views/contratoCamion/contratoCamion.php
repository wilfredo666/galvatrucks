<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">

        <div class="container-fluid">
            <table id="DataTableUsuario" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>INICIO DE CONTRATO</th>
                        <th>FIN DE CONTRATO</th>
                        <th>NRO DE CONTRATO</th>
                        <th>PLACA</th>
                        <th>PROPIETARIO DE CAMION</th>
                        <th>OBSERVACIONES</th>
                        <th> <button class="btn btn-block btn-primary"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
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
                    ?>

                    <tr>
                        <td><?php echo $idContrato; ?></td>
                        <td><?php echo $fechaIni; ?></td>
                        <td><?php echo $fechaFin; ?></td>
                        <td><?php echo $numContrato; ?></td>
                        <td><?php echo $placa; ?></td>
                        <td><?php echo $propietario; ?></td>
                        <td><?php echo $observacion; ?></td>
                        <td>
                            <div>
                                <button class="btn btn-info btn-circle">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-warning btn-circle">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->