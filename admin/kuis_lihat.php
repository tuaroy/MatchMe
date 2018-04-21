<?php
 include 'includes/header.php';
 include 'includes/navigasi.php';
?>
<div class="container">
		<table class="table-responsive table-bordered table-hover table" id="table">
			<thead>
				<th>No. </th>
				<th>Soal</th>
				<th>Pilihan 1</th>
				<th>Pilihan 2</th>
				<th>Action</th>
			</thead>
			<?php
				$query ="SELECT * FROM kuis";
				$result = $connect->query($query);
                if($result->num_rows > 0){
                	$i=0;
                    foreach($result as $row){
                    	$i++;
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['soal']; ?></td>
				<td><?php echo $row['pilihan1']; ?></td>
				<td><?php echo $row['pilihan2']; ?></td>
				<td><a href="#" title="Ubah"><span class="glyphicon glyphicon-edit"></span></a>&nbsp
					<a href="#" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
				</td> 
			</tr>
			<?php
					}
				}
			?>
		</table>		
	</div>
<?php
 include 'includes/footer.php';
?>