
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>public/backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php if(isset($hasTable)): ?>
<!-- DataTables -->
<script src="<?php echo base_url() ?>public/backend/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>public/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<?php endif; ?>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>public/backend/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>public/backend/js/demo.js"></script>
</body>
</html>
