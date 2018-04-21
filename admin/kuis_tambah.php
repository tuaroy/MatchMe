<?php
 include 'includes/header.php';
 include 'includes/navigasi.php';
?>
	<div class="container">
		<h3>Tambah soal kuis</h3>
		<form action="action/action_kuis_tambah.php" method="post">
			<table>
				<tr>
					<td>Soal</td>
					<td>:</td>
					<td><textarea name="soal" rows="3" cols="100" required="required"></textarea></td>
				</tr>
				<tr>
					<td>Pilihan 1</td>
					<td>:</td>
					<td><textarea name="pilihan1" rows="3" cols="100" required="required"></textarea></td>
				</tr>
				<tr>
					<td>Pilihan 2</td>
					<td>:</td>
					<td><textarea name="pilihan2" rows="3" cols="100" required="required"></textarea></td>
				</tr>
			</table><br><br>
			<input type="submit" name="simpan" value="Simpan">
			<input type="reset" name="reset">
		</form>
	</div>
<?php
 include 'includes/footer.php';
?>