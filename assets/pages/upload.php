<?php
  // code A
  //include("fungsi_koneksi.php");
  //require_once('functions.php');
  // end of code A
  if(isset($_SESSION['is_logged_in']))
  {
	  $id = $_GET['username'];
  }
   
  // code B
  $nama = $_GET['username'];
  $email = $_GET['email'];
 // $judul = $_GET['judul'];
  $pesan = $_POST['message'];
  
  // end of code B
   
  //if (!empty($lokasi_file)) {
    //move_uploaded_file($lokasi_file,$direktori); 
   
    // code C
    //$koneksi = new mysqli('127.0.0.1','root','','matchme');
    //$sql = "insert into dtimage values (null,'$nama','$email','$judul','$pesan')";
    //$aksi = mysqli_query($koneksi,$sql);
    // end of code C
     
    // code D
    //if (!$aksi) {
    //echo "maaf gagal memasukan gambar";
    //}else{
		//echo "<script>alert('Data Berhasil Dimasukkan');	
      //window.location='indexuser.php?username=$nama&email=$email';
      //</script>";
    //}
    // end of code D
     
  //}else{
    //echo "<script>alert(' Data Gagal Dimasukkan');
      //window.location='contact-us.php?username=<php echo $id ?>'
      //</script>";
  }
   
   
?>