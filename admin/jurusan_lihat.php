<?php
 include 'includes/header.php';
 include 'includes/navigasi.php';
?>
<div class="container">
		<table class="table-responsive table-bordered table-hover table" id="table">
			<thead>
				<th>No. </th>
				<th>Jurusan</th>
				<th>Tipe Kepribadian</th>
				<th>Action</th>
			</thead>
			<?php
				$query ="SELECT jurusan, tipe FROM tipe_kepribadian join jurusan on tipe_kepribadian.id = jurusan.tipe_kepribadian_id WHERE jurusan.deleted = 0";
				$result = $connect->query($query);
                if($result->num_rows > 0){
                	$i=0;
                    foreach($result as $row){
                    	$i++;
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['tipe']; ?></td>
				<td><?php echo $row['jurusan']; ?></td>
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