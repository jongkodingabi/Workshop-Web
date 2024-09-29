<?php
   include "koneksi.php";

    if(isset ($_POST['simpan'])) {
     $icon=$_POST['icon'];
     $judul=$_POST['judul'];
     $why=$_POST['why'];
     $sql1="INSERT INTO tblwhy (icon, judul, why) VALUES (
     '$icon', '$judul', '$why')";
     $hasil1=mysqli_query($conn, $sql1);
      }
      if (!$hasil1) {
      echo '<script language="javascript">';
      echo 'alert("Data Berhasil Disimpan!")';
      echo '</script>';
      echo '<script language="javascript">';
      echo 'window.location.href ="icon.php"';
      echo '</script>';
      } else {
      echo '<script language="javascript">';
      echo 'alert("Data Berhasil Disimpan!")';
      echo '</script>';
      echo '<script language="javascript">';
      echo 'window.location.href ="icon.php"';
      echo '</script>';
      }
 ?>
