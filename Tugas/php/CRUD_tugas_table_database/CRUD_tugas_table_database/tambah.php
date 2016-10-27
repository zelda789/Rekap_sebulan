<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);
mysql_select_db('sekolah');
?>

<?php 
$sql_mapel = "select * from mapel";
$result_mapel = mysql_query($sql_mapel)
?>

<h1>Form Tambah Data Siswa</h1>

<!-- INCLUDE DETAIL TAMBAH -->
<?php 
include 'assets/detailtambah.php';
?>
<a href="index.php">KEMBALI</a>
<input type="submit" name="Tambah Data"><br>
</form>
