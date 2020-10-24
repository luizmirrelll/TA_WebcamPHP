<?php

	$ambil = $koneksi->query("select * from tb_absen where id_ab='$_GET[id_ab]'");

	$data = $ambil->fetch_assoc();

	$foto_produk=$data['foto'];

	if (file_exists("upload/$foto_produk")) {
		unlink("upload/$foto_produk");
	}

	$koneksi->query("delete from tb_absen where id_ab='$_GET[id_ab]'");





?>
  <script>
      setTimeout(function() {
          sweetAlert({
              title: 'OKE!',
              text: 'Data Berhasil Dihapus!',
              type: 'error'
          }, function() {
              window.location = '?page=d_absen';
          });
      }, 300);
  </script>


<?php

?>
