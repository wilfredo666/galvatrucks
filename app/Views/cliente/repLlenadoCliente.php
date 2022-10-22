<?php
foreach ($servicios as $value) {
    $cod_servicio = $value['cod_servicio'];
    $num_bill = $value['num_bill'];
    $servicioFecha = $value['fecha_inicio_servicio'];
    $ruta_inicio = $value['ruta_inicio'];
    $estadoServ = $value['activo_serv'];
    $ruta_fin = $value['ruta_fin'];

    $fechaServ = date('d-m-Y', strtotime($servicioFecha));
?>
    <tr>
        <td><?php echo $cod_servicio; ?></td>
        <td><?php echo $num_bill; ?></td>
        <td><?php echo $ruta_inicio; ?></td>
        <td><?php echo $ruta_fin; ?></td>
        <?php
        if ($estadoServ == 1) {
        ?>
            <td><span class="badge bg-danger">En progreso</span></td>
        <?php
        } else {
        ?>
            <td><span class="badge bg-success">Finalizado</span></td>
        <?php
        }
        ?>
        <td><?php echo $fechaServ; ?></td>
    </tr>

<?php } ?>