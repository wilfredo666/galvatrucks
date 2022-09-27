<div class="page-content page-container" id="page-content">
  <div class="padding">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="row container d-flex justify-content-center">
      <div class="col-xl-12 col-md-12">
        <div class="card user-card-full">
          <div class="row m-l-0 m-r-0">
            <div class="col-sm-4 bg-c-lite-red user-profile" style="height:90px ;">
              <div class="m-t-5 text-center text-white h5">
                <p><?php echo $solicitudServ["razon_social_cli"] ?></p>
              </div>
              <div class="card-block text-center justify-content-center"><br><br><br>
                <div class="col-sm-12">
                  <p class="m-b-10 f-w-600">NUMERO BILL / BL</p>
                  <h6 class="text-muted h4"><?php echo $solicitudServ["numero_bill"] ?></h6>
                </div>
                <div class="col-sm-12">
                  <p class="m-b-10 f-w-600"><i class="nav-icon fab fa-docker"></i> NAVIERA</p>
                  <h5 class="text-muted f-w-400"><?php echo $solicitudServ["razon_social_emp"] ?></h5>
                </div>
                <div class="col-sm-12">
                  <p class="m-b-10 f-w-600"><i class="fas fa-calendar-week"></i> FECHA DE SOLICITUD</p>
                  <h6 class="text badge badge-info f-w-400"><?php echo $solicitudServ["fecha_solicitud"] ?></h6>
                </div>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="card-block">
                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">INFORMACIÓN DE LA SOLICITUD DE SERVICIO</h6>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">BILL OF LADING / BL</p>

                    <a href="<?php echo base_url() ?>/assest/documentos/solicitudes/<?php echo $solicitudServ["doc_bill"] ?>" class="btn btn-outline-info btn-circle" target="_blank" rel="noopener noreferrer"><i class="fa fa-download"></i>Ver Documento</a>

                  </div>
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">FACTURA COMERCIAL</p>
                    <?php
                    if ($solicitudServ["doc_factura"] != "") {
                    ?>

                      <a href="<?php echo base_url() ?>/assest/documentos/solicitudes/<?php echo $solicitudServ["doc_factura"] ?>" class="btn btn-outline-info btn-circle" target="_blank" rel="noopener noreferrer"><i class="fa fa-download"></i>Ver Documento</a>
                    <?php
                    }
                    ?>
                  </div>
                </div>
                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                <div class="row">
                  <div class="col-sm-6">
                    <p class="m-b-10 f-w-600">LISTA DE EMPAQUE</p>
                    <?php
                    if ($solicitudServ["doc_lista_empaque"] != "") {
                    ?>

                      <a href="<?php echo base_url() ?>/assest/documentos/solicitudes/<?php echo $solicitudServ["doc_lista_empaque"] ?>" class="btn btn-outline-info btn-circle" target="_blank" rel="noopener noreferrer"><i class="fa fa-download"></i>Ver Documento</a>
                    <?php
                    }
                    ?>
                  </div>
                  <div class="col-sm-6">

                    <?php
                    if ($solicitudServ["doc_otros"] != "") {
                    ?>
                      <p class="m-b-10 f-w-600">DOCUMENTOS ADICIONALES</p>
                      <a href="<?php echo base_url() ?>/assest/documentos/solicitudes/<?php echo $solicitudServ["doc_otros"] ?>" class="btn btn-outline-info btn-circle" target="_blank" rel="noopener noreferrer"><i class="fa fa-download"></i>Ver Documento</a>
                    <?php
                    }
                    ?>
                  </div>
                </div>
                <br>
                <form id="FEditSolicitudAdmin">
                  <div class="row">
                    <div class="card direct-chat direct-chat-primary col-sm-12">
                      <div class="card-header">
                        <h3 class="card-title"> <span class="font-weight-bold"></span> OBSERVACIONES</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">

                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <div class="input-group">
                          <textarea type="text" name="observaciones" id="observaciones" class="form-control" rows="4" cols="20" style="overflow-y: scroll;"> <?php echo $solicitudServ["observaciones"] ?> </textarea>
                        </div>
                      </div>
                      <!-- /.card-footer-->
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-7  disabled color-palette text-justify" style="background-color: #DBEEF3 ;"><span class="font-italic"> <span class="font-weight-bold">NOTA:</span> Una vez revisada la documentación debe Aceptar o Rechazar la Soicitud de Servicio.
                      </span>
                    </div>
                    <div class="col-sm-5">
                      <p class="m-b-10 f-w-600">ESTADO DE SOLICITUD</p>
                      <select name="estadoSoli" id="estadoSoli" class="form-control bg-c-lite-red text-light">
                        <option class="text-dark" value="aceptado" <?php if ($solicitudServ["activo_solicitud"] == "aceptado") : ?> selected <?php endif; ?>>Aceptar</option>
                        <option class="text-dark " value="pendiente" <?php if ($solicitudServ["activo_solicitud"] == "pendiente") : ?> selected <?php endif; ?>>Pendiente</option>
                        <option class="text-dark" value="rechazado" <?php if ($solicitudServ["activo_solicitud"] == "rechazado") : ?> selected <?php endif; ?>>Rechazar</option>
                      </select>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditSolicitudAdmin(<?php echo $solicitudServ["id_solicitud"] ?>)"> Guardar </button>
  </div>
</div>