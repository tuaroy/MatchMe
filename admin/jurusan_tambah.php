<?php
 include 'includes/header.php';
 include 'includes/navigasi.php';
?>
	<div class="container">
		<h3>Tambah Jurusan</h3>
		<form action="action/action_jurusan_tambah.php" method="post">
			<table>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><input type="text" name="jurusan" required="required"></td>
				</tr>
				<tr>
					<td>Tipe Kepribadian</td>
					<td>:</td>
					<td>
						<select name="tipe_id">
				          <?php
				            $q_kepribadian ="SELECT * FROM tipe_kepribadian";
				            $result = $connect->query($q_kepribadian);
				            if($result->num_rows > 0){
				              $i=0;
				                foreach($result as $row){
				                  $i++;
				          ?>
				          <option value="<?php echo $row['id']; ?>">
				            <?php echo $row['tipe']; ?>
				          </option>
				          <?php
				              }
				            }
				          ?>
				        </select>
					</td>
				</tr>
			</table><br><br>
			<input type="submit" name="simpan" value="Simpan">
			<input type="reset" name="reset">
		</form>
	</div>
<?php
 include 'includes/footer.php';
?>