<?php  include'_layout/header.php'; ?>
<section id="hero">
</section>

<section id="content">
	<div class="container">
		<section id="mainbar">
			<div class="blog-wrapper">

				<!-- POST-->
				<?php 
// $query = "SELECT * FROM tb_artikel";
// $result = mysql_query($query);
				$id = $_GET['id'];

				$data = show\tampilItm::tampilItem('tb_artikel', $id);

				?>
				<div class="blog-item">
					<h2><?php echo $data['judul_artikel']; ?></h2>
					<a href="" class="blog-meta">5 Oktober 2015</a>
					<p><img <?php echo 'src="' .$data['gambar_artikel'] .'"'; ?> alt="post image"/></p>
					<p> <?php echo $data['isi_artikel']; ?></p>
				</div>
			</div>
		</section>
	</div>
</section>
<!-- SIDEBAR -->
<?php  include'_layout/sidebar.php'; ?>
<!-- ============================================== -->
<div class="clearfix"></div>
<!-- FOOTER -->
<?php  include '_layout/footer.php';  ?>

