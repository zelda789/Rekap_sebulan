<?php  include'_layout/header.php'; ?>
<section id="hero">
</section>

<section id="content">
    <div class="container">
<section id="mainbar">
    
    <div class="blog-wrapper">

                <!-- POST 1 -->

<?php 
// $query = "SELECT * FROM tb_artikel";
// $result = mysql_query($query);
$array = show\tampilArt::tampilArtikel('tb_artikel');
foreach ($array as $data) { // while
?>
 <div class="blog-item">

 <h2><?php echo $data ['judul_artikel']; ?></h2>
  <img <?php echo 'src="' .$data['gambar_artikel'] .'"'; ?> alt="post image"/>
 <a href="" class="blog-meta">5 Oktober 2015</a>
 <p> <?php echo substr($data['isi_artikel'],0,200); ?></p>
    <a href="artikel.php?id=<?php echo $data['id_artikel']; ?>">
 
  </a>
 <a href="artikel.php?id=<?php echo $data ['id_artikel']; ?>" class="blog-readmore">Read More</a>
 </div>
 <?php
}
?>
    
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
