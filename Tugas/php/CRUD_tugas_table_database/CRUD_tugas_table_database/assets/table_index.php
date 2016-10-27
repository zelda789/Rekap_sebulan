<table border="1">
	<thead>
		<tr>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Kelamin</td>
			<td>Nilai</td>
			<td>Aksi</td>
			<td>Detail</td>
		</tr>
	</thead>
	<tbody>
	<?php while ($data = mysql_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $data['nama_siswa']; ?></td>
			<td><?php echo $data['nama_kota']; ?></td>
			<td><?php echo $data['nama_kelamin']; ?></td>
			<td><?php echo $data['nilai_']; ?></td>
			<td><a href="delete.php?id=<?php echo 
			$data ['id']?>"> Hapus</a></td>
			<td><a href="detail.php?id=<?php echo 
			$data ['id']?>">Detail</a></td> 
		</tr>
		<?php } ?>
	</tbody>
	</table>

