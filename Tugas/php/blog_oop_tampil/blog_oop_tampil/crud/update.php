<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('visual_core');

?>

<?php 


// UNTUK BOOTSTRAP

$sql_IDartikel = "select * from artikel_id";
$result_IDartikel = mysql_query($sql_IDartikel);


// UNTUK BOOTSTRAP

$id = $_GET['id'];
mysql_query($sql);

$sql = "select 
artikel_id.nama as id_artikel,
tb_artikel.judul_artikel as title,
tb_artikel.gambar_artikel,
tb_artikel.isi_artikel

from tb_artikel, artikel_id
where 
tb_artikel.id_artikel = artikel_id.id_artikel and
tb_artikel.id_artikel = '{$id}'
" ;

$result = mysql_query($sql);
$brs=mysql_fetch_array($result);

?>
          <!-- CSS BOOTSTRAP -->
<link rel="stylesheet" href="../css/bootstrap.css">

<form action ="proses_update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $brs['id_artikel'] ?>">

							<!-- TABLE BOOTSTRAP -->

<form action ="proses_update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $brs['id_artikel'] ?>">

<table class="table">
  <thead class="thead-inverse">
    <tr>
     
      <th><h1><center>Form Update Data Blog</h1>
</th>     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>ID ARTIKEL : <select name="artikel">
		<?php 
		while($data_IDartikel = mysql_fetch_array($result_IDartikel)) {?> 
		<option value="<?php echo $data_IDartikel['id_artikel']?>" <?php if($brs['id_artikel']==$data_IDartikel['id_artikel']) echo 
		"selected" ?>>
		<?php echo $data_IDartikel['nama'] ?>
		</option>
		<?php
		 }
		?>
     </select>
    </tr>
  </tbody>
</table>
<button type="submit" class="btn btn-primary btn-success" name="Tambah Data">UPDATE</button>
<button type="submit" class="btn btn-primary btn-success" name="Tambah Data"> 
<a href="../EDIT.php">KEMBALI</button>
</form>


<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src ="css/bootstrap.css"></script>
</form>