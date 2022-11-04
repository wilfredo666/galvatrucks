<?php
foreach ($servicios as $value) {
    /* $cod_servicio = $value['cod_servicio']; */
    $num_bill = $value['num_bill'];
    $nro_contenedor = $value['nro_contenedor'];
    $servicioFecha = $value['fecha_inicio_servicio'];
    $origenMerc = $value['origen_mercaderia'];
    $DestinoMerc = $value['destino_mercaderia'];
    $estadoServ = $value['activo_serv'];

    $fechaServ = date('d-m-Y', strtotime($servicioFecha));
?>
    <tr>
        <td><?php echo $num_bill; ?></td>
        <td><?php echo $nro_contenedor; ?></td>
        <td><?php echo $origenMerc; ?></td>
        <td><?php echo $DestinoMerc; ?></td>
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
<script>
    $(function () {
    $('#Tabla3').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "language": {
    "zeroRecords": "No se encontraron resultados",
    "emptyTable": "Ningún dato disponible en esta tabla",
    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar:",
    "infoThousands": ",",
    "loadingRecords": "Cargando...",
    "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
    },
    "aria": {
        "sortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad",
        "collection": "Colección",
        "colvisRestore": "Restaurar visibilidad",
        "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
        "copySuccess": {
            "1": "Copiada 1 fila al portapapeles",
            "_": "Copiadas %ds fila al portapapeles"
        },
        "copyTitle": "Copiar al portapapeles",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Mostrar todas las filas",
            "_": "Mostrar %d filas"
        },
        "pdf": "PDF",
        "print": "Imprimir",
        "renameState": "Cambiar nombre",
        "updateState": "Actualizar",
        "createState": "Crear Estado",
        "removeAllStates": "Remover Estados",
        "removeState": "Remover",
        "savedStates": "Estados Guardados",
        "stateRestore": "Estado %d"
    },
      
    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
    "stateRestore": {
        "creationModal": {
            "button": "Crear",
            "name": "Nombre:",
            "order": "Clasificación",
            "paging": "Paginación",
            "search": "Busqueda",
            "select": "Seleccionar",
            "columns": {
                "search": "Búsqueda de Columna",
                "visible": "Visibilidad de Columna"
            },
            "title": "Crear Nuevo Estado",
            "toggleLabel": "Incluir:"
        },
        
    }
} 
}).buttons().container().appendTo('#Tabla3_wrapper .col-md-6:eq(0)');
  });
</script>