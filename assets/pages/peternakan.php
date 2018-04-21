<?php
include "../../config/koneksi.php";
include "../../config/functions.php";
session_start();

?>

<?php

if(isset($_GET['id'])){
  $id = $_GET['id'];
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
            <li><a href="../pages/teknik.php"> Teknik</a></li>
            <li><a href="../pages/peternakan.php"> Peternakan</a></li>
            <li><a href="../pages/pendidikan.php"> Pendidikan</a></li>
            <li><a href="../pages/senisastrabudaya.php"> Seni, Sastra, & Budaya</a></li>
            <li><a href="../pages/sosial.php"> Sosial</a></li>
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

<section id="infojurusan">
<div class="container text-center">
<div class="row">
<h1 class="title">Jurusan Peternakan</h1><br><br>

    
<?php
// buat koneksi dengan MySQL, gunakan database: webmaster
$link = mysqli_connect("localhost", "root", "", "matchme");
 
// jalankan query
$result = mysqli_query($link, "SELECT * FROM peternakan ");


// tampilkan query

while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) { 
    ?>
    
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="service-item">
    <img id="gambar" src="<?php echo $row["gambar"]?>" alt=""><br><br>
    
    <a href="../pages/jurusan/pages/detail_jurusan_peternakan.php?nama='<?php echo $row["nama"];?>'"  class="btn btn-primary btn-lg"><?php echo $row["nama"]?></a><br><br><br><br>

    </div>
    </div>

    <?php
  }
?>



</div>
</div>
 </section>

<div id="copyright">
<div class="container-fluid">
<div class="col-md-12"><p>© Match Me 2017 All right reserved. Design & Developed by <a href="../../index.php">MatchMe Team</a></p></div>
</div>
</div>
<!-- Copyright Section End-->

   



</body>
</html>s