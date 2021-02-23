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
				<div class="col-lg-12">
				<?= $this->session->flashdata('pesan'); ?>
				
					<div class="card card-primary card-outline">
						<div class="card-header">
							<a href="<?= base_url('rak/addrack') ?>" class="btn btn-primary btn-sm">
								<i class="fas fa-plus"></i> Add Rack
							</a>
						</div>
						<div class="card-body">
							<table class="table table-striped">
								<thead>
									<th>Rack ID</th>
									<th>Rack Name</th>
									<th>Action</th>
								</thead>
								<tbody>
									<?php foreach($listRack as $row) : ?>
									<tr>
										<td><?= $row->id_rack ?></td>
										<td><?= $row->name ?></td>
										<td>
											<a href="" class="btn btn-success btn-sm">Edit</a>
											<a href="" class="btn btn-danger btn-sm">Delete</a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>			
				
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
