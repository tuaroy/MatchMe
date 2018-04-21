<?php
 include 'includes/header.php';
 include 'includes/navigasi.php';
?>
	<div class="container">
		<h3>Tambah Tipe Kepribadian</h3>
		<form action="action/action_tipe_kepribadian_tambah.php" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Tipe Kepribadian</td>
					<td>:</td>
					<td><input type="text" name="tipe" required="required"></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td>:</td>
					<td><textarea name="deskripsi" rows="3" cols="100" required="required"></textarea></td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td>:</td>
					<td><input type="file" name="gambar"></td>
				</tr>
			</table><br><br>
			<input type="submit" name="simpan" value="Simpan">
			<input type="reset" name="reset">
		</form>
	</div>
<?php
 include 'includes/footer.php';
?>