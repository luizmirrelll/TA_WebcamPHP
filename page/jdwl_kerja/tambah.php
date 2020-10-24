<div class="row">
    <div class="col-md-6" >
        <!-- Form Elements -->
         <div class="box box-success box-solid">
              <div class="box-header with-border">
                Tambah Jadwal kerja
            </div>
            <div class="panel-body" >
                <div class="row"> 
                    <div class="col-md-12">
                        <form role="form" method="POST" enctype="multipart/form-data" >


                            <div class="form-group"> <!-- SUDAH DICEK -->
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" name="tanggal"  />
                            </div>

                             <div class="form-group"><!-- SUDAH DICEK -->
                                <label>Nama kegiatan : </label>
                                <input type="text" class="form-control" name="nma_kegt" />
                             </div>
							
							<div class="form-group"><!-- SUDAH DICEK -->

			                            <label> Unit Kerja :</label>
			                            <select class="form-control" name="u_kerja">

											<option>--Pilih Unit Kerja--</option>
			                                        <?php


			                                            $query = $koneksi->query("SELECT * FROM t_u_kerja ORDER by id");

			                                            while ($data=$query->fetch_assoc()) {
			                                              echo "<option value='$data[id]'> $data[u_kerja]</option>";
			                                            }

			                                        ?>

			                            </select>
	                        		</div>

	                        	<div class="form-group"><!-- SUDAH DICEK -->
                                <label>keterangan : </label>
                                <input type="text" class="form-control" name="ket_jad" />
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
		


		

		$simpan = $koneksi->query("insert into tb_jadwal(tanggal,nma_kegt,id_u_kerja,ket_jad)values('$tanggal','$nma_kegt','$u_kerja','$ket_jad')");//<!-- SUDAH DICEK -->
		


		if ($simpan) {
			echo "

					<script>
					    setTimeout(function() {
					        swal({
					            title: 'Selamat!',
					            text: 'Data Berhasil Disimpan!',
					            type: 'success'
					        }, function() {
					            window.location = '?page=jdwl_kerja';
					        });
					    }, 300);
					</script>

			";
		

			}

	}

 ?>
