<!-- Sidebar user panel -->
<div class="user-panel">
  <div>
  <img style="margin-left:30px" src="images/pbb.png" width="140" height="120" >
    
      
  </div>
  <div class="pull-left info">


  </div>
</div>
<!-- search form -->
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>


 <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>


<?php if(@$_SESSION['admin']){//hanya ada pada login admin
  ?>
<li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
             <li><a href="?page=u_kerja"><i class="fa fa-bars"></i> Unit Kerja</a></li>
             <li><a href="?page=jdwl_kerja"><i class="fa fa-users"></i>Jadwal Kerja</a></li>
          </ul>
        </li>
        <li>
<?php } ?>
 
  
<li><a href="?page=d_absen"><i class="fa fa-viacoin"></i><span>Data Absensi</span></a></li>

  
  
<?php if(@$_SESSION['admin']){
 ?> 
  <li><a href="?page=pengguna"><i class="fa fa-user"></i> <span>Data Pengguna </span></a></li>

<?php } ?>
<?php if(@$_SESSION['user']){
 ?>
<li><a href="?page=jdwl_kerja"><i class="fa fa-bars"></i> <span>Jadwal kerja </span></a></li> <!--MASIH UJI COBA UNTUK MENU USER--> 
<?php } ?>
</ul>
