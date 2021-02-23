<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
	  <div class="container">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"> <?= $title; ?></h1>
				</div><!-- /.col -->
				
			</div><!-- /.row -->
	  </div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<div class="content">
	  <div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Notifikasi Berhasil -->
					<?= $this->session->flashdata('pesan'); ?>

					<div class="card card-primary card-outline">
						<div class="card-header">
							<a href="<?= base_url('User/addmember') ?>" class="btn btn-primary btn-sm">
								<i class="fas fa-plus"></i> Add User
							</a>
						</div>
						<div class="card-body">
						
							<table class="table table-striped">
								<thead>
									<th>ID</th>
									<th>Full Name</th>
									<th>Place</th>
									<th>Birthdate</th>
									<th>Gender</th>
									<th>Action</th>
								</thead>
								<tbody>
								<?php foreach($UserData as $row) : ?>
									<tr>
										<td><?= $row->id_user; ?></td>
										<td><?= $row->fullname; ?></td>
										<td><?= $row->place; ?></td>
										<td><?= $row->birthdate; ?></td>
										<td><?= $row->gender; ?></td>
										<td>
											<a href="<?= base_url('user/editmember/'). $row->id_user; ?>" class="btn btn-success btn-sm">Edit</a>
											<button class="btn btn-danger btn-sm" data-link="<?= base_url('user/removemember/') . $row->id_user ?>" id="btn-delete">
												<i class="fa fa-trash"></i>
											</button>
											
										</td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<!-- Card body -->
					</div>
					<!-- Card -->
				</div>
			</div>
			
	  </div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
