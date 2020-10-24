

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="box box-success box-solid"> <!-- SUDAH DICEK  -->
                        <div class="box-header with-border">
                             Data Absensi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example1">
                                  <a href="?page=absen" class="btn btn-success" style="margin-bottom:  8px;"><i class="fa fa-plus"></i> Tambah </a>
                                    <a id="lap_masuk" data-toggle="modal" data-target="#lap" style="margin-bottom:  8px; margin-left: 5px;" class="btn btn-default"><i class="fa fa-print"></i> Cetak PDF</a>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>nama</th>
                                            <th>Absen</th>
                                            <th>kehadiran</th>
                                            <th>Jadwal kegiatan</th>
                                            <th>keterangan</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Foto</th>
                                             <th>ttd</th>
                                           
                                            
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_absen order by id_ab desc");

                                            while ($data= $sql->fetch_assoc()) {
                                                $absen=$data['absen'];
                                                if ($absen=="Hadir") {
                                                    $jadi=H;
                                                }
                                                if ($absen=="Sakit") {
                                                    $jadi=S;
                                                }
                                                if ($absen=="Izin") {
                                                    $jadi=I;
                                                }

                                             //$absen = ($data['absen']==H)?"Hadir","Sakit";
                                             $ab_saat = ($data['ab_saat']==Datang)?"Datang":"Pulang";   





                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nama'];?></td>
                                             <td><?php echo $absen; ?></td><!--<td><?php //echo $data['absen']; ?></td>-->
                                            <td><?php echo $ab_saat; ?></td><!--<td><?php// echo $data['ab_saat']; ?></td>-->
                                             <td><?php echo $data['id_jadwal']; ?></td>
                                             <td><?php echo $data['ket']; ?></td>
                                             <td><?php echo date('d F Y', strtotime($data['tanggal'])); ?></td>
                                             <td><?php echo $data['jam']; ?></td> 

                                             <td> <img src="upload/<?php echo $data['foto']; ?>" width="75" height="75" alt=""> </td>
                                             <td> <img src="doc_signs/<?php echo $data['ttd']; ?>" width="75" height="75" alt=""> </td>
                                             

                                             <td>
                                                <?php if(@$_SESSION['admin']){//hanya ada pada login admin yang bisa merubah
                                                ?>
                                                <a href="?page=d_absen&aksi=ubah&id=<?php echo $data['id_ab']; ?>" class="btn btn-info btn-xs" ><i class="fa fa-edit "></i> Ubah</a>
                                            <?php } ?>
                                                <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ... ???')" href="?page=d_absen&aksi=hapus&id_ab=<?php echo $data['id_ab']; ?>" class="btn btn-danger btn-xs" ><i class="fa fa-trash"></i> Hapus</a>

                                                <a href="?page=d_absen&aksi=detail&id=<?php echo $data['id_ab']; ?>" class="btn btn-info btn-xs" ><i class="fa fa-table"></i> Detail</a>

                                            </td>
                                        </tr>


                                        <?php  } ?>
                                    </tbody>

                                    </table>
                                  </div>

                                 

                        </div>
                     </div>
                   </div>
     </div>




 <div class="modal fade" id="lap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Laporan Data Absensi</h4>
                                        </div>

                                        <div class="modal-body">
                                          <form role="form" method="POST" action="page/absen/laporan.php" target="blank" >

                                            
                                            <div class="form-group">
                                                <label>Dari Tanggal</label>
                                                <input class="form-control" type="date" name="tgl1" /> 
                                            </div>

                                             <div class="form-group">
                                                <label> Sampai Tanggal</label>
                                                <input class="form-control" type="date" name="tgl2" /> 
                                            </div>

                                           

                                            <div class="modal-footer">

                                           <button type="submit" name="cetak" class="btn btn-default" style="margin-top: 8px;"><i class="fa fa-print"></i> Cetak per Periode</button>
                                            
                                            <a href="page/absen/laporan.php" class="btn btn-default" target="blank" style="margin-top: 8px; margin-left: 5px;"><i class="fa fa-print"></i> Cetak Semua</a>

                                            

                                            
                                            </div>
                                            </div>  
                                      
                                        
                                        </form> 


    
                                    </div>
                                </div>
                           
                    </div>