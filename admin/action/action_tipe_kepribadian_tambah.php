<?php
    include "../../config/koneksi.php";
    include '../../config/functions.php';

	$tipe = $_POST['tipe'];
    $deskripsi = $_POST['deskripsi'];
   
    $gbr = $_FILES["gambar"]["name"];
    $target_dir = "../../assets/img/kepribadian/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);

    //Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Valid File Extension
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    //Check extension
    if(in_array($imageFileType, $extensions_arr)){

    $query = "INSERT INTO tipe_kepribadian (tipe, deskripsi, gambar) VALUES ('$tipe', '$deskripsi', '$gbr')";

	if (mysqli_query($connect, $query)) {
        echo "Data telah berhasil ditambahkan<br><br>";
        echo "<a href='../tipe_kepribadian_tambah.php'>Tambah lagi</a>";
    } else {
    echo "Error: " .$query."<br>".mysqli_error($connect);
    echo "Data telah gagal ditambahkan<br><br>";
        echo "<a href='../tipe_kepribadian_tambah.php'>Coba lagi</a>";
    }

    //Upload File
    move_uploaded_file($_FILES['gambar']['tmp_name'], $target_dir.$gbr);
    }
?>