<?php
	error_reporting(0);
	$koneksi = new mysqli("localhost","root","","pts_pbb");

	$filename ="exel_jdwl_kerja-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename='$filename'");
	header("content-type: application/vnd.ms-exel");


?>

<h2> Data jadwal kerja</h2>

<table border="1px">
	
	<tr>
		<th>No</th>
		<th>tanggal</th>
		<th>Nama kegiatan</th>
		<th>Unit Kerja</th>
		<th>Keterangan</th>
		
	</tr>

	<?php

		$no=1;

		$sql = $koneksi->query("select * from tb_jadwal, t_u_kerja where tb_jadwal.id_u_kerja=t_u_kerja.id");

		while ($data=$sql->fetch_assoc()) {

			
			
		

	?>

	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['tanggal'];?></td>
		<td><?php echo $data['nma_kegt'];?></td>
		<td><?php echo $data['u_kerja'];?></td>
		<td><?php echo $data['ket_jad'];?></td>
		
	</tr>

	<?php } ?>

</table>