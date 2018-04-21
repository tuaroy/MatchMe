<?php
    include "../../../config/koneksi.php";
    include '../../../config/functions.php';

	$fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $q1 = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    mysqli_query($connect, $q1);

    $q1_select ="SELECT id FROM user order by id asc limit 1";
    $result = mysqli_query($connect,$q1_select);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $q2 = "INSERT INTO user_profil (fullname, email, user_id) VALUES ('$fullname', '$email', '$id' )";
	if (mysqli_query($connect, $q2)) {
        redirect('../berhasil-daftar.php');
    } else {
        //echo "<script>history.go(-1);</script>";
        echo "<script>alert('Pendaftaran Gagal');</script>";
    }
?>