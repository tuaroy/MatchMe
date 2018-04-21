<?php
 include "../config/koneksi.php";
 include '../config/functions.php';
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Lihat Kuis</title>
	
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/datatables.min.js"></script>
  	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="../assets/js/script.js"></script>

	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/datatables.min.css">
  	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome/css/font-awesome.min.css">
  	<style type="text/css">
  		.kecil {
		max-width: 100px;
		max-height: 150px;
	}
  	</style>
</head>