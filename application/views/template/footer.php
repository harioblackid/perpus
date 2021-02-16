  <!-- Main Footer -->
  <footer class="main-footer">
	<!-- To the right -->
	<div class="float-right d-none d-sm-inline">
	  SMK PGRI TELAGASARI
	</div>
	<!-- Default to the left -->
	<strong>Copyright &copy; 2021 <a href="">CodingStudio</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets') ?>/dist/js/adminlte.min.js"></script>
<!-- Bootbox -->
<script src="<?= base_url('assets') ?>/dist/js/bootbox.all.min.js"></script>

<script>
$(document).on("click", "#delete-btn", function(e){
  let url = $(this).data('link');
  bootbox.confirm({
    title: "Warning",
    message: "Anda yakin ingin menghapusnya?",
    
    callback: function(result){
      if(result == true){
        window.location.href = url
      }
      else {
        bootbox.hideAll();
      }
    }
    
  })
});
</script>

</body>
</html>
