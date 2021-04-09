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
                <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>id_pembayaran</th>
                            <th>id_petugas</th>
                            <th>nisn</th>
                            <th>tgl_bayar</th>
                            <th>bulan_bayar</th>
                            <th>tahun_bayar</th>
                            <th>id_spp</th>
                            <th>jumlah_bayar</th>
                            <th>Opsi</th> 
                       </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($transaksi->result() as $value):
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $value->id_pembayaran; ?></td>
                            <td><?php echo $value->id_petugas; ?></td>
                            <td><?php echo $value->nisn; ?></td>
                            <td><?php echo $value->tgl_bayar; ?></td>
                            <td><?php echo $value->bulan_bayar; ?></td>
                            <td><?php echo $value->tahun_bayar; ?></td>
                            <td><?php echo $value->id_spp; ?></td>
                            <td><?php echo $value->jumlah_bayar; ?></td>
                            <td>
                                
                                <a href="<?php echo base_url('transaksi/ubah/').$value->id_pembayaran ?>" class="btn btn-xs btn-warning">edit</a>
                                
                                <a href="<?php echo base_url('transaksi/hapus/').$value->id_pembayaran ?>" class="btn btn-xs btn-danger">Hapus</a>
                            </td>
                          </tr>
                           <?php
                             endforeach;
                        ?>
                  </tbody>
                   <tfoot>
                  </table> 
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        <div class="card-footer clearfix">
            <a href="<?php echo base_url('transaksi/tambah') ?>" class="btn btn-xs btn-primary">Tambah Data</a>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>