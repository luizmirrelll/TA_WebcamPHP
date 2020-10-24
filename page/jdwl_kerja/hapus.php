<?php

	

	$koneksi->query("delete from tb_jadwal where ='$_GET[tanggal]'");//<!-- SUDAH DICEK -->

	



?>


<script>
    setTimeout(function() {
        sweetAlert({
            title: 'OKE!',
            text: 'Data Berhasil Dihapus!',
            type: 'error'
        }, function() {
            window.location = '?page=jdwl_kerja';//<!-- SUDAH DICEK -->
        });
    }, 300);
</script>
 