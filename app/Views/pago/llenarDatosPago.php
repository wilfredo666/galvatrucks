<?php
foreach ($busBill as $bill) {
    $id_servicio = $bill["id_servicio"];
    $num_bill = $bill["num_bill"];
    $cliente = $bill["razon_social_cli"];
    $fecha = $bill["fecha_arribo"];
    $naviera = $bill["razon_social_emp"];
    $origen_mercaderia = $bill["origen_mercaderia"];
    $destino_mercaderia = $bill["destino_mercaderia"];
    /* $fecha = $bill["fecha_arribo"]; */
}
?>

<div class="container col-md-12">
    <div class="row">
        <div class="form-group col-md-3 col-sm-10 ">
            <label>Nro Bill of Lading</label>
            <input type="text" class="form-control" id="nroBill" name="nroBill" placeholder="Ingrese NRO de BILL/BL" style="text-transform: uppercase;" value="<?php echo $num_bill ?>">
            <span class="text-danger chartjs-render-monitor" id="error-bill"></span>
        </div>
        <div class="form-group col-md-1 col-sm-2">
            <label class="font-weight-light">Buscar BL</label>
            <button type="button" class="btn btn-outline-warning form-control" style="width: 60px ;" id="busqueda" name="busqueda" onclick="buscarBill()"><i class="fas fa-search"></i></button>
        </div>
        <div class="form-group col-md-5">
            <label>Cliente</label>
            <input type="text" class="form-control" id="nomCliente" name="nomCliente" placeholder="" value="<?php echo $cliente ?>" readonly>
        </div>
        <div class="form-group col-md-3" id="fecha">
            <label>Fecha de Arribo</label>
            <input type="date" class="form-control" id="fechaArribo" name="fechaArribo" placeholder="" value="<?php echo $fecha ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <label>Naviera</label>
            <input type="text" class="form-control" id="nomNaviera" name="nomNaviera" placeholder="" value="<?php echo $naviera ?>" readonly>
        </div>
        <div class="form-group col-md-4">
            <label>Origen Mercadería</label>
            <input type="text" class="form-control" id="origenMerc" name="origenMerc" value="<?php echo $origen_mercaderia ?>" readonly>
        </div>
        <div class="form-group col-md-4">
            <label>Destino Mercadería</label>
            <input type="text" class="form-control" id="destinoMerc" name="destinoMerc" value="<?php echo $destino_mercaderia ?>" readonly>
        </div>
        <input type="hidden" class="form-control" id="idServ" name="idServ" value="<?php echo $id_servicio ?>">
    </div>
</div>
<div class="time-label mb-2">
    <!-- <span style="background-color: #f4f6f9;">Añadir Pago</span> -->
    <button class="btn btn-success btn-circle ml-1" style="width: 150px;" onclick="FAnadirPago(<?php echo  $id_servicio ?>);"> Añadir Pago
        <i class="fas fa-plus-square"> </i>
    </button>
</div>


<section class="content">
    <div class="container-fluid">
        <table id="Tabla2" class="table table-bordered table-striped">
            <thead class="text-center align-items-center justify-content-center bg-dark">
                <tr>
                    <th>CONCEPTO</th>
                    <th>MONTO PAGADO</th>
                    <th>FECHA DE PAGO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <div class="container-llenado">

                    <?php
                    foreach ($pagosBill as $bill) {
                        $id_pago = $bill["id_pago"];
                        $concepto = $bill['concepto'];
                        $monto = $bill['monto'];
                        /* $tipo_moneda = $bill['tipo_moneda']; */
                        $fecha_pago = $bill['fecha_pago'];
                        $id_servicio = $bill['id_servicio'];

                        $fechaPago = date('d-m-Y', strtotime($fecha_pago));
                    ?>
                        <tr>
                            <td><?php echo $concepto; ?></td>
                            <td class="text-center"><?php echo $monto . " Bs."; ?></td>
                          
                            <td class="text-center"><?php echo $fechaPago; ?></td>
                            <td  class="text-center align-items-center justify-content-center">
                                <div class="col-md-2 mt-1  text-center" role="group">
                                    <dt></dt>
                                    <button id="btnGroupDrop" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Acciones
                                    </button>
                                    <div class="dropdown-menu " aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item btn " onclick="MEditarPago(<?php echo $id_pago ?>)">Editar</a>
                                        <a class="dropdown-item btn " onclick="MEliminarPago(<?php echo $id_pago ?>)">Eliminar</a>
                                    </div>
                                </div>
                            </td>

                        </tr>

                    <?php } ?>

                </div>
            </tbody>
        </table>
    </div>
</section>
<script>
    $(function () {
    $('#Tabla2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "language": {
    "processing": "Procesando...",
    "lengthMenu": "Mostrar _MENU_ registros",
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
    "autoFill": {
        "cancel": "Cancelar",
        "fill": "Rellene todas las celdas con <i>%d<\/i>",
        "fillHorizontal": "Rellenar celdas horizontalmente",
        "fillVertical": "Rellenar celdas verticalmentemente"
    },
    "decimal": ",",
    "searchBuilder": {
        "add": "Añadir condición",
        "button": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "clearAll": "Borrar todo",
        "condition": "Condición",
        "conditions": {
            "date": {
                "after": "Despues",
                "before": "Antes",
                "between": "Entre",
                "empty": "Vacío",
                "equals": "Igual a",
                "notBetween": "No entre",
                "notEmpty": "No Vacio",
                "not": "Diferente de"
            },
            "number": {
                "between": "Entre",
                "empty": "Vacio",
                "equals": "Igual a",
                "gt": "Mayor a",
                "gte": "Mayor o igual a",
                "lt": "Menor que",
                "lte": "Menor o igual que",
                "notBetween": "No entre",
                "notEmpty": "No vacío",
                "not": "Diferente de"
            },
            "string": {
                "contains": "Contiene",
                "empty": "Vacío",
                "endsWith": "Termina en",
                "equals": "Igual a",
                "notEmpty": "No Vacio",
                "startsWith": "Empieza con",
                "not": "Diferente de",
                "notContains": "No Contiene",
                "notStartsWith": "No empieza con",
                "notEndsWith": "No termina con"
            },
            "array": {
                "not": "Diferente de",
                "equals": "Igual",
                "empty": "Vacío",
                "contains": "Contiene",
                "notEmpty": "No Vacío",
                "without": "Sin"
            }
        },
        "data": "Data",
        "deleteTitle": "Eliminar regla de filtrado",
        "leftTitle": "Criterios anulados",
        "logicAnd": "Y",
        "logicOr": "O",
        "rightTitle": "Criterios de sangría",
        "title": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "value": "Valor"
    },
    "searchPanes": {
        "clearMessage": "Borrar todo",
        "collapse": {
            "0": "Paneles de búsqueda",
            "_": "Paneles de búsqueda (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Sin paneles de búsqueda",
        "loadMessage": "Cargando paneles de búsqueda",
        "title": "Filtros Activos - %d",
        "showMessage": "Mostrar Todo",
        "collapseMessage": "Colapsar Todo"
    },
    "select": {
        "cells": {
            "1": "1 celda seleccionada",
            "_": "%d celdas seleccionadas"
        },
        "columns": {
            "1": "1 columna seleccionada",
            "_": "%d columnas seleccionadas"
        },
        "rows": {
            "1": "1 fila seleccionada",
            "_": "%d filas seleccionadas"
        }
    },
    "thousands": ".",
    "datetime": {
        "previous": "Anterior",
        "next": "Proximo",
        "hours": "Horas",
        "minutes": "Minutos",
        "seconds": "Segundos",
        "unknown": "-",
        "amPm": [
            "AM",
            "PM"
        ],
        "months": {
            "0": "Enero",
            "1": "Febrero",
            "10": "Noviembre",
            "11": "Diciembre",
            "2": "Marzo",
            "3": "Abril",
            "4": "Mayo",
            "5": "Junio",
            "6": "Julio",
            "7": "Agosto",
            "8": "Septiembre",
            "9": "Octubre"
        },
        "weekdays": [
            "Dom",
            "Lun",
            "Mar",
            "Mie",
            "Jue",
            "Vie",
            "Sab"
        ]
    },
    "editor": {
        "close": "Cerrar",
        "create": {
            "button": "Nuevo",
            "title": "Crear Nuevo Registro",
            "submit": "Crear"
        },
        "edit": {
            "button": "Editar",
            "title": "Editar Registro",
            "submit": "Actualizar"
        },
        "remove": {
            "button": "Eliminar",
            "title": "Eliminar Registro",
            "submit": "Eliminar",
            "confirm": {
                "_": "¿Está seguro que desea eliminar %d filas?",
                "1": "¿Está seguro que desea eliminar 1 fila?"
            }
        },
        "error": {
            "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
        },
        "multi": {
            "title": "Múltiples Valores",
            "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
            "restore": "Deshacer Cambios",
            "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
        }
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
        "emptyError": "El nombre no puede estar vacio",
        "removeConfirm": "¿Seguro que quiere eliminar este %s?",
        "removeError": "Error al eliminar el registro",
        "removeJoiner": "y",
        "removeSubmit": "Eliminar",
        "renameButton": "Cambiar Nombre",
        "renameLabel": "Nuevo nombre para %s",
        "duplicateError": "Ya existe un Estado con este nombre.",
        "emptyStates": "No hay Estados guardados",
        "removeTitle": "Remover Estado",
        "renameTitle": "Cambiar Nombre Estado"
    }
} 
}).buttons().container().appendTo('#Tabla2_wrapper .col-md-6:eq(0)');
  });
</script>