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
        <div class="form-group col-md-1 col-sm-2 text-center align-items-center justify-content-center">
            <label class="font-weight-light">Búsqueda</label>
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
    <div class="row col-12 text-center">
        <div class="form-group  time-label col-md-4 ">

        </div>
        <div class="form-group  time-label col-md-4 mb-5 mt-3">
            <!-- <span style="background-color: #f4f6f9;">Añadir Pago</span> -->
            <!--<button class="btn btn-success btn-circle ml-1" style="width: 80%" onclick="FNotaDebito();"> Generar Nota de Débito
                <i class="fas fa-file-invoice"></i>
            </button>-->
            
            <a class="btn btn-success btn-circle ml-1" href="<?php echo base_url("CServicio/GeneraNotaDebito");?>?id=<?php echo $id_servicio;?>" class="btn btn-outline-dark btn-circle" target="_blank">
                         Generar Nota de Débito
                          <i class="fas fa-file-invoice"></i>
                        </a>
        </div>
    </div>   
</div>