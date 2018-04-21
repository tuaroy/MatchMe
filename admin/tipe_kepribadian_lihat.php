<?php
 include 'includes/header.php';
 include 'includes/navigasi.php';
?>
<div class="container">
		<table class="table-responsive table-bordered table-hover table" id="table">
			<thead>
				<th>No. </th>
				<th>Tipe Kepribadian</th>
				<th>Gambar</th>
				<th>Deskripsi</th>
				<th>Jurusan</th>
				<th>Action</th>
			</thead>
			<?php
				$query ="SELECT tipe, gambar, deskripsi, jurusan FROM tipe_kepribadian left join jurusan on tipe_kepribadian.id = jurusan.tipe_kepribadian_id WHERE tipe_kepribadian.deleted = 0";
				$result = $connect->query($query);
                if($result->num_rows > 0){
                	$i=0;
                    foreach($result as $row){
                    	$i++;
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['tipe']; ?></td>
				<td><img src="../assets/img/kepribadian/<?php echo $row['gambar'];?>" class="thumbnail kecil"></td>
				<td><?php echo $row['deskripsi']; ?></td>
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