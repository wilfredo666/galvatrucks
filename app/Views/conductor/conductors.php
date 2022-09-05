<div class="datosConductor">
    <table>
        <th>
            <tr>
                <td>Cod Servicio</td>
                <td>Lugar PARTIDA</td>
                <td>Destino</td>
            </tr>
        </th>
        <tr>
            <?php
            foreach ($servicios as $ser) {

                $codigo = $ser["cod_servicio"];
                $fecha = $ser["fecha_inicio_servicio"];
            ?>

                <td><?php echo ($codigo) ?></td>
                <td><?php echo ($fecha) ?></td>
            <?php
            } ?>
        </tr>
    </table>
</div>
<?php


?>