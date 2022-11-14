<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header bg-galva" style="padding-bottom: 0;">
        <div class="card-header">
            <h3 class="font-weight-light ">GENERAR NOTAS DE DÉBITO</h3>
        </div>
    </section>
    <div class="content-header">
        <div class="container-fluid ">
            <div class="modal-body " style="padding-bottom: 0;">
                <div class="card col-md-12">
                    <div class=" titulo col-md-12">
                        <h2 class="text-center">
                            <font class="display-md font-weight-light">Información del Servicio</font>
                        </h2>
                        <hr class="hr-seguimiento">
                    </div>

                    <!-- <form id="FPagoServicio" role="search" autocomplete="off"> -->
                    <div class="card-body" id="contenido">
                        <div class="container col-md-12">
                            <div class="row">
                                <div class="form-group col-md-3 col-sm-10 ">
                                    <label>Nro Bill of Lading</label>
                                    <input type="text" class="form-control" id="nroBill" name="nroBill" placeholder="Ingrese NRO de BILL/BL" style="text-transform: uppercase;" autocomplete="off" list="listaBill">
                                    <datalist id="listaBill">
                                        <?php
                                        foreach ($datosServ as $bus) {
                                            $bill = $bus["num_bill"];
                                        ?>
                                            <option value="<?php echo $bill ?>"></option>
                                        <?php
                                        }
                                        ?>
                                    </datalist>
                                    <span class="text-danger chartjs-render-monitor" id="error-bill"></span>
                                </div>
                                <div class="form-group col-md-1 col-sm-2  col-xl-1 text-center align-items-center justify-content-center">
                                    <label class="font-weight-light"> Búsqueda</label>
                                    <button type="button" class="btn btn-outline-warning form-control " style="width: 60px ;" id="busqueda" name="busqueda" onclick="buscarBL()"><i class="fas fa-search"></i></button>
                                </div>
                                <div class="form-group col-md-5">
                                    <label>Cliente</label>
                                    <input type="text" class="form-control" id="nomCliente" name="nomCliente" placeholder="" readonly>
                                </div>
                                <div class="form-group col-md-3" id="fecha">
                                    <label>Fecha de Arribo</label>
                                    <input type="date" class="form-control" id="fechaArribo" name="fechaArribo" placeholder="" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Naviera</label>
                                    <input type="text" class="form-control" id="nomNaviera" name="nomNaviera" placeholder="" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Origen Mercadería</label>
                                    <input type="text" class="form-control" id="origenMerc" name="origenMerc" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Destino Mercadería</label>
                                    <input type="text" class="form-control" id="destinoMerc" name="destinoMerc" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <!-- </form> -->

                </div>
            </div>
        </div>
    </div>
</div>