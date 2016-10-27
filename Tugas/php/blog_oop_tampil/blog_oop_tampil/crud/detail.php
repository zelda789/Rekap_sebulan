<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('visual_core');

$id = $_GET['id'];
mysql_query($sql);

$sql = "select 
artikel_id.nama as id_artikel,
tb_artikel.judul_artikel as title,
tb_artikel.gambar_artikel,
tb_artikel.isi_artikel

from tb_artikel, artikel_id
where 
tb_artikel.id_artikel = artikel_id.id_artikel and tb_artikel.id_artikel = 
'{$id}'";

	$result = mysql_query ($sql);
	$data = mysql_fetch_array($result); 

?>
<link rel="stylesheet" href="../css/bootstrap.css">
<br>
<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th><center>ID_ARTIKEL</th>
        <th><center>TITLE</th>
        <th><center>IMAGE</th>
        <th><center>CONTAIN</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $data['id_artikel'] ?></td>
        <td><?php echo $data['title'] ?> </td>
        <td><img src="../<?php echo $data['gambar_artikel'] ?>"style="width :150px"></td>
        <td><?php echo $data['isi_artikel'] ?></td>
      </tr>
     
    </tbody>
  </table>
  <button type="button" class="btn btn-primary btn-success"> <a href ="../EDIT.php">BACK</button></a>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src ="css/bootstrap.css"></script>