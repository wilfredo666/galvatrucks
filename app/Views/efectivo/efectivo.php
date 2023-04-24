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
                        <th>CODIGO CTA.</th>
                        <th>DESCRIPCION CTA</th>
                        <th>FECHA DE REGISTRO</th>
                        <th><button class="btn btn-primary" onclick="MNuevaCuenta()" style="width: 80%;"><i class="fas fa-plus-circle"></i> NUEVO </button> </th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($efectivo as $value) {
                        $idEfectivo = $value['id_cuenta_cli'];
                        $codCuenta = $value['cod_cuenta_cli'];
                        $descripcionCuenta = $value['descripcion_cuenta_cli'];
                        $idCliente = $value['nombre_cli']." ".$value['apellido_cli'];
                        $fechaRegistro = $value['fecha_cuenta_cli'];
                    ?>

                        <tr>
                            <td><?php echo $idCliente; ?></td>
                            <td><?php echo $codCuenta; ?></td>
                            <td><?php echo $descripcionCuenta; ?></td>
                            <td><?php echo date('d-m-Y', strtotime($fechaRegistro));?></td>                            
                            <td>
                                <div class="text-center">
                                    <!-- <button class="btn btn-sm btn-outline-info btn-circle" onclick="MVerRuta(<?php   ?>)">
                                            <i class="fas fa-eye"></i>
                                        </button> -->
                                    <button class="btn btn-sm btn-warning btn-circle" onclick="MEditarCuenta(<?php echo $idEfectivo  ?>)">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger btn-circle" onclick="MEliminarCuenta(<?php echo $idEfectivo  ?>)">
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