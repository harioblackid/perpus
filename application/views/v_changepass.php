<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $title; ?></h1>
        </div>
        <div class="col-sm-6">
          
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container">
      <div class="row">
        
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Fill the form below</h3>
            </div>
            <div class="card-body">

              <form class="form-horizontal">
                <div class="form-group row">
                  <label for="old" class="col-md-4 col-form-label">Old Password</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="old">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="new" class="col-md-4 col-form-label">New Password</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="new">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label">Retype Password</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="password">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-danger">
                      <i class="fas fa-save"></i> Save Change
                    </button>
                  </div>
                </div>
              </form>
            </div> <!-- /.body -->
            <div class="card-footer"></div>
          </div> <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->