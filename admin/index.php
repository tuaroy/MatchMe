<?php
 include 'includes/header.php';
 include 'includes/navigasi.php';

 if(!empty($_SESSION['username']) && isset($_SESSION['matchme'])) {
       if($_SESSION['role'] != 1){
            redirect('login.php');
        }   
    } else {
    	redirect('login.php');
    }

?>
  <h3>SELAMAT DATANG, <b><?php echo $_SESSION['username'] ?></b>!</h3>
<?php
 include 'includes/footer.php';
?>