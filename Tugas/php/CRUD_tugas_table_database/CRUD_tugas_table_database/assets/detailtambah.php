
<form action ="proses_tambah.php" method="POST">

Nama :<input type="text" name="nama"><br>


Kota :
<?php 
$sql_kota = "select * from kota";
$result_kota = mysql_query($sql_kota)
?>

<select name="kota">
		<?php 
		while($asal_kota = mysql_fetch_array
		($result_kota)) {?> 
		<option value="<?php echo $asal_kota['id_kota']?>">
		<?php echo $asal_kota['nama_kota'] ?>
		</option>}
		<?php }
		?>
		</select>
		<br>

Jenis Kelamin
<input type="radio" name="kelamin" value="1"> Laki-Laki
<input type="radio" name="kelamin" value="2"> Perempuan
<br>

Nilai :
<?php 
$sql_nilai = "select * from nilai";
$result_nilai = mysql_query($sql_nilai)
?>

<select name="nilai">
		<?php 
		while($nilai = mysql_fetch_array
		($result_nilai)) {?> 
		<option value="<?php echo $nilai['id_nilai']?>">
		<?php echo $nilai['nilai_'] ?>
		</option>}
		<?php }
		?>
		</select>
		<br>