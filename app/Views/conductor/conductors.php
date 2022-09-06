<?php
foreach ($servicios as $value) {
  $cod_servicio = $value['cod_servicio'];
  $num_bill = $value['num_bill'];
  $servicioFecha = $value['fecha_inicio_servicio'];
  $ruta_inicio = $value['ruta_inicio'];
  $ruta_fin = $value['ruta_fin'];
?>
<tr>
  <td><?php echo $cod_servicio; ?></td>
  <td><?php echo $num_bill; ?></td>
  <td><?php echo $ruta_inicio; ?></td>
  <td><?php echo $ruta_fin; ?></td>
  <td><?php echo $servicioFecha; ?></td>
</tr>

<?php } ?>