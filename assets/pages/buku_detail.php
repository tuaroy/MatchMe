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

<!-- bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">       
        <link href="themes/css/bootstrappage.css" rel="stylesheet"/>
        
        <!-- global styles -->
        <link href="themes/css/main.css" rel="stylesheet"/>
        <link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>
                
        <!-- scripts -->
        <script src="themes/js/jquery-1.7.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>               
        <script src="themes/js/superfish.js"></script>  
        <script src="themes/js/jquery.scrolltotop.js"></script>
        <script src="themes/js/jquery.fancybox.js"></script>
        <!--[if lt IE 9]>           
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="js/respond.min.js"></script>
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


    <div class="container" style="margin-top: 120px;">
        <div id="contact-page" class="container">
            <div class="bg">
                <div class="row">   
                    <div class="col-sm-12">
                    <h2 class="section-heading text-uppercase">Pemesanan Buku</h2>
                        <div class="contact-form">
                            <div class="status alert alert-success" style="display: none"></div>
                            <?php 
                                $id = $_SESSION['id'];
                                $query = "SELECT * FROM user_profil WHERE user_id = '$id'";
                                $q_profil = mysqli_query($connect, $query);
                                $r_profil =  mysqli_fetch_assoc($q_profil);
                                $email = $r_profil['email'];
                                $nama = $r_profil['fullname'];
                                $judulBuku = $_GET['judul'];
                                $hargaBuku = $_GET['harga'];
                                $idBuku = $_GET['id'];
                                ?>                           
                            <form method="post" action="pemesanan-berhasil.php?harga=<?php echo $hargaBuku; ?>&judul=<?php echo $judulBuku; ?>&id_buku=<?php echo $idBuku; ?>">
                                
                                <table border="0" cellspacing="5" cellpadding="5">
                                    <tr>
                                        <td>Pemesan</td>
                                        <td>:</td>
                                        <td><?php echo $nama;?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><?php echo $email;?></td>
                                    </tr>
                                    <tr>
                                        <td>Judul Buku</td>
                                        <td>:</td>
                                        <td><?php echo $judulBuku;?></td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td><?php echo $hargaBuku;?></td>
                                    </tr>
                                </table>
                                <br>
                                <div class="form-group col-md-12" style="margin-top: -9px;">
                                    <textarea name="alamat" required="required" class="form-control" rows="8" placeholder="Masukkan alamat anda"></textarea>
                                </div>                        
                                <div class="form-group col-md-12">
                                    <input type="submit" name="tombol" class="btn btn-primary pull-right" value="Kirim">
                                </div>
                            </form>
                        </div>
                    </div>              
                </div>  
            </div>  
        </div>
        </div>
