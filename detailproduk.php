<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tblproduk WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
} else {
    echo "ID produk tidak disediakan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content=""/>
        <meta name="author" content="" />
        <title>Workshop - Daniel Motor</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/logodanielmotor.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="css/styles.css" rel="stylesheet" />
        </head>
<body>
<link rel="stylesheet" href="css/produkdetail1.css">
<center>
<div class="card">
    <div>
    <img src="gambar/<?php echo $row["gambar1"];?>" class="card-1"/>
</div>
    <div class="right">
            <div class="card-2">
                <h5 style="margin-top: 10px"><?php echo $row["namaproduk1"];?></h5>
            </div>
            <p><?php echo $row["deskripsi"];?></p>
        </div>
        <div class="bottom">
            <div class="card-4">
            Stock: <?php echo $row["stock"];?>
            </div>
            <div class="card-4">
            Harga: <?php echo $row["harga1"];?>
            </div>
            <div class="card-4">
            </div>
        </div>
    </div>
</div>
