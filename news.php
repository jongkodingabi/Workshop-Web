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
    </head>
    <body id="page-top" class="sr">
        <!-- Navigation-->

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
               <a href="index.php" class="btn41-43 btn-41">Kembali</a>
            </div>
        </div>
        </div>
        </header>

        <section>
    <?php
    include "koneksi.php";
    $sql="SELECT * FROM tblnews";
    $hasil=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($hasil)){  
    ?>
        <div class="container mt-5">
            <h1><?php echo $row["judul"];?></h1>
            <div class="garis mt-3"></div>
            <p class="about text-justify"><?php echo $row["isi"];?></p>
            <hr>
        </div>
    <?php
    }
    ?>
    </section>
                <!-- Clients-->
        <section style="margin-top: -100px;">
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
        </section><br><br>
     <!-- Ulasan-->
     <center>
<div class="section-ulasan">
    <div class="kontainer">
        <div id="ulasan">
            <div class="box">
                    <br>
                    <h1 style="margin-left: -10px;">Berikan Ulasan</h1>
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
                        <input type="submit" value="kirim" name="kirim" id="submit-btn"/>
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
        <br><br><br><br><br><br><br><br>
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
