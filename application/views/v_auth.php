<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= AppName() ?> | <?= $title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  
	<?= $this->session->flashdata('pesan'); ?>

	<div class="card card-outline card-primary">
	<div class="card-header text-center">
	  <a href="<?= base_url('assets') ?>/index2.html" class="h1"><?= AppName() ?></a>
	</div>

	<div class="card-body">
	  <p class="login-box-msg">Sign in to start your session</p>

	  <form action="" method="post">
		<div class="input-group mt-3">
		  <input 
				type="email" 
				class="form-control" 
				autocomplete="off" 
				placeholder="Email"
				name="inputEmail"
				value="<?= set_value('inputEmail'); ?>"
				>

			<div class="input-group-append">
				<div class="input-group-text">
					<span class="fas fa-envelope"></span>
				</div>
		  </div>
		</div>
		<?= form_error('inputEmail', '<small class="text-danger">', '</small>'); ?>

		<div class="input-group mt-3">
		  <input 
				type="password" 
				class="form-control" 
				placeholder="Password"
				name="inputPassword"
				>
		  
			<div class="input-group-append">
				<div class="input-group-text">
					<span class="fas fa-lock"></span>
				</div>
		  </div>
		</div>
		<?= form_error('inputPassword', '<small class="text-danger">', '</small>'); ?>

		<div class="row mt-3">
		  <div class="col-8">
		  	<a href="<?= base_url('Auth/register') ?>" class="text-center">Register a new membership</a>
		  </div>
		  <!-- /.col -->
		  <div class="col-4">
			<button type="submit" class="btn btn-primary btn-block">Sign In</button>
		  </div>
		  <!-- /.col -->
		</div>
	  </form>

	</div>
	<!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets') ?>/dist/js/adminlte.min.js"></script>
</body>
</html>
