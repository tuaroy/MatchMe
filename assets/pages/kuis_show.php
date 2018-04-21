<?php
 	include 'includes/script_kuis.php'; 
 	include "../../config/koneksi.php";	
?>

		<?php
      // KONEKSI KE DATABASE
      $con = mysqli_connect('localhost','root','','matchme');
	  
 
      // JUMLAH DATA YANG DITAMPILKAN PER HALAMAN
      $dataPerPage = 10;
 
      // Apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
      // Sedangkan apabila belum, nomor halamannya 1.
      if(isset($_GET['page']))
      {
        $noPage = $_GET['page'];
      }
      else $noPage = 1;
 
      // Perhitungan offset
      $offset = ($noPage - 1) * $dataPerPage;
 
      
 
      // MENGAMBIL DATA     
      $query = "SELECT * FROM kuis ORDER BY id asc LIMIT $offset, $dataPerPage";
 
      $result = mysqli_query($con,$query) or die('Error');
 
      // Penomoran Item
      $nomor=1;
      $nomor1 = 5 * $noPage;
		$i=1;
      while($data = mysqli_fetch_array($result))
        {
			
 
          if ($noPage <= 1)
            {
               $nomor++."<br>";
            }
          else
            {     
               $nomor1++."<br>";
            }
 
          ?>
			<form name="quiz" method="post" name="buttons" id="quiz" onsubmit="return false" action="hasil-kuis.php">
				<table class="table-responsive" border="0">
					<tr>
						<td>
							<?php echo $data['id'] . ". <b>" . $data['soal'] . "</b>"; ?><br>
							<input type="radio" name="group<?php echo $i; ?>" value="A" required checked><?php echo " " . $data['pilihan1']; ?><br>
							<input type="radio" name="group<?php echo $i; ?>" value="B" required><?php echo " " . $data['pilihan2']; ?><br><br>
						</td>
					</tr>
				</table>
			
		  <?php
			$i++;
			
        }
		
		?>
		
		
		<?php
		
		
 
      // Mencari jumlah semua data tabel 'alamat', kemudian simpan dalam variabel $jumData
        $query3   = "SELECT COUNT(*) AS jumData FROM kuis";
        $hasil3  = mysqli_query($con,$query3);
        $data3    = mysqli_fetch_array($hasil3);
 
        $jumData = $data3['jumData'];
		$jumPage = ceil($jumData/$dataPerPage);
		if($_GET['page']==$jumPage){
			?>
				<button class="submit btn btn-info" onclick="return handleClick();" type="submit">Submit</button>
				</form>
			<?php
		}
        echo "<br><center>";
		
		
          if ($jumData > 5)
            {
 
              // Menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
              
				
			  
              // Menampilkan link 'Sebelum'   
              if ($noPage > 1) 
 
              $query = "SELECT * FROM kuis";
              $result = mysqli_query($con,$query) or die('Error');
 
              $data = mysqli_fetch_array($result);
 
              echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'><< Previous</a>";
 
              // Menampilkan nomor halaman dan linknya
              for($page = 1; $page <= $jumPage; $page++)
              {
 
                if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
                {
 
                  
                  if ($page == $noPage) echo " <a href='#'>".$page."</a>";
                  else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a> ";
                  $showPage = $page;
                }
              }
 
              // Menampilkan link 'Sesudah'
              if ($noPage < $jumPage) 
              echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next >></a>";
            }
 
          else
            {
            }
 
        echo "</center>";       
    ?>       