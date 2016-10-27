<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('sekolah');


$id = $_GET['id'];
// echo "anda akan melakukan delete terhadap id " .$id;

$sql = "delete from siswa where id_siswa = '{$id}'";


mysql_query($sql);
echo "sukses melakukan penghapusan id " . $id;
// header('location: index.php');
?>