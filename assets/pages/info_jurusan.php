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
<!-- Nav Menu Section End -->


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../assets/css/css2/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">


</head>
<body id="top">

<div class="wrapper row3">
  <main class="hoc container clear"> 
 
    <div class="sidebar one_quarter first"> 
     
      <h6>Judul Jurusan</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="#">Navigation - Level 1</a></li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a>
                <ul>
                  <li><a href="#">Navigation - Level 3</a></li>
                  <li><a href="#">Navigation - Level 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a></li>
        </ul>
      </nav>
      
    </div>
   
    <div class="content three_quarter"> 
    
      <h1>Keterangan Jurusan</h1>
      <img class="imgl borderedbox inspace-5" src="../images/demo/fisika.jpg" alt="" >
      <p>Fisika mempelajari gejala alam yang tidak hidup atau materi dalam lingkup ruang dan waktu. Para fisikawan mempelajari perilaku dan sifat materi dalam bidang yang sangat beragam, mulai dari partikel submikroskopis yang membentuk segala materi hingga perilaku materi alam semesta sebagai satu kesatuan kosmos.</p>
      <p>Fisika mengambil peran penting dalam 400 tahun terakhir ini; dari penemuan Newton mengenai gravitasi hingga Teori Relativitas Einstein. Ilmu Fisika memberikan pengetahuan yang lebih mendetil tentang bumi dan juga turut berperan dalam perkembangan teknologi.
      </p>
      <p>Jika Anda menyenangi Ilmu Pengetahuan dan mempunyai rasa ingin tahu terhadap cara kerja dunia di sekitar Anda, mungkin Fisika adalah bidang yang cocok untuk Anda tekuni. Jika Anda ingin mempelajari Fisika, sebaiknya Anda mempunyai dasar yang cukup kuat di mata pelajaran Matematika, terutama Aljabar. Selain harus kuat menghafal teori, Jurusan Fisika juga banyak melibatkan kegiatan praktek dan penelitian . Oleh karena itu, ketelitian dan daya analisa yang tinggi sangat dibutuhkan di jurusan ini.</p>
      
      </div>
   
   
  </main>
</div>


</body>
</html>