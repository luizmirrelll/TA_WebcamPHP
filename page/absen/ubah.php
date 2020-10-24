<?php 
    date_default_timezone_set('Asia/Jakarta');
    $id_ab = $_GET['id_ab'];

    $sql = $koneksi->query("select * from tb_absen where id_ab = '$id_ab'");
    $data=$sql->fetch_assoc();
    
    $jam = date("h:i:s");


    
         if($_SESSION['admin']){
              $user_l=$_SESSION['admin'];

         }elseif ($_SESSION['user']) {
              $user_l=$_SESSION['user'];
         }

         $sql_u = $koneksi->query("select* from tb_user where id='$user_l'");
         $data_u = $sql_u->fetch_assoc();

         $user = $data_u['nama'];



 ?>

<div class="row">
    <div class="col-md-6" >
        <!-- Form Elements -->
        <div class="box box-success box-solid">
              <div class="box-header with-border">
                Tambah Data Absensi
            </div>
            <div class="panel-body" >
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="POST" enctype="multipart/form-data" >

                        	 <div class="form-group">
                                <label>Nama :</label>
                                <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control"  >
                            </div>
                            

                             <div class="form-group">
	                                  <label>absen :</label>
	                                  <textarea class="form-control" rows="3" name="alamat"><?php echo $data['absen'] ?></textarea>
	                            </div>

	                          <div class="form-group">
                                <label>absen saat :</label>
                                <input type="text" name="telp" value="<?php echo $data['ab_saat'] ?>" class="form-control" >
                            </div>  

	                        <label> Absen</label><!-- 2 -->
                                 <select class="form-control" name="absen">

                                         <option>--Pilih absen--</option>

                                         <option value="H">Hadir</option>
                                        <option value="S">Sakit</option>
                                        <option value="I">Izin</option>
                                                         
                                 </select>

                                 <br>

                                 <label> Absen Saat :</label><!-- 3 -->
                                 <select class="form-control" name="ab_saat">

                                         <option>--Pilih saat--</option>

                                         <option value="Pagi">Datang</option>
                                         <option value="Siang">Pulang</option>
                                                         
                                 </select>

                                 <br>

					 		              <div class="form-group">
                                <label>Keterangan :</label>
                                <input type="text" name="ket" class="form-control" id="nama" data-toggle="modal" data-target="#modal-default" value="<?php echo $data['ket'] ?>"   readonly="">
                            </div>

                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" name="tanggal" class="form-control" readonly=""  value="<?php echo $data['tanggal'] ?>">
                            </div>

                             <div class="form-group">
                                <label>Jam :</label>
                                <input type="time" name="jam" class="form-control" id="nama" readonly="" value="<?php echo $data['jam']; ?>"  >
                            </div>

					 		                <div class="form-group">
	                                  <label>Jadwal Kegiatan :</label>
	                                  <textarea class="form-control" rows="3" name="perlu"><?php echo $data['id_jadwal'] ?></textarea>
	                            </div>
                            
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                            <input type=button value=Kembali onclick=self.history.back() class="btn btn-info" />
	
						</form>

       

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                 <center><h4 class="modal-title" id="myModalLabel">Pilih jadwal</h4></center>
              </div>
              <div class="modal-body">
                <table class="table table-striped table-bordered table-hover" id="example1">
                                    <thead>
                                        <tr>
                                           
                                           <th>ID</th>
                                            <th>TANGGAL</th>
                                            <th>NAMA</th>
                                            
                                          
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            

                                            $sql = $koneksi->query("select * from tb_jadwal ");

                                            while ($r= $sql->fetch_assoc()) {





                                       echo"
											<tr style='cursor:pointer' class='pilih' data-nama='$r[nma_kegt]'>
												
												<td>$r[id]</td>
                        <td>$r[tanggal]</td>
												<td>$r[nma_kegt]</td>
											</tr> 
					 
											";
										}
										?>

                                    </table>     

              </div>
              
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
        </script>
        


         <script type="text/javascript">

//            jika dipilih, nim akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                
                
                document.getElementById("nama").value = $(this).attr('data-nama');
                $('#modal-default').modal('hide');
            });
            

//            tabel lookup mahasiswa
            $(function () {
                $("#lookup").dataTable();
            });
        </script> 


       
<?php

    if (isset($_POST['simpan'])) {


        $nama = $_POST['nama'];
        $absen = $_POST['absen'];
        $ab_saat = $_POST['ab_saat'];
        $ket = $_POST['ket'];
        $jdwl_kegt = $_POST['jdwl_kegt'];
        $tanggal= $_POST['tanggal'];
        $jam= $_POST['jam'];
        


    $koneksi->query("UPDATE  tb_absen SET  nama='$nama', absen='$absen', ab_saat='$ab_saat', ket='$ket', jdwl_kegt='$jdwl_kegt', tanggal='$tanggal', jam='$jam'  where id_ab='$id_ab'");

      ?>
           <script>
            setTimeout(function() {
                swal({
                    title: "Selamat!",
                    text: "Data Berhasil Diubah!",
                    type: "success"
                }, function() {
                    window.location = "?page=d_absen";
                });
            }, 300);
        </script>
        <?php



    }

 ?>


