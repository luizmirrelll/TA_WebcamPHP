<?php 
    
    $id_ab = $_GET['id'];// SAYA MAU CEK LAGI

    $sql = $koneksi->query("select * from tb_absen where id_ab = '$id_ab'");
    $data=$sql->fetch_assoc();
    $absen=$data['absen'];
      if ($absen=="Hadir") {
     $jadi=H;
       }
     if ($absen=="Sakit") {
      $jadi=S;
        }
      if ($absen=="Izin") {
      $jadi=I;
         }
     //$absen = ($data['absen']==H)?"Hadir":"Sakit":"Izin";
     $ab_saat = ($data['ab_saat']==Datang)?"Datang":"Pulang";     
    

 ?>
    <section class="content-header">
      <h1>
        <input type="button" value="Cetak" onClick="window.print()"><br><br>
        Detail Absensi
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-9">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img   src="upload/<?php echo $data['foto'] ?>" width="750" height="400"  style="text-align: center; margin-left: px; ">

              <h3 class="profile-username text-center"><?php echo $data['nama'] ?></h3>

              
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Absen</b> <a class="pull-right"><?php echo $absen ?></a>
                </li>
                <li class="list-group-item">
                  <b>Absen Saat</b> <a class="pull-right"><?php echo $ab_saat?></a>
                </li>
                <li class="list-group-item">
                  <b>Jadwal Kegiatan</b> <a class="pull-right"><?php echo $data['id_jadwal'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Keterangan</b> <a class="pull-right"><?php echo $data['ket']; ?></a>

                </li>
                 <li class="list-group-item">
                  <b>Tanggal</b> <a class="pull-right"><?php   echo date('d F Y', strtotime($data['tanggal'])) ?></a>
                  
                </li>

                 <li class="list-group-item">
                  <b>Jam</b> <a class="pull-right"><?php   echo $data['jam'] ?></a>
                  
                </li>



              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          

          