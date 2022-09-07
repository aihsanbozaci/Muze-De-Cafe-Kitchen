<?php 
include '../sistem/baglan.php';
$menusor = $baglan->prepare("SELECT * FROM menu");
$menusor->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Paneli</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
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


          <li><a href="../admin.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Anasayfaya Dön</span></a></li>
          <li><a class="getstarted scrollto" href="logout.php">Çıkış</a></li>

        </ul>
      </nav>
    </div>
  </header>




  <main id="main">




    





    <section>
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
         
            
                  <div class="x_content">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Menü Listeleme</h3>

                  
                     
                    <ul class="nav navbar-right panel_toolbox">

                      <div align="right"><a href="menu-ekle.php"><button class="btn btn-success btn-xs">Yeni Ekle</button></a></div>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  

        <div class="x_content">

   

           <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Menü Ad</th>
                          <th>Menü Url</th>
                          <th>Menü Sıra</th>
                          <th>Menü Durum</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>

                        <?php 
                        $say=0;

                          while($menucek = $menusor->fetch(PDO::FETCH_ASSOC)) { $say++?>

                        <tr>
                          <td><?php echo $say ?></td>
                          <td><?php echo $menucek['menu_ad']; ?></td>
                          <td><?php echo $menucek['menu_url']; ?></td>
                          <td><?php echo $menucek['menu_sira']; ?></td>
                          <form action="../sistem/islem.php" enctype="multipart/form-data" method="POST" id="demo-form3" data-parsley-validate class="form-horizontal form-label-left">
                          <td><center><?php
                             
                            if ($menucek['menu_durum']==1) {?>
                              <button type="submit" name="maktif" class="btn btn-success btn-xs">aktif</button>
                              <input type="hidden" name="id" value="aktif">
                              <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id']; ?>">
                            <?php } else {?>
                              <input type="hidden" name="id" value="pasif">
                              <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id']; ?>">
                              <button type="submit" method="POST" name="mpasif"
                               class="btn btn-mutet btn-xs">pasif</button>
                              <?php } ?>
                          </td>
                        </center>
                          </form>


                         <td><center><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id']; ?>&eski_sira=<?php echo $menucek['menu_sira']?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td> 
						 <td><center><a href="../sistem/islem.php?menu_id=<?php echo $menucek['menu_id']; ?>&menusil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>

                        </tr>


                         <?php }
                         ?>
                       
                      
                      </tbody>
                    </table>

       
             
                  </div>
                </div>
              </div>
              </div>


              </div>
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
  <script src="assets/js/main.js"></script>

</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>


