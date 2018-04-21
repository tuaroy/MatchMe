<?php
$dbhost = 'localhost'; 
$dbuser = 'root';     
$dbpass = '';         
$dbname = 'matchme';
 
// melakukan koneksi ke database
$connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
 
// cek koneksi yang kita lakukan berhasil atau tidak
if ($connect->connect_error) {

   // jika terjadi error, matikan proses dengan die() atau exit();
   die('Fail Connection: '. $connect->connect_error);

}
?>