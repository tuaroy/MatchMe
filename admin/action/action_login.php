<?php
include "../../config/koneksi.php";
include "../../config/functions.php";

$username = $_POST['username'];
$pass     = $_POST['password'];

$login = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password='$pass'");
$row=mysqli_fetch_array($login);




if ($row['username'] == $username AND $row['password'] == $pass){
  if ($row['role'] == 1) {
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['role']    = $row['role'];
    $_SESSION['id'] = $row['id'];
    $id = $_SESSION['id'];
    $coba = mysqli_query($connect, "SELECT * FROM user_profil WHERE user_id = $id");
    $try=mysqli_fetch_array($coba);
    $email = $try['email'];
    $_SESSION['email'] = $email;
    $_SESSION['matchme'] = TRUE;
    
    redirect('../index.php');
  } else {
    echo "Akses dilarang<br><br>";
    echo "<a href='../login.php'>Kembali ke halaman login</a>";
  }
} else {
	 echo "<script>alert('Username atau Password Salah'); window.location=('../login.php');</script>";

}
?>