<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="card-header">
            <h3 class="font-weight-light ">Lista de Pagos realizados</h3>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <table id="DataTableCamion" class="table table-bordered table-striped">
                <thead class="text-center align-items-center justify-content-center">
                    <tr>
                        <th>BILL OFF LADING</th>
                        <th>CLIENTE</th>
                        <th>CONCEPTO</th>
                        <th>MONTO</th>
                        <!-- <th>MONEDA</th> -->
                        <th>FECHA DE PAGO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <?php foreach ($pagos as $pag) {
                            $idPago = $pag['id_pago'];
                            $concepto = $pag['concepto'];
                            $monto = $pag['monto'];
                            /* $tipo_moneda = $pag['tipo_moneda']; */
                            $fecha_pago = $pag['fecha_pago'];
                            $id_servicio = $pag['id_servicio'];
                            $num_bill = $pag['num_bill'];
                        ?>
                        
                            <tr>
                                <td><?php echo $num_bill; ?></td>
                                <td><?php echo $id_servicio; ?></td>
                                <td><?php echo $concepto; ?></td>
                                <td><?php echo $monto; ?></td>
                                <td><?php $tipo_moneda; ?></td>
                                <td><?php echo date('d-m-Y', strtotime($fecha_pago)); ?></td>
                                <td>
                                    <div class="text-center">
                                        <!-- <button class="btn btn-sm btn-outline-info btn-circle" onclick="MVerRuta(<?php   ?>)">
                                            <i class="fas fa-eye"></i>
                                        </button> -->
                                        <button class="btn btn-sm btn-warning btn-circle" onclick="MEditarRuta(<?php  ?>)">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger btn-circle" onclick="MEliminarRuta(<?php  ?>)">
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