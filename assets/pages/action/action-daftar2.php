<?php
    include "../../config/koneksi.php";
    include '../../config/functions.php';

	$username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

	if (mysqli_query($connect, $query)) {
        echo "Data telah berhasil ditambahkan<br><br>";
        redirect('../register-next.php');
    } else {
    echo "Error: " .$query."<br>".mysqli_error($connect);
    echo "Data telah gagal ditambahkan<br><br>";
    redirect('../register.php');
    }
?>