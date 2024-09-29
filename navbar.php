<?php
        include "koneksi.php";
        $sql="SELECT servis, produk, about, team, contact, logo FROM tblnavbar";
        $hasil=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($hasil)){  
        $servis=$row['servis'];
        $produk=$row['produk'];
        $about=$row['about'];
        $team=$row['team'];
        $contact=$row['contact'];
        $logo=$row['logo'];    
    }
        ?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-danger" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="assets/img/<?php echo $logo ?>" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#services"><?php echo $servis ?></a></li>
                <li class="nav-item"><a class="nav-link" href="#produk"><?php echo $produk ?></a></li>
                <li class="nav-item"><a class="nav-link" href="#about"><?php echo $about ?></a></li>
                <li class="nav-item"><a class="nav-link" href="#ulasan"><?php echo $team ?></a></li>
                <li class="nav-item"><a class="nav-link" href="#footer"><?php echo $contact ?></a></li>
                <li class="nav-item"><a class="nav-link" href="news.php">NEWS</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="news.php">
                        <img src="gambar/cart.svg" class="navbar-icon" alt="Cart Icon" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function(){
        $('.nav-link[href^="#"]').on('click', function(e) {
            e.preventDefault();
            
            var target = this.hash;
            var $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - $('.navbar').outerHeight()
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });
    });
</script>
