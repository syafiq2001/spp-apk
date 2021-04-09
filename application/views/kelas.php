<!-- Content Wrapper. Contains page content -->
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
                            <th>ID Kelas</th>
                            <th>nama kelas</th>
                            <th>kompetensi keahlian</th>
                            <th>Opsi</th> 
                       </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($kelas->result() as $value):
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $value->id_kelas; ?></td>
                            <td><?php echo $value->nama_kelas; ?></td>
                            <td><?php echo $value->kompetensi_keahlian; ?></td>
                            <td>
                                
                                <a href="<?php echo base_url('kelas/edit/').$value->id_kelas ?>" class="btn btn-xs btn-warning">Edit</a>
                                <a href="<?php echo base_url('kelas/hapus/').$value->id_kelas ?>" class="btn btn-xs btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                  </table> 
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        <div class="card-footer clearfix">
            <a href="<?php echo base_url('kelas/tambah') ?>" class="btn btn-xs btn-primary">Tambah Data</a>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>