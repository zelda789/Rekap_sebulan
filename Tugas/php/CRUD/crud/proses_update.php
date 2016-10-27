<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('cendana');

$id = $_POST ['id'];
$nama = $_POST ['nama'];
$posisi = $_POST ['posisi'];
$kelamin = $_POST ['kelamin'];
$telp = $_POST ['telepon'];
$kota = $_POST ['kota'];


$sql="update pegawai set nama ='{$nama}', id_posisi='{$posisi}', kota_asal='{$kota}',telp='{$telp}',jenis_kelamin={$kelamin} where id_pegawai = '{$id}'";
mysql_query($sql);

header("Location: EDIT.php");

?>