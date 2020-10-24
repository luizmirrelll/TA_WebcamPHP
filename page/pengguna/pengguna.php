
 <?php if(@$_SESSION['admin']){//hanya ada pada login admin yang bisa merubah
                     ?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="box box-success box-solid">
                        <div class="box-header with-border">
                             Data Pengguna
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Nomor telepon</th>
                                            <th>NIK</th>
                                            <th>Alamat</th>
                                            <th>Level</th>
                                            <th>Unit Kerja</th>
                                            <th>Foto profil</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_user");

                                            while ($data= $sql->fetch_assoc()) {





                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['username'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['no_hp'];?></td>
                                            <td><?php echo $data['nik'];?></td>
                                            <td><?php echo $data['alamat'];?></td>
                                            <td><?php echo $data['level'];?></td>
                                            <td><?php echo $data['u_kerja']; ?></td>
                                            <td> <img style="border-radius:50%;" src="images/<?php echo  $data['foto'];?>" width="75" height="50"> </td>

                                             <td>
                                                <a href="?page=pengguna&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info" ><i class="fa fa-edit"></i> Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ... ???')" href="?page=pengguna&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                                            </td>

                                        </tr>


                                        <?php  } ?>
                                    </tbody>

                                    </table>
                                  </div>

                                  <a href="?page=pengguna&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah </a>


                        </div>
                     </div>
                   </div>
     </div>
<?php } ?>