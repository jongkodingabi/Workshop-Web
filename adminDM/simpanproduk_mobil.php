<?php
   include "koneksi.php";

    if(isset ($_POST['simpan'])) {
     $gambar=$_POST['gambar'];
     $produk=$_POST['produk'];
     $harga=$_POST['harga'];
     $sql1="INSERT INTO tblprodukmobil (gambar, produk, harga) VALUES (
     '$gambar', '$produk', '$harga')";
     $hasil1=mysqli_query($conn, $sql1);
      }
      if (!$hasil1) {
      echo '<script language="javascript">';
      echo 'alert("Data Berhasil Disimpan!")';
      echo '</script>';
      echo '<script language="javascript">';
      echo 'window.location.href ="produkmobil.php"';
      echo '</script>';
      } else {
      echo '<script language="javascript">';
      echo 'alert("Data Berhasil Disimpan!")';
      echo '</script>';
      echo '<script language="javascript">';
      echo 'window.location.href ="produkmobil.php"';
      echo '</script>';
      }
 ?>