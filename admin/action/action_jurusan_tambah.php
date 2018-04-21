<?php
    include "../../config/koneksi.php";
    include '../../config/functions.php';

    $jurusan = $_POST['jurusan'];
	$tipe_id = $_POST['tipe_id'];

    $query = "INSERT INTO jurusan (jurusan, tipe_kepribadian_id) VALUES ('$jurusan', '$tipe_id')";

	if (mysqli_query($connect, $query)) {
        echo "Data telah berhasil ditambahkan<br><br>";
        echo "<a href='../jurusan_tambah.php'>Tambah lagi</a>";
    } else {
    echo "Error: " .$query."<br>".mysqli_error($connect);
    echo "Data telah gagal ditambahkan<br><br>";
        echo "<a href='../jurusan_tambah.php'>Coba lagi</a>";
    }
?>