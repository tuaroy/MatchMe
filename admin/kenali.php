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
        <li><a href="tes.php"><i class="fa fa-home"></i> Tes</a></li>
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
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hai, <?php echo $_SESSION['username']; ?> <span class="caret"></span></a>
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

<section id="hero-area">
<div class="container">
<div class="row">
<div class="col-md-12">
    
    <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInRight delay-0-5 pull-right" id="pembuka">
    <h2 class="title2">Ingin Kuliah ?</h2>
    <h2 class="title2">Bingung Jurusan Apa?</h2>
    <h2 class="title2">Penasaran jurusan apa yang cocok buat kamu?</h2>
    <br><br><br>
    <a href="#" class="btn btn-common btn-lg">Info Jurusan</a>
    <a href="tes.php" class="btn btn-primary btn-lg">Ikuti Tes</a>
    </div>

</div>

</div>
</div>
</section>

<!-- Hero Area Section End-->



<!-- Service Section -->

<section id="services">
<div class="container text-center">
<div class="row">
<h1 class="title">Services</h1><br><br>
<h3><b>DREAM AS IF YOU'LL LIVE FOREVER LIVE AS IF YOU'LL DIE TOMORROW</b></h3> <br><br>


    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="service-item">
    <img src="../img/services/suitcase.png" alt="">
    <p>Kami akan membantu anda mencari jurusan <br> yang cocok dengan anda</p>
    </div>
    </div>


    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="service-item">
    <img src="../img/services/tasks.png" alt="">
    <p>Kami membuat alat khusus untuk membantu memaksimalkan potensi Anda</p>
    </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="service-item">
    <img src="../img/services/light-bulb.png" alt="">
    <p>Begitu Anda berhasil, kami akan bangga <br> dengan anda</p>
    </div>
    </div>

</div>
</div>
 </section>
<!-- Service Section End -->


<!-- About Section -->

<section id="about">
<div class="container">
<div class="row">
<h1 class="title">About us</h1>
<h2 class="subtitle"></h2>

<div class="col-md-8 col-sm-12">
<p>
Banyak siswa SMA yang akan melanjutkan kuliah akan kebingungan dalam memilih jurusan yang akan diambilnya, tetapi ada juga yang sudah menetapkan pilihannya di suatu jurusan karena sudah mengetahui kemampuan dan passion¬-nya. Namun,ada juga karena fokus pada tingkat kepopuleran jurusan, gaji setelah lulus, dan mengikuti teman atau permintaan orangtua. Pemilihan jurusan juga dipengaruhi oleh seberapa banyak informasi yang diketahui oleh para siswa mengenai jurusan-jurusan di perkuliahan. Minimnya wawasan inilah yang membuat para siswa asal dalam memilih jurusan. Bahkan ada yang berpikir bahwa yang penting mereka bisa kuliah tanpa memikirkan bagaimana mereka menjalani perkuliahan nantinya.</p>
<p>Berdasarkan keterangan diatas kami bermaksud untuk membuat suatu aplikasi berbasis web yaitu MatchMe yang dapat membantu para siswa SMA yang kebingungan menentukan jurusan yang diminati. Aplikasi ini juga didesain untuk memberikan akses kepada calon mahasiswa untuk menguji kemampuan dan kepribadian mereka secara gratis. Aplikasi yang akan dibuat ini akan membantu siswa SMA dalam menentukan jurusan dan kampus/perguruan tinggi yang akan sesuai dengan minat dan bakat mereka.

</p>
</div>

<img class="col-md-4 col-md-4 col-sm-12 col-xs-12" src="../img/logo.png" alt="">

</div>
</div>
</section>
<!-- About Section End -->



<!-- Conatct Section -->
<section id="contact">
<div class="container text-center">
<div class="row">
<h1 class="title">Hubungi Kami</h1>
<br><br>

<form role="form" class="contact-form" method="post">
<div class="col-md-6 wow fadeInLeft" data-wow-delay=".5s">
<div class="form-group">
<div class="controls">
<input type="text" class="form-control" placeholder="Name" name="name">
</div>
</div>
<div class="form-group">
<div class="controls">
<input type="email" class="form-control email" placeholder="Email" name="email">
</div>
</div>
<div class="form-group">
<div class="controls">
<input type="text" class="form-control requiredField" placeholder="Subject" name="subject">
</div>
</div>

<div class="form-group">

<div class="controls">
<textarea rows="7" class="form-control" placeholder="Message" name="message"></textarea>
</div>
</div>
<button type="submit" id="submit" class="btn btn-lg btn-common">Send</button><div id="success" style="color:#34495e;"></div>

</div>
</form>

<div class="col-md-6 wow fadeInRight">
<div class="social-links">
<a class="social" href="#" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
<a class="social" href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
<a class="social" href="#" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>
<a class="social" href="#" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
</div>
<div class="contact-info">
<p><i class="fa fa-map-marker"></i> Laguboti, Kabupaten Toba Samosir, Sumatera Utara</p>
 <p><i class="fa fa-envelope"></i> info@matchme.com</p>
</div>

<p>
Kamu punya kendala di dalam website kami? Atau punya keluhan, kritik, dan saran? Kamu dapat mengirim email kepada kami dengan mengisi form disamping atau kamu bisa menghubungi kami di sosial media kami di atas.<br>
</p>

</div>

</div>
</div>
</section>

<!-- Conatct Section End-->


<div id="copyright">
<div class="container-fluid">
<div class="col-md-12"><p>© Match Me 2017 All right reserved. Design & Developed by <a href="../../index.php">MatchMe Team</a></p></div>
</div>
</div>
<!-- Copyright Section End-->

   



</body>
</html>