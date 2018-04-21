<?php
include "../../config/koneksi.php";
include "../../config/functions.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Match Me</title>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/smooth-scroll.js"></script>
    <script src="../js/lightbox.min.js"></script>
    <script src="../js/main.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
    <link rel="stylesheet" media="screen" href="../fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../extras/animate.css">
    <link rel="stylesheet" type="text/css" href="../extras/lightbox.css">

  </head>

<body data-spy="scroll" data-offset="20" data-target="#navbar">
<!-- Nav Menu Section -->
<div class="logo-menu">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="50">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header col-md-3">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        <img alt="MatchMe" src="../img/logo.png" id="logo-index">
      </a>
    </div>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
        <li class="active"><a href="#hero-area"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#services"><i class="fa fa-cogs"></i> Services</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info Jurusan </a>
          <ul class="dropdown-menu">
            <li><a href="#"> Sains</a></li>
            <li><a href="#"> Kesehatan</a></li>
            <li><a href="#"> Teknik</a></li>
            <li><a href="#"> Pertanian</a></li>
            <li><a href="#"> Sosial</a></li>
            <li><a href="#"> Bahasa</a></li>
            <li><a href="#"> Lain-lain</a></li>
            <li><a href="#"> Semua Jurusan</a></li>
          </ul>
        </li>
        <li><a href="tes.php?page=1"><i class="fa fa-home"></i> Tes</a></li>
        <li><a href="#about"><i class="fa fa-info"></i> About</a></li>
        <li><a href="#contact"><i class="fa fa-envelope"></i> Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
<?php
    if(empty($_SESSION['username']) || !isset($_SESSION['matchme'])) {
?>
    <li><a href="login.php">Masuk</a></li>
    <li><a href="register.php">Daftar</a></li>    

<?php
}
?>

<?php
    if(!empty($_SESSION['username']) && isset($_SESSION['matchme'])) {
       if($_SESSION['role'] == 0){
?>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hai, <b><?php echo $_SESSION['username']; ?></b> <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profil</a></li>
        <li><a href="action/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
      </ul>
    </li>
<?php
}
}
?>
  </ul>
    </div>

  </div>
</nav>
</div>
<!-- Nav Menu Section End -->
 <section id="kategori">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Ingin Kuliah Di Kampus Favorite?</h2>
                        <p>Kamu tidak perlu repot mencari buku kumpulan soal-soal 2018 dimana-mana.<br>
                Karena MatchMe menyediakan buku yang bagus dan cocok buat kamu.<br>
                Kamu bisa membelinya secara online disini.
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="col-md-6 buku-jual">
                             <a href="buku_detail.php?id=0001&judul=Strategi Sukses SBMPTN Saintek 2018&harga=Rp.80.000"><img src="../img/buku/buku1.jpg" class="thumbnail" id="info-buku"></a>
                               <center><h5>Strategi Sukses SBMPTN Saintek 2018</h5>
                                    <h5><b>Rp 80.0000</b></h5></center>

                                    <a href="buku_detail.php?id=0001&judul=Strategi Sukses SBMPTN Saintek 2018&harga=Rp.80.000" class="btn btn-default add-to-cart" style="color:red;"><i class="fa fa-shopping-cart"></i>Pesan</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="col-md-6 buku-jual">
                             <a href="buku_detail.php?id=0002&judul=Strategi Sukses SBMPTN SOSHUM 2018&harga=Rp.76.000"><img src="../img/buku/buku2.png" class="thumbnail" id="info-buku"></a>
                               <center><h5>Strategi Sukses SBMPTN SOSHUM 2018</h5>
                                    <h5><b>Rp.76.0000</b></h5></center>

                                    <a href="buku_detail.php?id=0002&judul=Strategi Sukses SBMPTN SOSHUM 2018&harga=Rp.76.000" class="btn btn-default add-to-cart" style="color:red;"><i class="fa fa-shopping-cart"></i>Pesan</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="col-md-6 buku-jual">
                            <a href="buku_detail.php?id=0003&judul=99,9% Lolos USM PKN STAN 2018&harga=Rp.85.000"><img src="../img/buku/buku5.jpg" class="thumbnail" id="info-buku"></a>
                               <center><h5>99,9% Lolos USM PKN STAN 2018   </h5>
                                    <h5><b>Rp.85.0000</b></h5></center>


                                    <a href="buku_detail.php?id=0002&judul=99,9% Lolos USM PKN STAN 2018&harga=Rp.85.000" class="btn btn-default add-to-cart" style="color:red;"><i class="fa fa-shopping-cart"></i>Pesan</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="col-md-6 buku-jual">
                             <a href="buku_detail.php?id=0003&judul=Pencetak Rekor Ribuan Juara, Kumpulan Soal USM STAN &harga=Rp.80.000"><img src="../img/buku/stan1.png" class="thumbnail" id="info-buku"></a>
                               <center><h5>Pencetak Rekor Ribuan Juara,Kumpulan Soal USM STAN</h5>
                                    <h5><b>Rp.80.0000</b></h5></center>

                                    <a href="buku_detail.php?id=0003&judul=Pencetak Rekor Ribuan Juara,Kumpulan Soal USM STAN&harga=Rp.80.000" class="btn btn-default add-to-cart" style="color:red;"><i class="fa fa-shopping-cart"></i>Pesan</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-3" style="margin-top: 50px;">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="col-md-6 buku-jual">
                             <a href="buku_detail.php?id=0004&judul=Bahas Tuntas Kisi-Kisi SBMPTN SAINTEK 2018 &harga=Rp.75.000"><img src="../img/buku/buku4.jpg" class="thumbnail" id="info-buku"></a>
                               <center><h5>Bahas Tuntas Kisi-Kisi SBMPTN SAINTEK 2018</h5>
                                    <h5><b>Rp.75.0000</b></h5></center>

                                    <a href="buku_detail.php?id=0004&judul=Bahas Tuntas Kisi-Kisi SBMPTN SAINTEK 2018&harga=Rp.75.000" class="btn btn-default add-to-cart" style="color:red;"><i class="fa fa-shopping-cart"></i>Pesan</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-3" style="margin-top: 50px;">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="col-md-6 buku-jual">
                               <a href="buku_detail.php?id=0004&judul=The King Bedah Kisi-Kisi SBMPTN SAINTEK 2018 &harga=Rp.75.000"><img src="../img/buku/buku3.jpg" class="thumbnail" id="info-buku"></a>
                               <center><h5>The King Bedah Kisi-Kisi SBMPTN SAINTEK 2018</h5>
                                    <h5><b>Rp.75.0000</b></h5></center>

                                   <a href="buku_detail.php?id=0004&judul=The King Bedah Kisi-Kisi SBMPTN SAINTEK 2018&harga=Rp.75.000" class="btn btn-default add-to-cart" style="color:red;"><i class="fa fa-shopping-cart"></i>Pesan</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                   <div class="col-sm-3" style="margin-top: 50px;">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="col-md-6 buku-jual">
                               <a href="buku_detail.php?id=0005&judul=Bahas Tuntas Kisi-Kisi SBMPTN SOSHUM 2018 &harga=Rp.80.000"><img src="../img/buku/buku6.jpg" class="thumbnail" id="info-buku"></a>
                               <center><h5>Bahas Tuntas Kisi-Kisi SBMPTN SOSHUM 2018</h5>
                                    <h5><b>Rp.80.0000</b></h5></center>

                                   <a href="buku_detail.php?id=0005&judul=Bahas Tuntas Kisi-Kisi SBMPTN SOSHUM 2018&harga=Rp.80.000" class="btn btn-default add-to-cart" style="color:red;"><i class="fa fa-shopping-cart"></i>Pesan</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>


                    <div class="col-sm-3" style="margin-top: 50px;">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="col-md-6 buku-jual">
                               <a href="buku_detail.php?id=0006&judul=Bahas Tuntas Kisi-Kisi SBMPTN SOSHUM 2018 &harga=Rp.80.000"><img src="../img/buku/buku6.jpg" class="thumbnail" id="info-buku"></a>
                               <center><h5>Bahas Tuntas Kisi-Kisi SBMPTN SOSHUM 2018</h5>
                                    <h5><b>Rp.80.0000</b></h5></center>

                                   <a href="buku_detail.php?id=0006&judul=Bahas Tuntas Kisi-Kisi SBMPTN SOSHUM 2018&harga=Rp.80.000" class="btn btn-default add-to-cart" style="color:red;"><i class="fa fa-shopping-cart"></i>Pesan</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    

                    
                    


                    <!--/category-tab-->
                </div>
        </section>
      