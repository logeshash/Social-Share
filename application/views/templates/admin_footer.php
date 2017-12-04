  <!-- /.content-wrapper -->
  <footer class="main-footer <?= !empty($hide_footer) ? $hide_footer : '' ?>">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2017</strong>
  </footer>
  <!-- page script -->
<script>
  $(function () {
    $('#DataTableList').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "pageLength": 10,
    });
  });
</script>
</body>
</html>