
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


<script>
  $(function () {
    $("#DataTableUsuario").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableUsuario_wrapper .col-md-6:eq(0)');
  });
</script>
<script>
  $(function () {
    $("#DataTableCamion").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableCamion_wrapper .col-md-6:eq(0)');
  });
</script>

</body>

</html>