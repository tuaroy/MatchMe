<?php
  include "../../config/koneksi.php";
  include '../../config/functions.php';
  session_start();
    if(empty($_SESSION['username'])) {
        redirect('login.php');
    } else {                                
        if($_SESSION['role'] != 1){
            echo "<script>alert('Tidak dapat mengakses halaman Admin'); </script>";
            redirect('index.php');
        }      
    }
?>