<?php

error_reporting(0);
include('sistem/baglan.php');
$sorgu = $baglan->prepare("SELECT * FROM veri_hakkimizda Where id=1");
$sorgu->execute();
$sonuc = $sorgu->fetch();


?>
<php lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Tooplate">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

        <title>Hakkımızda</title>



        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

        <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">

        <link rel="stylesheet" href="assets/css/tooplate-artxibition.css">




    </head>

    <body>


        <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>



        <header class="header-area header-sticky col-xl-12">
            <div class="container">
                <div class="row">

                    <div class="col-12">
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

                </div>
            </div>
        </header>
        <div style="box-shadow: rgb(0 0 0 / 50%) 0px -6px 6px -6px;
    padding:1%;
    margin-top:1%;
    background-color:white;"></div>






        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <center><br><br><br>
                        <ul>
                            <?php $resimler = $baglan->prepare("SELECT * FROM hakkimizdaresimyukleme");
                            $resimler->execute();
                            if ($resimler->rowCount()) {
                                foreach ($resimler as $row) {      ?> <ul>
                                        <li> <img src="9 mart web/<?php echo $row["resim"]; ?>" align="justify" width="" height="" alt="resim" /> </li>
                                    </ul> <?php }
                                    } ?>

                            <li class="clear"></li>
                        </ul>

                </div>
            </div>
        </div>

        <div class="amazing-venues">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="left-content">
                            <?= $sonuc["icerik"] ?>
                   
                        </div>
                    </div>

                </div>
            </div>
        </div>




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