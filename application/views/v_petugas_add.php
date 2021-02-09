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
          <div class="card card-default">
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

              <form action="<?= base_url('User/savePetugas') ?>" method="post" class="form-horizontal">
                <div class="form-group row">
                  <label for="email" class="col-sm-4 col-form-label">Email</label>
                  <div class="col-sm-8">
                    <input 
                      type="email" 
                      class="form-control" 
                      id="email" 
                      placeholder="Email" 
                      name="inputEmail">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="fullnameID" class="col-sm-4 col-form-label">Fullname</label>
                  <div class="col-sm-8">
                    <input 
                      type        ="text" 
                      class       ="form-control" 
                      id          ="fullnameID" 
                      placeholder ="Fullname" 
                      name        ="inputFullname">

                  </div>
                </div>
                <div class="form-group row">
                  <label for="placeID" class="col-sm-4 col-form-label">Place</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="placeID" placeholder="Place" name="inputPlace">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="birthdateID" class="col-sm-4 col-form-label">Birthdate</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" id="birthdateID" placeholder="Birthdate" name="inputBd">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="genderID" class="col-sm-4 col-form-label">Gender</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="inputGender" id="genderID">
                      <option value="male"> Male </option>
                      <option value="female"> Female </option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="new" class="col-sm-4 col-form-label">New Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="new">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-4 col-form-label">Retype Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="password" name="inputPassword">
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