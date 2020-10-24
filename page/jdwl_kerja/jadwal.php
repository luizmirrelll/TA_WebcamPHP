<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="box box-success box-solid">
                        <div class="box-header with-border">
                             Data jadwal kerja
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example1">
                                  <?php if(@$_SESSION['admin']){//hanya ada pada login admin yang bisa merubah
                                   ?>
                                   <a href="?page=jdwl_kerja&aksi=tambah" class="btn btn-success" style="margin-bottom:  12px;" > <i class="fa fa-plus"></i> Tambah</a>
                                  <?php } ?>
                                  <a href="page/jdwl_kerja/laporan_pdf.php" class="btn btn-default" target="blank" style="margin-bottom:  12px; margin-left: 5px;"><i class="fa fa-print"></i> Cetak PDF</a>
                                  <a href="page/jdwl_kerja/laporan_exel.php" class="btn btn-default" target="blank" style="margin-bottom:  12px; margin-left: 5px;"><i class="fa fa-print"></i> Cetak Excel</a>

                <thead>
                <tr> <!-- SUDAH DICEK -->
                  <th>No</th>
                  <th>tanggal</th>
                  <th>Nama kegiatan </th>
                  <th>Unit Kerja</th>
                  <th>Keterangan</th>
                  <?php if(@$_SESSION['admin']){//hanya ada pada login admin yang bisa merubah
                     ?>
                  <th>Aksi</th>
                <?php } ?>
                </tr>
                </thead>

                <tbody>

                  <?php
                      $no = 1;
                      $sql = $koneksi->query("select * from tb_jadwal, t_u_kerja where tb_jadwal.id_u_kerja=t_u_kerja.id");
                      while ($data=$sql->fetch_assoc()) {



                   ?>

                  <tr> <!-- SUDAH DICEK -->
                   <td><?php echo $no++; ?></td>
                   <td><?php echo $data['tanggal'] ?></td>
                   <td><?php echo $data['nma_kegt'] ?></td>
                   <td><?php echo $data['u_kerja'] ?></td>
                   <td><?php echo $data['ket_jad'] ?></td>
                   


                   <?php if(@$_SESSION['admin']){//hanya ada pada login admin yang bisa merubah
                     ?>
                   <td>


                      <a  href="?page=jdwl_kerja&aksi=ubah&id=<?php echo $data['id'];?>" class="btn btn-info btn-xs"> <i class="fa fa-edit"></i> Ubah</a>
                      <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data ini...???')" href="?page=jdwl_kerja&aksi=hapus&id=<?php echo $data['id'];?>"" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Hapus</a>

                   </td>
                 <?php } ?>
                 </tr>

                 <?php } ?>
                </tbody>

              </table>
            </div>


       

                        </div>
                     </div>
                   </div>
     </div>
