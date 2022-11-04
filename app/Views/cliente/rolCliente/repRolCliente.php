<?php
foreach ($servicios as $serv) {
    $razonCli = $serv["razon_social_cli"];
    $idCli = $serv["id_cliente"];
}
?>
<div class="content-wrapper">
    <section class="content-header" style="padding-bottom: 0;">
        <h3 class="content-header">REPORTES DE SERVICIOS <small class="font-weight-lighter"> Importación/Exportación</small></h3>
        <hr style="border-color: #72C5CF; margin: 0;">
    </section>

    <div class="modal-body" style="padding-bottom: 0;">
        <div class="card">
            <form id="ReporteCliente">
                <div class="card-body" style="padding-bottom: 0;">
                    <div class="container col-md-12">
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label>Razón Social</label>
                                <input type="text" class="form-control" id="razonCli" name="razonCli" value="<?php echo $razonCli ?>" readonly>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Fecha desde:</label>
                                <input type="date" class="form-control" id="fechaDesde" name="fechaDesde">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Fecha hasta:</label>
                                <input type="date" class="form-control" id="fechaHasta" name="fechaHasta">
                            </div>
                            <div class="form-group col-md-3" style=" display: flex; align-items: center;">
                                <button type="button" class="btn btn-navbar btn-app bg-warning" onclick="reporteRolCliente();">
                                    <i class="fas fa-search "></i>
                                </button>
                                <button type="button" class="btn btn-navbar  btn-app bg-primary" onclick="javascript:window.print()">
                                    <i class="fas fa-print"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" class="form-control" id="idCliente" name="idCliente" value="<?php echo $idCli ?>">
            </form>

        </div>
    </div>

    <hr style="background: #72C5CF; height: 1px;">
    <!-- /.card-body -->
    <section class="content">

        <div class="container-fluid">
            <table id="Tabla3" class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <!-- <th>COD. SERVICIO</th> -->
                        <th>NRO BL/BILL</th>
                        <th>NRO CONTENEDOR</th>
                        <th>LUGAR PARTIDA</th>
                        <th>DESTINO</th>
                        <th>ESTADO</th>
                        <th>FECHA</th>
                    </tr>
                </thead>
                <tbody id="repServRolCliente">

                </tbody>
            </table>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->