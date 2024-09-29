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
        <link href="css/style2.css" rel="stylesheet" />
        <link href="css/produk.css" rel="stylesheet" />
        <link href="css/formbaru1.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/servis1.css">
        <link href="css/border.css" rel="stylesheet" />
        <link href="css/produkmobil.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <!--animasi scroll-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <style>
       <style>
        @media (max-width: 768px) {
            .masthead .masthead-heading {
                font-size: 1.5rem;
            }
            .masthead .masthead-subheading {
                font-size: 1rem;
            }
            .portfolio-item img {
                width: 100%;
                height: auto;
            }
        }
        @media (max-width: 576px) {
            .masthead .masthead-heading {
                font-size: 1.2rem;
            }
            .masthead .masthead-subheading {
                font-size: 0.9rem;
            }
            .portfolio-item img {
                width: 100%;
                height: auto;
            }
            .text-title {
                font-size: 1rem;
            }
            .text-muted {
                font-size: 0.9rem;
            }
        }
        @media (max-width: 992px) {
            .portfolio-item img {
                width: 100%;
                height: auto;
            }
            .masthead .masthead-heading {
                font-size: 2rem;
            }
            .masthead .masthead-subheading {
                font-size: 1.5rem;
            }
            .text-title {
                font-size: 1.2rem;
            }
            .text-muted {
                font-size: 1rem;
            }
            .container .row .col-lg-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        @media (max-width: 1200px) {
            .masthead .masthead-heading {
                font-size: 2.5rem;
            }
            .masthead .masthead-subheading {
                font-size: 1.75rem;
            }
        }
        .portfolio-item {
            margin-bottom: 30px;
        }
        .jajaran {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .kotak, .card, .kartu, .box {
            margin: 0 auto;
            max-width: 100%;
        }
        .navbar-icon {
    width: 30px; /* Atur ukuran sesuai kebutuhan */
    height: 30px; /* Atur ukuran sesuai kebutuhan */
}

.nav-item .nav-link {
    padding: 0.5rem; /* Sesuaikan padding agar tidak terlalu besar */
}

    </style>
    <body id="page-top" class="sr">
        <!-- Navigation-->
        <?php
        include "navbar.php";
        ?>
        <!-- Masthead-->
<?php
        include "koneksi.php";
        $sql="SELECT judul, subjudul FROM tblheader";
        $hasil=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($hasil)){  
        $judul=$row['judul'];
        $subjudul=$row['subjudul'];

            }
        ?>
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase" style="color: yellow;"><?php echo $judul ?></div>
                <div class="masthead-subheading"><?php echo $subjudul ?></div>
               <a href="#why" class="btn41-43 btn-41">Selengkapnya</a>
            </div>
        </header>

        <!--mengapa harus daniel motor-->
        <?php
        include "koneksi.php";
        $sql="SELECT * FROM tblwhy";
        $hasil=mysqli_query($conn,$sql); 
        ?>
        <section class="page-section bg-warning" id="why">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Mengapa Harus Daniel Motor</h2>
                    <h3 class="section-subheading text-white">Berikut adalah Keunggulan Kami</h3>
                </div>
                <div class="row text-center">
                <?php
                while($row1=mysqli_fetch_array($hasil)){ 
                    ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portofolio-item">
                    <div class="border">
                    <img src="gambar/<?php echo $row1["icon"]; ?>" />
                    <h4 class="my-3"><?php echo $row1["judul"]; ?></h4>
                        <p class="text-muted"><?php echo $row1["why"]; ?></p>
                    </div>
                    </div>  
                </div>
            <?php
            }
            ?>
             </div>
                </div>
                </div>
        </section>
         <!-- About-->
         <?php
        include "koneksi.php";
        $sql="SELECT * FROM tbltentang";
        $hasil=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($hasil)){  
        ?>
        <link rel="stylesheet" href="css/style3.css">
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo $row["judul"];?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $row["subjudul"];?></h3>
                </div>
                <div class="jajaran">
                <img src="gambar/<?php echo $row["gambar"];?>" style="width: 200px; height: 200px;"/>
                <p class="about"><?php echo $row["tentang"];?></p>
                </div>
            </div>
        <?php
        }
        ?>
</div>
        </section>
        <!-- Services-->
        <?php
        include "koneksi.php";
        $sql="SELECT * FROM tblservis";
        $hasil=mysqli_query($conn,$sql); 
        ?>
        <section class="page-section bg-danger" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">SERVICES</h2>
                    <h3 class="section-subheading text-white">menyediakan berbagai layanan dan jasa</h3>
                </div>
                    <center>
                <div class="row">
                <?php
                while($row=mysqli_fetch_array($hasil)){ 
                    ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <div class="jajaran">
                        <center>
                        <img src="gambar/<?php echo $row["gambar1"];?>" width="350" height="300">
                        <div class="kartu">
                        <div class="kartu-info">
                        <div class="kartu-title text-dark" style="margin-bottom: 10px;"><?php echo $row["judul"];?></div>
                        <div class="kartu-subtitle text-dark" style="font-size: 16px;"><?php echo $row["subjudul"];?></div>
                    </div> 
                </div>
            </div>
            </div>
        </div>
        <?php
            }
            ?>
        </div>
        </div>
            </center>
        </section>
<!-- Produk Mobil-->
 <?php
        include "koneksi.php";
        $sql="SELECT * FROM tblprodukmobil";
        $hasil=mysqli_query($conn,$sql); 
        ?>
        <section class="page-section bg-light" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Produk Mobil</h2><br><br>
                </div>  
                <center><p>*pemesanan produk ini hanya dilakukan di tempat*</p></center>
                    <center>
                <div class="row">
                <?php
                while($row=mysqli_fetch_array($hasil)){ 
                    ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <div class="jajaran">
                        <center>
                        <div class="kotak">
                        <img src="gambar/<?php echo $row["gambar"];?>" style="width: 250px; height: 250px;" /> 
                        <div class="kotak-info">
                        <p class="text-title"><?php echo $row["produk"];?></p>
  </div>
  <div class="kotak-footer">
  <span class="text-title"><?php echo $row["harga"];?></span>
      </div>
    </div>
    </div>
            </div>
            </div>
            <?php
            }
         ?>
        </div>
        </div>
        </div>
            </center>
        </section>
        <!-- Produk Grid-->
        <?php
        include "koneksi.php";
        $sql="SELECT * FROM tblproduk";
        $hasil=mysqli_query($conn,$sql); 
        ?>
        <section class="page-section bg-warning" id="produk">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">PRODUK</h2>
                    <h3 class="section-subheading text-muted">Berikut produk dari kami</h3>
                </div>
                <div class="row">
                <?php
             while($row = mysqli_fetch_assoc($hasil)) {
            ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Produk item-->
                        <center>
                        <div class="portfolio-item">
                        <div class="card">
                        <div class="portfolio-caption">
                        <img class="img-fluid" src="gambar/<?php echo $row["gambar1"];?>" width="200px;" height="300px"; alt="..." />
                                <div class="portfolio-caption-heading"><?php echo $row["namaproduk1"];?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $row["harga1"];?></div>
                                <div class="portfolio-caption-subheading text-muted">Stock: <?php echo $row["stock"];?></div>
                        </div>
                          <!-- Tautan ke halaman detail dengan ID produk -->
                     <a href="detailproduk.php?id=<?php echo $row['id']; ?>" class="btn41-43 btn-41">Lihat detail</a>
                            </div>
                        </div><br>
                    </div>

                    <?php
             }
            ?>

        </center>
        </section>

        <!--pesan produk-->
        <link rel="stylesheet" href="css/formpesanan.css">
<section class="bg-danger">
        <center>
    <div class="contact" id="contact">
<h1 style="margin-bottom: 100px;">Tertarik membeli salah satu Produk kami?</h1>
    <div class="form-container">
        <form id="orderForm"> 
            <table class="form-table" border="0" cellspacing="0" cellpadding="1">
                <tr>
                    <td class="form-td">Nama</td> <td class="form-td"><input type="text" id="nama" class="form-input" required></td>
                </tr>
                <tr>
                    <td class="form-td">Email</td> <td class="form-td"><input type="email" id="email" class="form-input" required></td>
                </tr>
                <tr>
                    <td class="form-td">Jumlah</td> <td class="form-td"><input type="number" id="jumlah" class="form-input" required></td>
                </tr>
                <tr>
                    <td class="form-td">Produk</td> 
                    <td class="form-td">
                    <select id="id" name="namaproduk1" class="form-input" required>
    <?php
    $sql = "SELECT * FROM tblproduk";
    $hasil = mysqli_query($conn, $sql); 
    if (mysqli_num_rows($hasil) > 0) {
        // Output data setiap baris
        while($row = mysqli_fetch_assoc($hasil)) {
            echo '<option value="' . $row["id"] . '" data-nama="' . $row["namaproduk1"] . '">' . $row["namaproduk1"] . '</option>';
        }
    } else {
        echo '<option value="">Tidak ada produk tersedia</option>';
    }
    ?>
</select>
           </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input type="submit" value="Kirim" class="form-submit">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script>
    document.getElementById('orderForm').onsubmit = function(event) {
    event.preventDefault();
    sendMassage();
};

function sendMassage() {
    const nama = document.getElementById('nama').value;
    const email = document.getElementById('email').value;
    const jumlah = document.getElementById('jumlah').value;
    const productSelect = document.getElementById('id');
    const productId = productSelect.value;
    const productName = productSelect.options[productSelect.selectedIndex].getAttribute('data-nama');

    const url = "https://api.whatsapp.com/send?phone=62895355285704&text=Haloo%20AdminDM%0ASaya%20*" + encodeURIComponent(nama) + "*%0AEmail%20*" + encodeURIComponent(email) + "*%0AJumlah%20*" + encodeURIComponent(jumlah) + "*%0AProduk%20*" + encodeURIComponent(productName) + "*";
    
    // Update stok di server dan simpan histori
    fetch('update_stock.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            id: productId,
            quantity: jumlah,
            nama: nama,
            email: email,
            namaproduk1: productName // pastikan ini dikirim
        })
    }).then(response => response.json())
      .then(data => {
          if (data.success) {
              // Buka WhatsApp API jika stok berhasil dikurangi dan histori disimpan
              window.open(url);
          } else {
              alert('Gagal mengurangi stok atau menyimpan histori: ' + data.message);
          }
      }).catch(error => {
          console.error('Error:', error);
          alert('Terjadi kesalahan saat mengurangi stok atau menyimpan histori.');
      });
}

</script>
  </section>
        <!-- Clients-->
        <section>
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/honda.png" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/shell1.png" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/yamaha.png" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/suzuki.jpg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!--ulasan-->
      <center>
<div class="section-ulasan">
    <div class="kontainer">
        <div id="ulasan">
            <div class="box">
                    <br>
                    <h1 style="margin-left: -10px; margin-top:">Berikan Ulasan</h1>
                    <form id="myForm" action="simpanulasan.php" method="post" class="form">
                        <label for="user-email" style="padding-top:13px">&nbsp;Email</label>
                        <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
                        <div class="form-border"></div>
                        <label for="user-name" style="padding-top:13px">&nbsp;Nama</label>
                        <input id="user-name" class="form-content" type="text" name="nama" autocomplete="on" required />
                        <div class="form-border"></div>
                        <label for="user-review" style="padding-top:22px">&nbsp;Ulasan</label>
                        <textarea id="user-review" class="form-content" name="ulasan" rows="4" required></textarea>
                        <div class="form-border"></div>
                        <input type="submit" value="Kirim" name="kirim" id="submit-btn"/>
                    </form>
            </div>
        </div>
        <!-- maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253666.45688523818!2d106.60363078113863!3d-6.5797873112735035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c58351fd80c7%3A0xb47376408b2b9505!2sDaniel%20Motor!5e0!3m2!1sid!2sid!4v1716266726968!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
</center>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        var formData = new FormData(this);
        
        // Submit form data using AJAX
        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Ulasan terkirim",
                    showConfirmButton: false,
                    timer: 1700
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data.message
                });
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!'
            });
            console.error('Error:', error);
        });
    });
</script>
</section>
<section>
        <link href="css/testimoni2.css" rel="stylesheet" />
        <!-- Testimoni-->
        <?php
        include "koneksi.php";
        $sql="SELECT * FROM tbltestimoni LIMIT 3";
        $hasil=mysqli_query($conn,$sql); 
        ?>
        <center><h3 class="section-subheading text-muted">Kata Mereka</h3></center><br>
        <div class="jajaran">
        <?php
             while($row = mysqli_fetch_assoc($hasil)) {
            ?>
            <div class="col-lg-4 col-sm-6 mb-4">
            <!--testimoni-->
            <center>
            <img class="img-fluid" src="gambar/<?php echo $row["gambar"];?>" width="400px" height="400px" alt="..." />
        <div class="testimoni">
    <div class="badan">
      <p class="text">"<?php echo $row["ulasan"];?>"</p><span class="username">-<?php echo $row["nama"];?></span>
    </div> 
    </div>
    </div>
    </center><br>
                <?php
                }
                ?>
                </div>
            </section>
        <!-- Footer-->
        <?php
        include "footer.php";
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
