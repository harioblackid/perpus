<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= AppName() ?> | <?= $title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
	<div class="container">
	  <a href="<?= base_url('assets') ?>/index3.html" class="navbar-brand">
		<img src="<?= base_url('assets') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	  </a>

	  <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse order-3" id="navbarCollapse">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
		  <li class="nav-item">
			<a href="<?= base_url('Dashboard') ?>" class="nav-link">Home</a>
		  </li>
		  <li class="nav-item">
			<a href="<?= base_url('User') ?>" class="nav-link">Member</a>
		  </li>

		  <li class="nav-item">
			<a href="<?= base_url('Buku') ?>" class="nav-link">Buku</a>
		  </li>
		  <li class="nav-item">
			<a href="<?= base_url('Rak') ?>" class="nav-link">Rak</a>
		  </li>
		  <li class="nav-item">
			<a href="<?= base_url('User/petugas') ?>" class="nav-link">Petugas</a>
		  </li>
		  <li class="nav-item dropdown">
			<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Report</a>
			<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
			  <li><a href="#" class="dropdown-item">Borrowing </a></li>
			  <li class="dropdown-divider"></li> 
			  <li><a href="#" class="dropdown-item">Return </a></li>
			</ul>
		  </li>
		</ul>

		<!-- SEARCH FORM -->
		
	  </div>

	  <!-- Right navbar links -->
	  <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
		<!-- Messages Dropdown Menu -->
		
		<!-- Notifications Dropdown Menu -->
		<li class="nav-item dropdown">
		  <a class="nav-link" data-toggle="dropdown" href="#">
		  	<i class="fas fa-bars"></i>
		  </a>
		  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
			<span class="dropdown-header">Login as : Admin</span>
			<div class="dropdown-divider"></div>
			<a href="<?= base_url('Auth/profile') ?>" class="dropdown-item">
			  <i class="fas fa-envelope mr-2"></i> 
			  <span class="float-right text-muted text-sm">
				  User Profile
			  </span>
			</a>
			<div class="dropdown-divider"></div>
			<a href="<?= base_url('Auth/changepass') ?>" class="dropdown-item">
			  <i class="fas fa-users mr-2"></i>
			  <span class="float-right text-muted text-sm">
				  Change Password
				</span>
			</a>
			<div class="dropdown-divider"></div>
			<a href="#" class="dropdown-item">
			  <i class="fas fa-file mr-2"></i> 
			  <span class="float-right text-muted text-sm">
				  Logout
				</span>
			</a>
			
		  </div>
		</li>
		
	  </ul>
	</div>
  </nav>
  <!-- /.navbar -->
