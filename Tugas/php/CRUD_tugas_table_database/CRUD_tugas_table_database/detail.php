<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('sekolah');

$id = $_GET['id'];
mysql_query($sql);


// INCLUDE QUERY DETAIL
$sql = "SELECT
sw.nama AS nama_siswa,
kl.nama_kelamin AS jenis_kelamin,
kota.nama_kota,
mp.nama_pelajaran,
nilai.nilai_
FROM
siswa sw, kelamin kl, mapel mp, kota, nilai
where
sw.id_siswa = '{$id}' AND
sw.jenis_kelamin = kl.id_kelamin AND
sw.id_mapel = mp.id_mapel AND
sw.alamat = kota.id_kota AND
sw.nilai_siswa = nilai.id_nilai";

	$result = mysql_query ($sql);
	$data = mysql_fetch_array($result); 
?>
<h1>Detail Siswa</h1>
<a href ="index.php">KEMBALI</a>
<br>
<?php include 'namespace/run.php' ?>
<br> 

