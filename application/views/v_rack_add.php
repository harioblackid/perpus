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
              <!--               
              Penggunaan Atribut Form
              action = lokasi halaman yang akan dituju => http://localhost/perpus/AddMember/save
              method = POST / GET
              name = optional (Digunakan jika akan mengaktifkan VALIDASI) 
              -->

              <form action="<?= base_url('User/saveMember') ?>" method="post" class="form-horizontal">
                <div class="form-group row">
                  <label for="rackID" class="col-sm-4 col-form-label">Rack Name</label>
                  <div class="col-sm-8">
                    <input 
                      type="text" 
                      class="form-control" 
                      id="rackID" 
                      placeholder="Email" 
                      name="inputRack">
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