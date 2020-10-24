<div class="panel panel-primary">
<div class="panel-heading">
		Tambah Data Pengguna
 </div> 
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST" enctype="multipart/form-data"  >
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" id="username" />

                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="pass" type="Password" id="pass" />

                                        </div>

                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" name="nama" id="nama" />

                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Handphone</label>
                                            <input class="form-control" name="no_hp" id="no_hp" />

                                        </div>

                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input class="form-control" name="nik" id="nik" />

                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" id="alamat" />

                                        </div>

                                        <div class="form-group">
                                <label>unit kerja :</label><!-- 5 -->
                                <input type="text" name="u_kerja" class="form-control" id="id" data-toggle="modal" data-target="#modal-default"   readonly="">
                                        </div>

                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" name="foto" id="foto" />
                                        </div>
<!--                                       form unit kerja                                                              -->
                                        <div class="modal fade" id="modal-default">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span></button>
                                             <center><h4 class="modal-title" id="myModalLabel">Pilih unit</h4></center>
                                          </div>
                                          <div class="modal-body">
                                            <table class="table table-striped table-bordered table-hover" id="example1">
                                    <thead>
                                        <tr>
                                           
                                            <th>ID</th>
                                            <th>unit kerja</th>
                                            <th>Keterangan</th>

                                          
                                        </tr>
                                    </thead>
                                    <tbody> 

                                        <?php

                                            

                                            $sql = $koneksi->query("select * from t_u_kerja ");

                                            while ($r= $sql->fetch_assoc()) {





                                       echo"
                                            <tr style='cursor:pointer' class='pilih' data-nama='$r[id]'data-id='$r[u_kerja]' data-id='$r[ket]'>
                                                
                                                <td>$r[id]</td>
                                                <td>$r[u_kerja]</td>
                                                <td>$r[ket]</td>

                                            </tr> 
                     
                                            ";
                                        }
                                        ?>

                                    </table>   

                                        <div>

                                        	<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                                        </div>
                                 </div>

                                 </form>
                              </div> 
 </div>
 </div>
 </div>


 <?php

 	$username = $_POST ['username'];
 	$pass = $_POST ['pass'];
 	$nama = $_POST ['nama'];
  $no_hp = $_POST ['no_hp'];
  $nik = $_POST ['nik'];
  $alamat = $_POST ['alamat'];
  $u_kerja = $_POST ['u_kerja'];


    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$foto);

  $simpan = $_POST ['simpan'];


 	if ($simpan) {
        if ($upload) {



 		$sql = $koneksi->query("insert into tb_user (nama, username, pass, no_hp, nik, alamat,level,u_kerja,foto)values('$nama','$username','$pass','$no_hp','$nik','$alamat','user','$u_kerja','$foto')");


    if ($sql) {
      echo " 

          <script>
              setTimeout(function() {
                  swal({
                      title: 'Selamat!',
                      text: 'Data Berhasil Disimpan!',
                      type: 'success'
                  }, function() {
                      window.location = '?page=pengguna';
                  });
              }, 300);
          </script>

      ";
    }

 	}

     }

 ?>
