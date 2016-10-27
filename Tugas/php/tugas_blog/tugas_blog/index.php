<?php include '_layout/header.php'; ?>
		<!-- POSTS -->
<div id="wrapper">
		<div id="posts-list">
			<!-- POSTS 1-->
			<?php
				$query = "SELECT * FROM tb_artikel";
				$result = mysql_query($query);

				while ($data = mysql_fetch_array($result)) {
					?>
					<div class="artikel">
						<img <?php echo 'src="' .$data['gambar_artikel'] .'"'; ?> alt="post image"/>
						<h4><?php echo $data['judul_artikel']; ?></h4>
						<b>Sep 30,2016</b><b>View :0</b>
						<p><?php echo substr($data['isi_artikel'], 0, 200); ?></p>
						<a href="#">I want Read More</a>
					</div>
					<?php
				}
			?>
			<!-- POSTS 2-->
			<!-- <div class="artikel">
				<img src="edward-teach.jpg" alt="Post"/>
				<h4>Edward Teach "Blackbeard"</h4>
				<b>Sep 30,2016</b><b>View : 0</b>
				<p>Though there have been more successful pirates, Blackbeard is one of the best-known and widely-feared of his time. He commanded four ships and had a pirate army of 300 at the height of his career, and defeated the famous warship, HMS “Scarborough” in sea-battle.</p>
				<a href="#">I want Read More</a>
			</div>
			 POSTS 3
			<div class="artikel">
				<img src= "anne-bonny.jpg" alt="gambar artikel"/>
				<h4>Anne Bonny</h4>
				<b>Sep 30,2016</b><b>View : 0</b>
				<p>Having traveled to the New World with her family, Anne fell in love and married a poor sailor named James Bonny. But when she grew increasingly disappointed by her husband’s lack of valor, she began seeking out the company of many different men in Nassau.</p>
				<a href="#">I want Read More</a>
			</div> -->
		</div>
				<!-- sidebar -->
	<?php include '_layout/sidebar.php';?>
			<br>

<!-- <embed src="dagobah_Pirate_full.swf" width="220" height="220"></embed> -->

<!-- <img src="table.png" height:20px> -->

<div id="wrapper">
		<!-- footer -->
		<?php include '_layout/footer.php';?>
</body>
</html>