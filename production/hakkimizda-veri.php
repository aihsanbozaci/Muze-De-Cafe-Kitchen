<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
$referer = $_SERVER['HTTP_REFERER'];

include '../sistem/baglan.php';

$menusor = $baglan->prepare("SELECT * FROM menu");
$menusor->execute();
$menucek = $menusor->fetch(pdo::FETCH_ASSOC);

if ($referer == "") {
  echo "GİRİŞ YAPMALISINIZ!";
  header("Refresh: 0; url=../login.php");
  ob_end_flush();
}


$sorgu = $baglan->prepare("SELECT * FROM veri_hakkimizda Where id=1");
$sorgu->execute();
$sonuc = $sorgu->fetch();


if ($_POST) {

  $satir = [
    'icerik' => $_POST['icerik'],
  ];
  $sql = "UPDATE veri_hakkimizda SET icerik=:icerik WHERE id=1;";
  $durum = $baglan->prepare($sql)->execute($satir);
  if ($durum == true) {
    header('location: hakkimizda-veri.php');
  }
}
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Paneli</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="../ck/ckeditor/ckeditor.js"></script>
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="../ckfinder/ckfinder.js"></script>


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="../assets/css/style.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="../assets/img/mutfakwallpaper.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Admin</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>


          <li><a href="../admin.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Anasayfa Veri Ekle</span></a></li>
          <li><a href="hakkimizda-veri.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Hakkımızda Veri Ekle</span></a></li>
          <li><a href="iletisim-veri.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>İletişim Veri Ekle</span></a></li>
          <li><a href="slider.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Sliderlar</span></a></li>
          <li><a href="menu.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Menü Değiştir</span></a></li>
          <li><a class="getstarted scrollto" href="logout.php">Çıkış</a></li>

        </ul>
      </nav>
    </div>
  </header>




  <main id="main">

    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Hakkımızda Sayfasına Veri Ekle</h2>
          <p>Hakkımızda sayfasına veri girişini buradan yapabilirsiniz!</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="../assets/img/admin.jpg" class="img-fluid" alt="" style="width: 96%;">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">

            <form action="" method="POST" enctype="multipart/form-data">
              <script src="../ckeditor/ckeditor.js"></script>
              <script src="../ckfinder/ckfinder.js"></script>
              <script src="ck/ckeditor/ckeditor.js"></script>
              <textarea class="ckeditor" id="ckeditor2" name="icerik"><?= $sonuc["icerik"] ?></textarea>

              <br>
              <script type="text/javascript">
                var editor = CKEDITOR.replace('editor2', {
                  filebrowserBrowseUrl: '../ckfinder/ckfinder.html',
                  filebrowserImageBrowseUrl: '../ckfinder/ckfinder.html?type=Images',
                  filebrowserFlashBrowseUrl: '../ckfinder/ckfinder.html?type=Flash',
                  filebrowserUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                  filebrowserImageUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                  filebrowserFlashUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });
                CKFinder.setupCKEditor(editor, '../ckeditor');
              </script>
              <input type="submit" />
            </form> <br>
            <form action="uploadhakkimizda.php" method="post" name="form1" enctype="multipart/form-data">
              <input type="file" name="resim" />
              <input type="text" name="resimaciklama" />
              <input type="submit" name="gonder" value="Kaydet">
            </form>
            <?php $messages[0] = "Resim başarıyla yüklendi!";
            if (isset($_GET['message'])) {
              echo $messages[$_GET['message']];
            } ?>
            <br>
            <?php $messages[1] = "Kayıt sırasında bir hata oluştu!";
            if (isset($_GET['message'])) {
              echo $messages[$_GET['message']];
            } ?>
            <br>
            <?php $messages[2] = "Resim yalnızca JPEG formatında olmalıdır!";
            if (isset($_GET['message'])) {
              echo $messages[$_GET['message']];
            } ?>
            <br>
            <?php $messages[3] = "Resmin boyutu 1 MB'yi geçemez!";
            if (isset($_GET['message'])) {
              echo $messages[$_GET['message']];
            } ?>
          </div>
        </div>

      </div>

    </section>










  </main>





  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/js/main.js"></script>

</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>