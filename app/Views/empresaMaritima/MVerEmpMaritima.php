<style>
  .card {
    box-shadow: 0 8px 8px 0 #285DB3;
    width: 600px;
    height: 600px;
    margin: auto;
    text-align: center;
    font-family: arial;
  }

  .title {
    color: grey;
    font-size: 18px;
  }
</style>
</head>

<div class="card">
  <img src="<?php echo base_url(); ?>/assest/img/naviera.jpg" alt="" style="min-height: 30%;
        min-width: 600px;">
  <br>
  <h3><b><?php echo $empMaritima["razon_social_emp"] ?></b></h3>
  <p class="title">NIT: <?php echo $empMaritima["nit_emp"] ?></p>
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <p class="m-b-10 f-w-600">Dirección</p>
      <h6 class="text-muted f-w-400"><?php echo $empMaritima["direccion_emp"] ?></h6>
    </div>
  </div>

  <div class="col-sm-12">
    <div class="card-block">
      <h6 class="m-b-20 p-b-5 b-b-default f-w-600">MEDIOS DE COMUNICACIÓN CON LA NAVIERA</h6>
      <div class="row">

        <div class="col-sm-6">
          <p class="m-b-10 f-w-600">Correo Electrónico</p>
          <p class="text-muted f-w-400"><?php echo $empMaritima["correo_emp"] ?></p>
        </div>
        <div class="col-sm-6">
          <p class="m-b-10 f-w-600">Contácto</p>
          <p class="text-muted f-w-400"><?php echo $empMaritima["contacto_emp"] ?></p>
        </div>
      </div>
    </div>
    <div class="modal-footer justify-content-between">
      <a type="" class="" data-dismiss="modal"></a>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
  </div>


  <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button> -->

</div>