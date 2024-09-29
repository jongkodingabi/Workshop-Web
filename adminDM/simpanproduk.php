<?php
   include "koneksi.php";

    if(isset ($_POST['simpan'])) {
     $gambar1=$_POST['gambar1'];
     $namaproduk1=$_POST['namaproduk1'];
     $harga1=$_POST['harga1'];
     $stock=$_POST['stock'];
     $sql1="INSERT INTO tblproduk (gambar1, namaproduk1, harga1, stock) VALUES (
     '$gambar1', '$namaproduk1', '$harga1', '$stock')";
     $hasil1=mysqli_query($conn, $sql1);
      }
      if (!$hasil1) {
      echo '<script language="javascript">';
      echo 'alert("Data Berhasil Disimpan!")';
      echo '</script>';
      echo '<script language="javascript">';
      echo 'window.location.href ="produk.php"';
      echo '</script>';
      } else {
      echo '<script language="javascript">';
      echo 'alert("Data Berhasil Disimpan!")';
      echo '</script>';
      echo '<script language="javascript">';
      echo 'window.location.href ="produk.php"';
      echo '</script>';
      }
 ?>