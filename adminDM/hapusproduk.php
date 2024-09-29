<?php
include "koneksi.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Tangkap kiriman dari laporan berupa nomor id yang akan dihapus
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die('Data tidak ditemukan!');
}

// Menentukan nama Fieldnya dari tabel yang akan dihapus datanya
$sql = "DELETE FROM tblproduk WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo '<script language="javascript">';
    echo 'alert("Data tidak berhasil dihapus!")';
    echo '</script>';
    echo '<script language="javascript">';
    echo 'window.location.href = "produk.php"';
    echo '</script>';
} else {
    echo '<script language="javascript">';
    echo 'alert("Data berhasil dihapus!")';
    echo '</script>';
    echo '<script language="javascript">';
    echo 'window.location.href = "produk.php"';
    echo '</script>';
}
?>
