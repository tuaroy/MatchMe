<?php
  include "../../config/koneksi.php";
  include '../../config/functions.php';
  session_start();
    if(empty($_SESSION['username']) || !isset($_SESSION['matchme'])) {
       redirect('login.php');   
    } else {
        if($_SESSION['role'] == 1){
            redirect('login.php');
        }
    }
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
      <a class="navbar-brand" href="index.php"><img alt="MatchMe" src="../img/logo.png" id="logo-other"></a>
    </div>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
        <li><a href="index.php#home"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="index.php#services"><i class="fa fa-cogs"></i> Services</a></li>
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
        <li><a href="index.php#about"><i class="fa fa-info"></i> About</a></li>
        <li><a href="index.php#contact"><i class="fa fa-envelope"></i> Contact</a></li>
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

<!-- Hero Area Section -->
<div class="container col-md-12 konten-tes">
    <div class="col-md-8 tes">
        <h4>Petunjuk Tes</h4>
        <h5>1. Memerlukan waktu kurang dari 12 menit</h5>
        <h5>2. Jawab dengan jujur bahkan ketika anda tidak menyukainya</h5>
        <h5>3. Cobalah untuk menjawab semua pertanyaan</h5>
        <br>    
        <?php
            include 'kuis_show.php';
        ?>  
    </div>

    <div class="col-md-4 nav-kanan container">
        <center>
            <h3>Ingin Kuliah Di Kampus Favorite?</h3>
            <p>Kamu tidak perlu repot mencari buku kumpulan soal-soal 2018 dimana-mana.<br>
                Karena MatchMe menyediakan buku yang bagus dan cocok buat kamu.<br>
                Kamu bisa membelinya secara online disini.
            </p>

            <div class="container-fluid">
                <div class="col-md-6 buku-jual">
                    <a href="buku_detail.php"><img src="../img/buku/buku1.jpg" class="thumbnail" id="info-buku"></a>
                    <h6>Harga : Rp. 80000</h6>
                    
                                    <a href="buku_detail.php?username=<?php echo $id . "&email=" . $email . "&kategori=" . $kate; ?>" class="btn btn-default add-to-cart" style="color:red;"><i class="fa fa-shopping-cart"></i>Pesan</a>
                </div>
                <div class="col-md-6 buku-jual">
                    <a href="#"><img src="../img/buku/buku2.png" class="thumbnail" id="info-buku"></a>
                    <h6>Harga : Rp. 80000</h6>
                   
                                    <a href="buku_detail.php?username=<?php echo $id . "&email=" . $email . "&kategori=" . $kate; ?>" class="btn btn-default add-to-cart" style="color:red;"><i class="fa fa-shopping-cart"></i>Pesan</a>
                </div>
                
               
                <div class="col-md-12">
                    <a href="buku.php">Selengkapnya</a>
                </div>
                
            </div>
                
               
                <div class="col-md-12">
                    <a href="buku.php">Selengkapnya</a>
                </div>
                
            </div>
        </center>
    </div>
    
</div>


<div id="copyright">
<div class="container-fluid">
<div class="col-md-12"><p>© Match Me 2017 All right reserved. Design & Developed by <a href="../../index.php">MatchMe Team</a></p></div>
</div>
</div>
<!-- Copyright Section End-->

</body>
</html>