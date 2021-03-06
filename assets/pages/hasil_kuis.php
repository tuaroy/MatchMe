<?php
 	include 'includes/script_kuis.php'; 
 	include "../../config/koneksi.php";	
 	session_start();
 	$id_user = $_SESSION['id'];
    if(!empty($_SESSION['username']) && !isset($_SESSION['matchme'])) {
       if($_SESSION['role'] == 0){
            redirect('login.php');
        }   
    }
        	$q_nama ="SELECT * FROM user_profil WHERE user_id = $id_user";
			$res = $connect->query($q_nama);
            if($res->num_rows > 0){
            	$i=1;
                foreach($res as $r){
?>

	<?php
		$hasil = $_GET['hasil'];
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
        <li><a href="tes.php"><i class="fa fa-home"></i> Tes</a></li>
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
<div class="container col-md-12 konten-tes">
    <div class="col-md-4 nav-kiri">
        <center>
        	<h3>Buku SBMPTN</h3>
        	<p>Kamu tidak perlu repot mencari buku SBMPTN 2018 dimana-mana.<br>
        		Karena MatchMe menyediakan buku SBMPTN yang bagus cocok buat kamu.<br>
        		Kamu bisa membelinya secara online disini.
        	</p>
        	<div class="container-fluid">
        		<div class="col-md-6 buku-jual">
        			<a href="#"><img src="../img/buku/buku1.jpg" class="thumbnail" id="info-buku"></a>
        			<h6>Harga : Rp. 80000</h6>
        		</div>
        		<div class="col-md-6 buku-jual">
        			<a href="#"><img src="../img/buku/buku2.png" class="thumbnail" id="info-buku"></a>
        			<h6>Harga : Rp. 80000</h6>
        		</div>
        		<div class="col-md-6 buku-jual">
        			<a href="#"><img src="../img/buku/buku3.jpg" class="thumbnail" id="info-buku"></a>
        			<h6>Harga : Rp. 80000</h6>
        		</div>
        		<div class="col-md-6 buku-jual">
        			<a href="#"><img src="../img/buku/buku4.jpg" class="thumbnail" id="info-buku"></a>
        			<h6>Harga : Rp. 80000</h6>
        		</div>
        		<div class="col-md-12">
        			<a href="#">Selengkapnya</a>
        		</div>
        		
        	</div>
        </center>
    </div>
    <div class="col-md-8 hasil-kuis">
    	<h2>Hasil Kuis Kamu adalah : </h2><br>
    	<?php
        	$query ="SELECT * FROM tipe_kepribadian WHERE tipe = '$hasil'";
			$result = $connect->query($query);
            if($result->num_rows > 0){
            	$i=1;
                foreach($result as $row){
        ?>
    	<div class="col-md-3">
        	<img src="../img/kepribadian/<?php echo $row['gambar']; ?>" class = "thumbnail">
        </div>

        <div class="col-md-9 deskripsi-hasil">
        	<h2>Hai, <?php echo $r['fullname']; } }?></h2>
    		<h3>Ternyata, tipe kepribadian kamu adalah <?php echo $hasil; ?></h3>
	        <p><?php echo $row['deskripsi']; ?></p>
	        <br><br>
	        <p>Jurusan yang cocok buat kamu adalah <?php
	        	$id_tipe = $row['id'];
	        	$jurusan ="SELECT * FROM jurusan WHERE tipe_kepribadian_id = '$id_tipe'";
				$result = $connect->query($jurusan);
	            if($result->num_rows > 0){
	            	$i=1;
	                foreach($result as $jur){
	                	if ($i == $result->num_rows-1) {
	                		echo $jur['jurusan']. ".";
	                	}
	                	else echo $jur['jurusan']. ", ";
	                }
	            }
	         ?></p>
	         <br>
	         <div class="container-fluid ajakan">
	         	<center><h4>Mau tahu lebih lanjut tentang info-info jurusan yang sesuai minat kamu?</h4>
	         	<a href="#">Ayo lihat disini</a></center>
	         </div>
	         
        </div>
        
        <?php
                }
            }
        ?>
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