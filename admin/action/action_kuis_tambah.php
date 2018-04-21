<?php
    include "../../config/koneksi.php";
    include '../../config/functions.php';

	$soal = $_POST['soal'];
    $pilihan1 = $_POST['pilihan1'];
    $pilihan2 = $_POST['pilihan2'];

    $query = "INSERT INTO kuis (soal, pilihan1, pilihan2) VALUES ('$soal', '$pilihan1', '$pilihan2')";

	if (mysqli_query($connect, $query)) {
        echo "Data telah berhasil ditambahkan<br><br>";
        echo "<a href='../kuis_tambah.php'>Tambah lagi</a>";
    } else {
    echo "Error: " .$query."<br>".mysqli_error($connect);
    echo "Data telah gagal ditambahkan<br><br>";
        echo "<a href='../kuis_tambah.php'>Coba lagi</a>";
    }
?>