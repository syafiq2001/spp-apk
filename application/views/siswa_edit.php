[13:45, 4/8/2021] Hamam: <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
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

                <?php foreach ($siswa->result() as $value): ?>

                  <form class="form-horizontal" method="post" action="<?php echo base_url('siswa/edit') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="nisn" placeholder="NISN" required>
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-8">
                                <input type="nis" class="form-control" name="nis" placeholder="NIS" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">ID Kelas</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_kelas" placeholder="ID Kelas" required>
                            </div>
                          </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">No Telp</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="no_telp" placeholder="No Telp" required>
                            </div>
                            </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Id SPP</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_spp" placeholder="ID SPP" required>
                            </div>
                        </div>
                      
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-bg btn-outline-primary btn-outline-primary">Simpan</button>
                        <button type="reset" class="btn btn-bg btn-outline-danger btn-outline-danger">Reset</button>
                    </div>
                </form>
                <?php endforeach; ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
    