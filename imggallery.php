<?php include('template/header.php'); ?>
<div class="container">
    <?php
      $dir ="images/ref_szobabutorok/";
      $images = scandir($dir, 0);
      
      for ( $i = 2 ; $i < count($images) ; $i++) {
        echo "<div class='img_gallery'>";
        echo '<a href="'.$dir.$images[$i].'" data-lightbox="Szobabútorok"><img src="'.$dir.$images[$i].'" alt="Szobabútorok-'.$i.'"></a>';
        echo '</div>';
        };
    ?>
<?php include('template/footer.php'); ?>
