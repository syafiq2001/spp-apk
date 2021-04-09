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
                  <form class="form-horizontal" method="post" action="<?php echo base_url('transaksi/simpan') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">id_pembayaran</label>
                            <div class="col-sm-8">
                              <input type="int" class="form-control" name="id_pembayaran" placeholder="id_Pembayaran" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">id_petugas</label>
                            <div class="col-sm-8">
                                <input type="int" class="form-control" name="id_petugas" placeholder="id_Petugas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">nisn</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nisn" placeholder="Nisn" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">tgl_bayar</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" name="tgl_bayar" placeholder="tgl_Bayar" required>
                            </div>    
                        </div>
                      <div class="form-group row">
                            <label class="col-sm-2 col-form-label">bulan_bayar</label>
                            <div class="col-sm-4">
                               <input type="text" class="form-control" name="bulan_bayar" placeholder="bulan_Bayar" required>
                             </div>
                        </div>  
                         <div class="form-group row">
                            <label class="col-sm-2 col-form-label">tahun_bayar</label>
                            <div class="col-sm-4">
                                 <input type="int" class="form-control" name="tahun_bayar" placeholder="tahun_Bayar" required>
                            </div>
                        </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">id_Spp</label>
                            <div class="col-sm-4">
                                <input type="int" class="form-control" name="id_Spp" placeholder="id_Spp" required>
                              </div>
                         </div> 
                            <div class="form-group row">
                            <label class="col-sm-2 col-form-label">jumlah_bayar</label>
                            <div class="col-sm-4">
                                <input type="int" class="form-control" name="jumlah_bayar" placeholder="jumlah_Bayar" required>   
                    
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