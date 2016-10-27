<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('sekolah');
// optional
date_default_timezone_set('Asia/Jakarta');

$nama = $_POST['nama'];
$kota = $_POST['kota'];
$kelamin = $_POST['kelamin'];

$id = md5(date('ymdhms').rand());

// INCLUDE QUERY PROSES TAMBAH
$sql ="insert into siswa(id_siswa,nama,alamat,jenis_kelamin)
	values('$id', '$nama','$kota', $kelamin)";

	mysql_query($sql);

	header("Location: index.php");
?>