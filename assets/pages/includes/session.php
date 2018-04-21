<?php
session_start();
    if(empty($_SESSION['username'])) {
        redirect('login.php');     
    } else {
    	
    }
?>