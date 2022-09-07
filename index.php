<?php

error_reporting(0);
include('sistem/baglan.php'); 
$sorgu = $baglan->prepare("SELECT * FROM veri Where id=1"); 
$sorgu->execute();
$sonuc = $sorgu->fetch(); 

$menusor = $baglan->prepare("SELECT * FROM menu");
$menusor->execute();
$menucek = $menusor->fetch(pdo::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Tooplate">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Müze de Café Kitchen</title>





  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

  <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">

  <link rel="stylesheet" href="assets/css/tooplate-artxibition.css">



</head>

<body>


  <header class="header-area header-sticky col-xl-12">
    <div class="container">
      <div class="row">
        <nav class="main-nav">
          <a href="index.php" class="logo">Müze de Café <em>Kitchen</em></a>

          <?php
          $menusor = $baglan->prepare("SELECT * FROM menu order by menu_sira desc");
          $menusor->execute();
          while ($menucek = $menusor->fetch(pdo::FETCH_ASSOC)) {
          ?>

            <ul class="nav">
              <?php if ($menucek['menu_durum'] == 1) : ?>
                <a href="<?php echo $menucek['menu_url']; ?>">
                  <br>
                  <li class="logo">
                    <?php echo $menucek['menu_ad']; ?>
                </a>
              <?php endif ?>
              </li>
            </ul>
          <?php } ?>
        </nav>
      </div>
  </header>
  <div style="box-shadow: rgb(0 0 0 / 50%) 0px -6px 6px -6px;
    padding:0.4%;
    margin-top:1%;
    background-color:white;"></div>
  <?php $resimler = $baglan->prepare("SELECT * FROM slideryukleme");
  $resimler->execute();
  if ($resimler->rowCount()) {
    foreach ($resimler as $row) {      ?> <?php }
                                                              } ?>
  <?php $resimler = $baglan->prepare("SELECT * FROM slideryukleme2");
  $resimler->execute();
  if ($resimler->rowCount()) {
    foreach ($resimler as $row2) {      ?> <?php }
                                                                } ?>
  <?php $resimler = $baglan->prepare("SELECT * FROM slideryukleme3");
  $resimler->execute();
  if ($resimler->rowCount()) {
    foreach ($resimler as $row3) {      ?> <?php }
                                                                } ?>


  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="yeni klasör/9 mart web/<?php echo $row["resim"]; ?>" width="100%" height="815" alt="resim">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="yeni klasör/9 mart web/<?php echo $row2["resim2"]; ?>" width="100%" height="815" alt="resim2">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="yeni klasör/9 mart web/<?php echo $row3["resim3"]; ?>" width="100%" height="815" alt="resim3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Önceki</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Sonraki</span>
    </a>
  </div>





  <div class="amazing-venues">

    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="left-content">

            <?= $sonuc["icerik"] ?>

            <br>
            <?php $resimler = $baglan->prepare("SELECT * FROM resimyukleme");
            $resimler->execute();
            if ($resimler->rowCount()) {
              foreach ($resimler as $row) {      ?> <img src="<?php echo $row["resim"]; ?>" align="center" width="100%" height="60%" alt="resim" /> <?php }
                                                                                                                                                                                                                                                                } ?>


          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-content">
            <h5 id="anasayfailetisimbaslik"><i class="fa fa-map-marker"></i> Bizi ziyaret edin</h5>
            <span id="anasayfailetisimparagraf">Akarbaşı Mah. Atatürk Bulvarı <br>
              Müze Sk. No:64 D:Z1<br>
              Odunpazarı/Eskişehir</span>
            <div class="text-button"><a href="https://www.google.com/maps/place/M%C3%BCze+de+Cafe+Kitchen/@39.7660056,30.5133914,15z/data=!4m2!3m1!1s0x0:0xc0ed8d665bdcdf4b?sa=X&ved=2ahUKEwik5ee3nrf2AhUHQvEDHacfCwsQ_BJ6BAgxEAU">Yol tarifi alın <i class="fa fa-arrow-right"></i></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?= $kayit['birim'] ?>

  <footer class="header-area header-sticky col-xl-12" style="box-shadow: rgb(0 0 0 / 50%) 0px -6px 6px -6px;
    padding:1%;
    margin-top:1%;
    background-color:white;">

    <div class="container">



      <nav class="main-nav">
        <a href="index.php" class="logo">Müze de Café <em>Kitchen</em></a>
        <?php
        $menusor = $baglan->prepare("SELECT * FROM menu order by menu_sira desc");
        $menusor->execute();
        while ($menucek = $menusor->fetch(pdo::FETCH_ASSOC)) {
        ?>

          <ul class="nav">
            <?php if ($menucek['menu_durum'] == 1) : ?>
              <a href="<?php echo $menucek['menu_url']; ?>">
                <br>
                <li class="logo">
                  <?php echo $menucek['menu_ad']; ?>
              </a>
            <?php endif ?>
            </li>
          </ul>
        <?php } ?>
      </nav>
    </div>
  </footer>


  <script src="assets/js/jquery-2.1.0.min.js"></script>


  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>


  <script src="assets/js/scrollreveal.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/imgfix.min.js"></script>
  <script src="assets/js/mixitup.js"></script>
  <script src="assets/js/accordions.js"></script>
  <script src="assets/js/owl-carousel.js"></script>


  <script src="assets/js/custom.js"></script>

</body>

</html>