<?php include('../../template/header.php'); ?>
<div class="container">
  <br/>
    <div id="reference">
  <div class="section-title">
    <p>Lépcsők</p>
  </div>
    <?php
      $images = glob("*.jpg");

      for ( $i = 0 ; $i < count($images) ; $i++) {
        echo "<div class='img_gallery'>";
        echo '<a href="'.$dir.$images[$i].'" data-lightbox="Lépcsők"><img src="'.$dir.$images[$i].'" alt="Lépcsők-'.$i.'"></a>';
        echo '</div>';
        };
    ?>
  </div>
<?php include('../../template/footer.php'); ?>
