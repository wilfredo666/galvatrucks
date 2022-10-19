<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galvatrucks</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assest/dist/css/adminlte.css">
  </head>


  <body class="hold-transition login-page">
    <div id="back"></div>
    <div class="login-box">

      <!-- /.login-logo -->
      <div class="card" style="border-radius: 20px; background-color:#ffffff00; box-shadow: 10px 5px 5px #000000a6;">
        <div class="card-body login-card-body" style="border-radius: 20px; background-color:#a5adc5ba;">

          <div class="login-logo">
            <img src="<?php echo base_url(); ?>/assest/img/logo.jpg" alt="logo" width="50%">
          </div>

          <p class="login-box-msg">Ingresa al sistema con tu usuario</p>

          <form action="<?php echo base_url(); ?>/Home/acceso" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Ingrese su usuario" id="usuario" name="usuario" autocomplete="off">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <!-- //DESCOMENTAR Y ANTES DEL = FALTA ?-->
            <p class="text-danger"><?=session("errors.usuario") ?></p>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Ingrese su contraseña" id="password" name="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <!-- //DESCOMENTAR Y ANTES DEL = FALTA ?-->
            <p class="text-danger"><?=session("errors.password")?></p>
            <div class="row">
              <div class="col-3">

              </div>
              <!-- /.col -->
              <div class="col-6">
                <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
              </div>
              <div class="col-3">

              </div>
              <!-- /.col -->
            </div>
          </form>
          <!-- poner ?=session("errors.credenciales) -->
          <!-- //DESCOMENTAR Y ANTES DEL = FALTA ?-->
          <p class="text-danger font-italic"><?=session("errors.credenciales")?></p>

        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->



    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/assest/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>/assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>/assest/dist/js/adminlte.min.js"></script>
  </body>

</html>