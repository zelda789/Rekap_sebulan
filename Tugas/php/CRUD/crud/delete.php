<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('cendana');


$id = $_GET['id'];
// echo "anda akan melakukan delete terhadap id " .$id;

$sql = "delete from pegawai where id_pegawai = '{$id}'";


mysql_query($sql);
echo "sukses melakukan id " . $id;
// header('location: index.php');
?>