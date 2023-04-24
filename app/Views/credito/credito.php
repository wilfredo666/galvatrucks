<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="card-header">
            <h3 class="font-weight-light ">Lista de Cuentas de Clientes</h3>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <table id="DataTable" class="table table-bordered table-striped table-light">
                <thead class="text-center align-items-center justify-content-center">
                    <tr>
                        <th>CLIENTE</th>
                        <th>CODIGO CREDITO</th>
                        <th>CONCEPTO DEP.</th>
                        <th>IMPORTE</th>
                        <th>FECHA DEP.</th>
                        <th><button class="btn btn-primary" onclick="MNuevoCredito()" style="width: 80%;"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($creditoCli as $value) {
                        $id_credito = $value['id_credito'];
                        $nombre_cli = $value['nombre_cli'] . " " . $value['apellido_cli'];
                        $id_cuenta_cli = $value['id_cuenta_cli'];
                        $cod_credito = $value['cod_credito'];
                        $concepto_deposito = $value['concepto_deposito'];
                        $importe_deposito = $value['importe_deposito'];
                        $fecha_deposito = $value['fecha_deposito'];
                    ?>

                        <tr>
                            <td><?php echo $nombre_cli; ?></td>
                            <td><?php echo $cod_credito; ?></td>
                            <td><?php echo $concepto_deposito; ?></td>
                            <td><?php echo $importe_deposito .  " Bs." ?></td>
                            <td><?php echo date('d-m-Y', strtotime($fecha_deposito)); ?></td>
                            <td>
                                <div class="text-center">
                                    <!-- <button class="btn btn-sm btn-outline-info btn-circle" onclick="MVerRuta(<?php   ?>)">
                                            <i class="fas fa-eye"></i>
                                        </button> -->
                                    <button class="btn btn-sm btn-warning btn-circle" onclick="MEditarCredito(<?php echo $id_credito  ?>)">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger btn-circle" onclick="MEliminarCredito(<?php echo $id_credito  ?>)">
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