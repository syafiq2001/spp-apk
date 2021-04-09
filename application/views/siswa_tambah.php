<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>
                  <form class="form-horizontal" method="post" action="<?php echo base_url('siswa/simpan') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">nisn</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="nisn" placeholder="nisn" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">nis</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="nis" placeholder="nis" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" placeholder="nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">id_kelas</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="id_kelas" placeholder="id_kelas" required>
                            </div>    
                        </div>
                      <div class="form-group row">
                            <label class="col-sm-2 col-form-label">alamat</label>
                            <div class="col-sm-4">
                               <input type="text" class="form-control" name="alamat" placeholder="alamat" required>
                             </div>
                        </div>  
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">no_telp</label>
                            <div class="col-sm-4">
                                 <input type="text" class="form-control" name="no_telp" placeholder="no_telp" required>
                            </div>
                        </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">id_Spp</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="id_Spp" placeholder="id_Spp" required>
                              </div>
                         </div> 
                        
                      <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-default">Reset</button>
                    </div>
                </form>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>