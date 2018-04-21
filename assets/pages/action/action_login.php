<?php
include "../../../config/koneksi.php";
include "../../../config/functions.php";

$username = $_POST['username'];
$pass     = $_POST['password'];

$login = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password='$pass'");
$row = mysqli_fetch_array($login);

if ($row['username'] == $username AND $row['password'] == $pass){
  if ($row['role'] == 0) {
	  session_start();
	  $_SESSION['id'] = $row['id'];
	  $_SESSION['username'] = $row['username'];
	  $_SESSION['password'] = $row['password'];
	  $_SESSION['role']    = $row['role'];
	  $_SESSION['matchme'] = TRUE;
	  redirect('../index.php');
  }
  else if ($row['role'] == 1) {
  	redirect('../login.php');
  }
  
} else {
        echo "<script>history.go(-1);</script>";
        echo "<script>alert('Silakan isi form');</script>";
    }
?>