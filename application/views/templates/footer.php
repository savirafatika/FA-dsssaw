<!-- footer content -->
<footer>
  <div class="pull-right">
    &#169; Admin by FA <a href=""><?= date('Y'); ?></a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="<?= base_url('assets'); ?>/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets'); ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets'); ?>/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= base_url('assets'); ?>/vendors/nprogress/nprogress.js"></script>

<!-- FullCalendar -->
<script src="<?= base_url('assets'); ?>/vendors/moment/min/moment.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/fullcalendar/dist/fullcalendar.min.js"></script>

<!-- iCheck -->
<script src="<?= base_url('assets'); ?>/vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="<?= base_url('assets'); ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- jQuery Smart Wizard -->
<script src="<?= base_url('assets'); ?>/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?= base_url('assets'); ?>/build/js/custom.min.js"></script>

<script>
  $('.custom-file-input').on('change', function() {
    let filename = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(filename);
  });
</script>

<!-- Sweet Alert -->
<script src="<?= base_url('assets'); ?>/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/myscript.js"></script>

</body>

</html>