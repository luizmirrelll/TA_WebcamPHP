<!-- Content Wrapper. Contains page content -->
  <marquee>Selamat Datang di Permata Buah Batu </marquee>			
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <?php 

    	$sql_t = $koneksi->query("select * from tb_absen ");
    	$data = $sql_t->num_rows;

    	$tgl= date("Y-m-d");
    	$sql_tm = $koneksi->query("select * from tb_absen where tanggal='$tgl'");
    	$data_h = $sql_tm->num_rows;

    	$sql_p = $koneksi->query("select * from tb_jadwal");
    	$data_p = $sql_p->num_rows;

    	$sql_u = $koneksi->query("select * from t_u_kerja");
    	$data_u = $sql_u->num_rows;


     ?>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $data; ?></h3>

              <p>Total Absensi</p>
            </div>
            <div class="icon">
              <i class="ion-social-vimeo"></i>
            </div>
            <a href="?page=d_absen" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $data_h; ?></h3>

              <p>Absensi Hari Ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="?page=d_absen" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $data_p; ?></h3>
              <?php if(@$_SESSION['admin']){//khusus untuk admin
                ?> 
              <p>jadwal kerja</p>
            </div>
            <div class="icon">
              <i class="ion-ios-people"></i>
            </div>
            <a href="?page=jdwl_kerja" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $data_u; ?></h3>
              <?php }//akhir dari session admin ?>
              <?php if(@$_SESSION['admin']){//khusus untuk admin
                ?>
              <p>Unit Kerja</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>

            <a href="?page=u_kerja" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          
        </div>

        </div>
      <?php }//akhir session ?>
        <!-- ./col -->
      </div>