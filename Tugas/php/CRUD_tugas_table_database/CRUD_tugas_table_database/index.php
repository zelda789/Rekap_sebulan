<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('sekolah');

$sql = "select siswa.id_siswa as id, siswa.nama as nama_siswa, 
kota.nama_kota, kelamin.nama_kelamin
from siswa, kota, kelamin
where siswa.alamat = kota.id_kota and
siswa.jenis_kelamin = kelamin.id_kelamin";


$result = mysql_query($sql);
?>


<!DOCTYPE html>
<html>

<body>
<a href="tambah.php">TAMBAH DATA</a>

<table border="1">
	<thead>
		<tr>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Kelamin</td>
			
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
			
			<td><a href="delete.php?id=<?php echo 
			$data ['id']?>"> Hapus</a></td>
			<td><a href="detail.php?id=<?php echo 
			$data ['id']?>">Detail</a></td> 
		</tr>
		<?php } ?>
	</tbody>
	</table>

</body>
</html>