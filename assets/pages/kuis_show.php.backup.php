<?php
	include 'includes/header.php';
 	include 'includes/navigasi.php';
	include 'includes/session.php';
 	include 'includes/script_kuis.php'; 
 	include "../../config/koneksi.php";	
?>

	<div class="container">
		<?php
			$query ="SELECT * FROM kuis";
			$result = $connect->query($query);
            if($result->num_rows > 0){
            	$i=1;
                foreach($result as $row){
		?>
		<form name="quiz" method="post" name="buttons" id="quiz" onsubmit="return false">
			<table class="table-responsive" border="0">
				<tr>
					<td>
						<?php echo $i . ". <b>" . $row['soal'] . "</b>"; ?><br>
						<input type="radio" name="group<?php echo $i; ?>" value="A" required><?php echo " " . $row['pilihan1']; ?><br>
						<input type="radio" name="group<?php echo $i; ?>" value="B" required><?php echo " " . $row['pilihan2']; ?><br><br>
					</td>
				</tr>
			</table>
		<?php
			$i++;
				}
			}
		?>
		<button class="submit" onclick="return handleClick();" type="submit">Submit</button>
		</form>
		
		<div id="tempat_hasil">

	</div>	

<?php
 include 'includes/footer.php';
?>