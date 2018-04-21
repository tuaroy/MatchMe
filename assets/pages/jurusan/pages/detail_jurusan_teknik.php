
<?php


if(isset($_GET['nama'])){
  $id = $_GET['nama'];
}

?>

<!DOCTYPE html>

<html>
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">


</head>
<body id="top">

<div class="wrapper row3">
  <main class="hoc container clear"> 
 
    <div class="sidebar one_quarter first"> 
     
      <h6>Kategori Jurusan</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="../../../pages/teknik.php">Teknik</a></li>
          <li><a href="../../../pages/peternakan.php">Peternakan</a></li>
          <li><a href="../../../pages/pendidikan.php">Pendidikan</a></li>
          <li><a href="../../../pages/senisastrabudaya.php">Seni Sastra & Budaya</a></li>
          <li><a href="../../../pages/sosial.php">Sosial</a></li>
          <li><a href="../../../pages/ekonomi.php">Ekonomi & Bisnis</a></li>
          <li><a href="../../../pages/pertanian.php">Pertanian</a></li>
          <li><a href="../../../pages/kesehatan.php">Kesehatan</a></li>
          <li><a href="../../../pages/mipa.php">MIPA</a></li>
            
        </ul>
      </nav>
      
    </div>
   
    <div class="content three_quarter"> 
      
      <?php
// buat koneksi dengan MySQL, gunakan database: webmaster
$link = mysqli_connect("localhost", "root", "", "matchme");
 
// jalankan query
$id=$_GET['nama'];
$result = mysqli_query($link, "SELECT * FROM teknik where  `nama`=$id"  );


$row=mysqli_fetch_array($result,MYSQLI_ASSOC)
    ?>
    
      <h1><?php echo $row["nama"]?></h1>
      <img class="imgl borderedbox inspace-5" src="<?php echo $row["gambar2"]?>" alt="" >
      <p><?php echo $row["para1"]?></p>
      <p><?php echo $row["para2"]?></p>
      <p><?php echo $row["para3"]?></p>

    <?php
  
?>


      
      
      </div>
   
   
  </main>
</div>


</body>
</html>