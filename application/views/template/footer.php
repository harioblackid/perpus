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
	
	//Fungsi untuk confirm HAPUS
  $(document).on("click", "#btn-delete", function(link) {
    bootbox.confirm({
			message 	: "Anda yakin ingin menghapus data tersebut?",
			callback	: function(result)
			{ 
				if(result == true)
				{
					
				}
				console.log(" Hasil nya adalah " + result);
			}
		});
  });
  </script>
</body>
</html>
