<?php session_start();
if(isset($_SESSION['userdata'])) :

$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('visual_core');
$sql = "select tb_artikel.id_artikel, tb_artikel.judul_artikel as title,
tb_artikel.gambar_artikel,
tb_artikel.isi_artikel
from tb_artikel";

$result = mysql_query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD BLOG</title>
	<link rel="stylesheet" href="css/bootstrap.css">
<br>
</head>
<body> 
<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>TITLE</th>
        <th>IMAGE</th>
        <th>CONTAIN</th>
        <th>UPDATE</th>
        <th>DETAILS</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($data = mysql_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $data['title']; ?></td>
			<td><img src=" <?php echo $data['gambar_artikel']; ?>"width= 120px"></td>
			<td><?php echo $data['isi_artikel']; ?></td>
			<td><a href="crud/update.php?id=<?php echo 
			$data ['id_artikel']?>"> Update </a></td>
			<td>
				<a href="crud/detail.php?id=<?php echo $data['id_artikel']; ?>">Detail</a>
			</td>	

		</tr>
		<?php } ?>
  </table>

  <button  type="button" class="btn btn-primary btn-danger"><a href="logout.php">Keluar</button></a>
</div>


<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src ="css/bootstrap.css"></script>
</tbody>
</body>
</html>
 <?php else : ?>
	HARAP LOGIN DAHULU YA.<br><a href="login.php">Login</a>
<?php endif;  ?>
  