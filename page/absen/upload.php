<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

include "../../koneksi/koneksi.php";

         if($_SESSION['admin']){
              $user_l=$_SESSION['admin'];

         }elseif ($_SESSION['user']) {
              $user_l=$_SESSION['user'];
         }

         $sql_u = $koneksi->query("select* from tb_user where id_ab='$user_l'");
         $data_u = $sql_u->fetch_assoc();

         $user = $data_u['nama'];

$result = array();
$imagedata = base64_decode($_POST['img_data']);
$filename = md5(date("dmYhisA"));

$filename2 = md5(date("dmYhisA")).'.png';
//Location to where you want to created sign image
$file_name = './doc_signs/'.$filename.'.png';
file_put_contents($file_name,$imagedata);
$result['status'] = 1;
$result['file_name'] = $file_name;


$nama = $_POST['nama'];
$absen = $_POST['absen'];
$ab_saat = $_POST['ab_saat'];
$id_jadwal = $_POST['id_jadwal']; 
$ket = $_POST['ket'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];


$nama_file = time().'.jpg';
$direktori = 'upload/';
$target = $direktori.$nama_file;

move_uploaded_file($_FILES['webcam']['tmp_name'], $target);

if(empty($nama)){
    
echo "
        <script>
            alert('Petugas Tidak Bole kosong');
        </script>


        ";

    
}else{




$sql =$koneksi->query("insert into tb_absen (nama, absen, ab_saat, id_jadwal, ket , tanggal, jam,foto,Petugas, ttd)values('$nama', '$absen', '$ab_saat', '$id_jadwal','$ket', '$tanggal', '$jam', '$nama_file', '$user', '$filename2')");





?>
           <script>
            setTimeout(function() {
                swal({
                    title: "Selamat!",
                    text: "Data Berhasil Disimpan!",
                    type: "success"
                }, function() {
                    window.location = "?page=d_absen";
                });
            }, 300);
        </script>
        <?php

  }      

?> 