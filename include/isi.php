<?php

    $page = $_GET['page'];//isi merupakan aksi aksi apa saja yang ada di aplikasi
    $aksi = $_GET['aksi'];

    if ($page == "pengguna") {
      if ($aksi == "") {
        include "page/pengguna/pengguna.php";
      }
      if ($aksi == "tambah") {
        include "page/pengguna/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/pengguna/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/pengguna/hapus.php";
      }
    }

    if ($page == "jdwl_kerja") {//<!-- SUDAH DICEK -->
      if ($aksi == "") {
        include "page/jdwl_kerja/jadwal.php";
      }
      if ($aksi == "tambah") {
        include "page/jdwl_kerja/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/jdwl_kerja/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/jdwl_kerja/hapus.php";
      }
    }

    if ($page == "u_kerja") {
      if ($aksi == "") {
        include "page/u_kerja/u_kerja.php";
      }
      if ($aksi == "tambah") {
        include "page/u_kerja/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/u_kerja/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/u_kerja/hapus.php";
      }
    }

    if ($page == "absen") {// <!-- SUDAH DICEK -->
      if ($aksi == "") {
        include "page/absen/capture.php";
      }
      if ($aksi == "tambah") {
        include "page/absen/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/absen/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/absen/hapus.php";
      }

    }

    if ($page == "d_absen") {//<!-- SUDAH DICEK -->
      if ($aksi == "") {
        include "page/absen/d_absen.php";
      }
      if ($aksi == "detail") {
        include "page/absen/detail.php";
      }
      if ($aksi == "ubah") {
        include "page/absen/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/absen/hapus.php";
      }

      if ($aksi == "upload") {
        include "upload.php";
      }

    }

    if ($page == profile) {
      if ($aksi == "") {
      include "page/profile/profile.php";
      }
    }

     if ($page == "") {
      include "home.php";
    }


 ?>
