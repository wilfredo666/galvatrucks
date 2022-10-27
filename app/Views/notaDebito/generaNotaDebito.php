<?php
foreach ($busBill as $bill) {
    $numBill = $bill["num_bill"];
    $nroCont = $bill["nro_contenedor"];
}
?>
<div id="contenidoReporte">

    <div class="row container-fluid col-md-12 ">
        <div class="row col-12 container-fluid">
            <div class="col-9 container-fluid">
                <h3 class="font-weight-bold">BILL: <span class="font-weight-light "><?php echo $numBill ?></span></h3>
            </div>
        </div>
        <div class="row col-12 container-fluid">
            <div class="col-12 container-fluid">
                <p class="font-weight-bold">NRO CONTENEDOR: <span class="font-weight-normal "> <?php echo $nroCont ?></span> </p>
            </div>
        </div>
    </div>

</div>