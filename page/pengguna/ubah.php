<?php

    $id=$_GET['id'];
    $sql = $koneksi->query("select * from tb_user where id='$id'");
    $data = $sql->fetch_assoc();

?>

<div class="panel panel-primary">
<div class="panel-heading">
		Ubah Data Pengguna
 </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST" enctype="multipart/form-data" onsubmit="return validasi(this)" >
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" value="<?php echo $data['username'];?>" />

                                        </div>

                                       

                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" name="nama" id="nama" value="<?php echo $data['nama'];?>" />

                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Handphone</label>
                                            <input class="form-control" name="no_hp" value="<?php echo $data['no_hp'];?>" />

                                        </div>

                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input class="form-control" name="nik" value="<?php echo $data['nik'];?>" />

                                        </div>

                                        <div class="form-group">
                                            <div class="form-group"> <!-- SUDAH DICEK -->
                                            <label>Alamat </label>
                                            <input class="form-control" name="alamat" value="<?php echo $data['alamat'];?>" />
                             
                                            </div>

                                        <div class="form-group">
                                            <label>Level</label>
                                            <input class="form-control" name="level"  id="pass" value="<?php echo $data['level'];?>" readonly/>

                                        </div>

                                        <div class="form-group"><!--- FOTO PROFIL-->
                                            <label>Foto profil</label>
                                            <label><img src='images/<?php echo $data['foto'];?>' width="100" height="75"></label>

                                        </div>

                                        <div class="form-group">
                                            <label>Ganti Foto</label>
                                            <input type="file" name="foto" id="foto" />
                                        </div>

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
 	
 	$nama = $_POST ['nama'];
  $no_hp = $_POST ['no_hp'];
  $nik = $_POST ['nik'];
  $alamat = $_POST ['alamat'];
  $u_kerja = $_POST ['u_kerja'];


    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];


 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
        if (!empty($lokasi)) {

        $upload = move_uploaded_file($lokasi, "images/".$foto);


 		$sql = $koneksi->query("update  tb_user set username='$username',nama='$nama',no_hp='$no_hp',nik='$nik',alamat='$alamat',u_kerja='$u_kerja',foto='$foto' where id='$id'");


 			if ($sql) {
          echo "

              <script>
                  setTimeout(function() {
                      swal({
                          title: 'Selamat!',
                          text: 'Data Berhasil Diubah!',
                          type: 'success'
                      }, function() {
                        
                          window.location = '?page=pengguna';
                          
                      });
                  }, 300);
              </script>

          ";
        }

 	}else{
        $sql = $koneksi->query("update  tb_user set username='$username',  nama='$nama',nik='$nik',alamat='$alamat' where id='$id'");


        if ($sql) {
          echo "

              <script>
                  setTimeout(function() {
                      swal({
                          title: 'Selamat!',
                          text: 'Data Berhasil Diubah!',
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
