<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('visual_core');

?>

<?php
$sql_artikel = "select * from artikel_id";
$result_artikel = mysql_query($sql_artikel)
?>

<form  action ="proses_tambah.php" method="POST">

judul Artikel : <input type="text" name="judul"><br>

Gambar Artikel : <form action="../Upload_form/upload.php" method="post" enctype="multipart/form-data">
	    Select image to upload:
	    <input type="file" name="file_upload" id="fileToUpload">
	    <input type="submit" value="Upload Image" name="submit">
	</form>