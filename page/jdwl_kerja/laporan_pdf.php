<?php
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$koneksi = new mysqli  ("localhost","root","","pts_pbb");
$content ='

<style type="text/css">

	.tabel{border-collapse: collapse;}
	.tabel th{padding: 8px 5px;  background-color:  #cccccc;  }
	.tabel td{padding: 8px 5px; font-size:10px;    }
</style>


';

    $tgl4 = date("d-m-Y");
    $content .= '

<page>
    <h3 style="text-align:center;">jadwal kerja  </h3>



    <table border="1px" class="tabel" align="center">

    		<tr>
          <th>No</th>
          <th>tanggal</th>
          <th>Nama kegiatan</th>
          <th>Unit kerja</th>
          <th>Keterangan</th>

    		</tr>';



        		$no = 1;
              $sql = $koneksi->query("select * from tb_jadwal, t_u_kerja where tb_jadwal.id_u_kerja=t_u_kerja.id");
        		while ($data=$sql->fetch_assoc()) {


    		$content .='

    		<tr>
    			<td>'.$no++.' </td> 
    			<td> '.$data['tanggal'].' </td>
          <td> '.$data['nma_kegt'].' </td>
    			<td> '.$data['u_kerja'].' </td>
    			<td> '.$data['ket_jad'].' </td>
    		</tr>

    		';

    		}




$content .='
    </table>


</page>';

    require_once('../../assets/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('jadwalkerja.pdf');
?>
