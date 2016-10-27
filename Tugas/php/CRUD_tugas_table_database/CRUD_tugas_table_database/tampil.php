<?php namespace tampil;

$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('sekolah');
class tampil
{
	public function panggil()
	{
		include'detail.php';
	}
}
?>
