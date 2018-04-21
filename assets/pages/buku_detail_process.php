<?php
	include_once('koneksi.php');
	
	$id = $_GET['id'];
	$id_user = 1;
	//$jumlah = $_POST['jumlah'];
	//$ukuran = $_POST['ukuran'];
	
	$sql = "SELECT * FROM buku WHERE id=".$id;
	$result = mysqli_query($database,$sql);
	$row = mysqli_fetch_assoc($result);
	
	//$perBiji = $row["$ukuran"];
	//$harga = $jumlah * $perBiji;
	
	$judul = $row['judul'];
	$gambar = $row['gambar'];
	$status = 'belum';
	
	$query = "INSERT INTO cart VALUES ('','$id',$id_user,'$nama','$gambar','$jumlah','$ukuran','$harga','$status')";
	$result1 = mysqli_query($database,$query);
	
	//Menambahkan harga total
	$sql1 = "SELECT * FROM total_harga WHERE id_user=$id_user";
	$result2 = mysqli_query($database,$sql1);
	$row1 = mysqli_fetch_assoc($result2);
	$hargaTotal = $row1['harga'] + $harga;
	
	$sql2 = "UPDATE total_harga SET harga=$hargaTotal WHERE id_user=$id_user";
	$result3 = mysqli_query($database,$sql2);
	
	if($result1 && $result3) header('location: cart.php');
?>