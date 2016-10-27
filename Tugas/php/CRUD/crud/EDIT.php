<?php session_start();
if(isset($_SESSION['userdata'])) :

$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('cendana');

$sql = "select pegawai.id_pegawai as id, pegawai.nama as nama_pegawai, posisi.nama as nama_posisi
from pegawai, posisi
where pegawai.id_posisi=posisi.id_posisi";


if($_GET['q']){
	$search = $_GET['q'];
	$sql .=" and (pegawai.nama like '%{$search}%' or posisi.nama like '%{$search}%')";
}

$result = mysql_query($sql);
?>

<link rel="stylesheet" href="../css/bootstrap.css">

<!DOCTYPE html>
<html>
<body>




<!-- <form action ="index.php" method="GET">
<input type="text" name="q" value="<?php echo $_GET['q'] ?>">
<input type="submit" value="search">
</form> -->

				<!-- BOOTSTRAP TABLE -->
  <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><center><h4>Daftar Pegawai Cendana</h4>
  <!-- Search Bootsrap -->
<div class ="row">
<form action ="EDIT.php" method="GET">
  <div  class=" col-lg-offset-3 col-lg-6">
    <div class="input-group">
      <input type="text" name="q" value="<?php echo $_GET['q'] ?>" class="form-control" placeholder="Cari Pegawai...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" value="search">Go!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</form>
</div>
  </div>
  <div class="panel-body">
  </div>


  <!-- Table -->
  <table class="table">
    <thead>
		<tr>
			<th class="info">Nama</th>
			<th class="danger">Posisi</th>
			<th class="warning">Update</th>
			<th class="success">Hapus</th>
			<th class="success">Detail</th>
		</tr>
	</thead>
	<tbody>
	<?php while ($data = mysql_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $data['nama_pegawai']; ?></td>
			<td><?php echo $data['nama_posisi']; ?></td>
			<td><a href="update.php?id=<?php echo 
			$data ['id']?>"><span class="glyphicon glyphicon-edit"></span></a></td>
			<td><a href="delete.php?id=<?php echo 
			$data ['id']?>"><span class="glyphicon glyphicon-remove"></span></a></td>
			<td><a href="detail.php?id=<?php echo 
			$data ['id']?>">Detail</a></td>		
		</tr>
		<?php } ?>
  </table>
</div>

<div class="tambahData">
	<button type="button" class="btn btn-primary btn-success"> <a href="tambah.php">Tambah</button></a>
	<button  type="button" class="btn btn-primary btn-danger"><a href="../logout.php">Keluar</button></a>
</div>

<div class="container">
  
</div>


<?php else : ?>
	HARAP LOGIN DAHULU.<a href="../index.php">Kembali</a>
<?php endif;  ?>
	
<!-- Bootstrap + jquery -->

<script src="../js/https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src ="../js/bootstrap.min.js"></script>
</tbody>
</table>
</body>
</html>