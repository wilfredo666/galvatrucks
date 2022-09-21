<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="float-right d-none d-sm-inline">
    Anything you want
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; 2022 <a href="">Galvatrucks</a>.</strong> Todos los derechos reservados.
</footer>
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="<?php echo base_url(); ?>/assest/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/assest/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>/assest/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/assest/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/assest/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>/assest/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/assest/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>/assest/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/assest/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>/assest/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>/assest/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>/assest/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>/assest/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>/assest/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url(); ?>/assest/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url(); ?>/assest/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>/assest/js/usuario.js"></script>
<script src="<?php echo base_url(); ?>/assest/js/conductor.js"></script>
<script src="<?php echo base_url(); ?>/assest/js/cliente.js"></script>
<script src="<?php echo base_url(); ?>/assest/js/empMaritima.js"></script>
<script src="<?php echo base_url(); ?>/assest/js/camion.js"></script>
<script src="<?php echo base_url(); ?>/assest/js/contratoCamion.js"></script>
<script src="<?php echo base_url(); ?>/assest/js/asignacion.js"></script>
<script src="<?php echo base_url(); ?>/assest/js/ruta.js"></script>
<script src="<?php echo base_url(); ?>/assest/js/servicio.js"></script>

<!-- BS-Stepper -->
<script src="<?php echo base_url(); ?>/assest/plugins/bs-stepper/js/bs-stepper.min.js"></script>



<script>
  $(function() {
    $("#DataTableUsuario").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableUsuario_wrapper .col-md-6:eq(0)');
  });

  $(function() {
    $("#DataTableCamion").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableCamion_wrapper .col-md-6:eq(0)');
  });

  $(function() {
    $("#DataTableConductor").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableConductor_wrapper .col-md-6:eq(0)');
  });

  $(function() {
    $("#DataTableCliente").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableCliente_wrapper .col-md-6:eq(0)');
  });

  $(function() {
    $("#DataTableEmpresaMaritima").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableEmpresaMaritima_wrapper .col-md-6:eq(0)');
  });

  $(function() {
    $("#DataTableAsignacion").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableAsignacion_wrapper .col-md-6:eq(0)');
  });

  $(function() {
    $("#DataTableContratoCamion").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableContratoCamion_wrapper .col-md-6:eq(0)');
  });

  $(function() {
    $("#DataTableSolicitud").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableSolicitud_wrapper .col-md-6:eq(0)');
  });

  $(function () {
    $("#Tabla1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabla1_wrapper .col-md-6:eq(0)');
    $('#Tabla2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  // BS-Stepper Init
  /* document.addEventListener('DOMContentLoaded', function() {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  }) */
  
</script>


<!--===============
seccion de modal
=================-->
<!--modal mediano-->
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="content-lg">

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--===============
MODAL Default
=================-->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-default">
    <div class="modal-content" id="content-default">

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--===============
MODAL Default
=================-->
<div class="modal fade" id="modal-xl">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" id="content-xl">

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</body>

</html>