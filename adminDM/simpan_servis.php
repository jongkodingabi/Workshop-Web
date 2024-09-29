<?php
   include "koneksi.php";

    if(isset ($_POST['simpan'])) {
     $gambar1=$_POST['gambar1'];
     $judul=$_POST['judul'];
     $subjudul=$_POST['subjudul'];
     $sql1="INSERT INTO tblservis (gambar1, judul, subjudul) VALUES (
     '$gambar1', '$judul', '$subjudul')";
     $hasil1=mysqli_query($conn, $sql1);
      }
      if (!$hasil1) {
      echo '<script language="javascript">';
      echo 'alert("Data Berhasil Disimpan!")';
      echo '</script>';
      echo '<script language="javascript">';
      echo 'window.location.href ="servis.php"';
      echo '</script>';
      } else {
      echo '<script language="javascript">';
      echo 'alert("Data Berhasil Disimpan!")';
      echo '</script>';
      echo '<script language="javascript">';
      echo 'window.location.href ="servis.php"';
      echo '</script>';
      }
 ?>