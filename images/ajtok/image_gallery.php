<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <link href="../../styles.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

</head>
<body>
  <div class="nav-bar">
    <ol>
      <li><a href="../../index.php#welcome">Köszöntő</a></li>
      <li><a href="../../index.php#profile">Miben segíthetünk?</a></li>
      <li><a href="../../index.php#reference">Referenciáink</a></li>
      <li><a href="../../index.php#contacts">Elérhetőségeink</a></li>
    </ol>
  </div>

  <div class="container">
    <div class="gallery_container">
      <div class="section-title">
        <p>Ajtók</p>
      </div>
        <div class="main-pic-container">
          <div class="fotorama" data-maxheight="500px" data-nav="thumbs">
              <?php
                $dir =".";
                $images = scandir($dir, 0);
                for ( $i = 2 ; $i < count($images) ; $i++) {
                  echo '<img src="'.$images[$i].'">';
                  };
              ?>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright &copy; Zámbó és Társa Bt. <?php echo date("Y")?></p>
    </div>

  </div>
 </body>
</html>
