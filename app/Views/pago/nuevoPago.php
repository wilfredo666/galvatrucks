<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-bottom: 0;">
        <div class="card-header">
            <h3 class="font-weight-light ">Pagos del Servicio de IMPORTACIÓN/EXPORTACIÓN </h3>
        </div>
    </section>
    <div class="content-header">
        <div class="container-fluid">

            <div class="modal-body" style="padding-bottom: 0;">
                <div class="card ">
                    <div class=" titulo col-md-12">
                        <h2 class="text-center">
                            <font class="display-md font-weight-light">Información del Servicio</font>
                        </h2>
                        <hr class="hr-seguimiento">
                    </div>
                    <form id="FPagoServicio" role="search">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label>Nro Bill of Lading</label>
                                       
                                        <!-- <input type="text" class="form-control" id="rutaIni" name="rutaIni" placeholder="Ingrese el número de BILL/BL">
                                        <span class="text-danger chartjs-render-monitor" id="error-bill"></span> -->
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Cliente</label>
                                        <input type="text" class="form-control" id="rutaFin" name="rutaFin" placeholder="" disabled>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Naviera</label>
                                        <input type="text" class="form-control" id="rutaFin" name="rutaFin" placeholder="" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Origen Mercadería</label>
                                        <input type="text" class="form-control" id="distancia" name="distancia" disabled>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Destino Mercadería</label>
                                        <input type="text" class="form-control" id="combustible" name="combustible" disabled>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Fecha de Arribo</label>
                                        <input type="date" class="form-control" id="rutaFin" name="rutaFin" placeholder="" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
            </div>
            <div class="time-label">
                <!-- <span style="background-color: #f4f6f9;">Añadir Pago</span> -->
                <button class="btn btn-sm btn-success btn-circle ml-3" style="width: 150px;" onclick="AñadirPago(<?php  ?>);"> Añadir Pago
                    <i class="fas fa-plus-square"> </i>
                </button>
            </div>

        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <table id="Tabla2" class="table table-bordered table-striped">
                <thead class="text-center align-items-center justify-content-center bg-dark">
                    <tr>
                        <th>CONCEPTO</th>
                        <th>MONTO PAGADO</th>
                        <th>TIPO DE MONEDA</th>
                        <th>FECHA DE PAGO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <div id="LlenarPagos" class="container-llenado">

                    </div>
                </tbody>
            </table>
        </div>
    </section>
</div>