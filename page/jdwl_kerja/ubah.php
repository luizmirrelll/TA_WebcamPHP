<?php

    $tanggal = $_GET['tanggal'];//<!-- SUDAH DICEK -->

    $sql = $koneksi->query("select * from tb_jadwal where tanggal='$tanggal'");//<!-- SUDAH DICEK -->
    $tampil = $sql->fetch_assoc();

 ?>

<div class="row">
    <div class="col-md-12" >
        <!-- Form Elements -->
        <div class="panel panel-primary" >
            <div class="panel-heading">
                Ubah jadwal kerja
            </div>
            <div class="panel-body" >
                <div class="row">
                    <div class="col-md-6">
                        <form role="form" method="POST" enctype="multipart/form-data" >


                            <div class="form-group"><!-- SUDAH DICEK -->
                                <label>tanggal :</label>
                                <input type="date" class="form-control" name="tanggal" value="<?php echo $tampil['tanggal'] ?>" />
                            </div>

                             <div class="form-group"><!-- SUDAH DICEK -->
                                <label>Nama kegiatan : </label>
                                <input type="text" class="form-control" name="nma_kegt" value="<?php echo $tampil['nma_kegt'] ?>" />
                             </div>
                             <div class="form-group"><!-- SUDAH DICEK -->

			                            <label> Unit Kerja :</label>
			                            <select class="form-control" name="u_kerja">

										<option>--Pilih Unit Kerja--</option>
			                                        <?php


			                                            $query = $koneksi->query("SELECT * FROM t_u_kerja ORDER by id");

			                                            while ($data=$query->fetch_assoc()) {
                                                    $pilih=($data['id']==$tampil['id_u_kerja']?"selected":"");
			                                              echo "<option value='$data[id]' $pilih> $data[u_kerja]</option>";
			                                            }

			                                        ?>

			                            </select>
	                        		</div>

                                <div class="form-group"><!-- SUDAH DICEK -->
                                <label>Keterangan : </label>
                                <input type="text" class="form-control" name="ket_jad" value="<?php echo $tampil['ket_jad'] ?>" />
                             </div>


                      <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
			                <input type=button value=Kembali onclick=self.history.back() class="btn btn-info" />
                </form>

<?php

	if (isset($_POST['simpan'])) {

        $tanggal = $_POST['tanggal'];//<!-- SUDAH DICEK -->

		$nma_kegt = $_POST['nma_kegt'];//<!-- SUDAH DICEK -->
		
		$u_kerja = $_POST['u_kerja'];//<!-- SUDAH DICEK -->

        $ket_jad = $_POST['ket_jad'];//<!-- SUDAH DICEK -->
	

    $koneksi->query("UPDATE  tb_jadwal SET tanggal='$tanggal', nma_kegt='$nma_kegt', id_u_kerja='$u_kerja', ket_jad='$ket_jad' where id='$id'");//<!-- SUDAH DICEK -->

    

      ?>
             <script>//<!-- SUDAH DICEK -->
            setTimeout(function() {
                swal({
                    title: "Selamat!",
                    text: "Data Berhasil Diubah!",
                    type: "success"
                }, function() {
                    window.location = "?page=jdwl_kerja";
                }); 
            }, 300);
        </script>
        <?php

  


	}

 ?>
