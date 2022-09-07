<?php
$durum="";
include("sistem/baglan.php");
if($durum){
    echo"<script>
    alert(\"$durum\");
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Login Paneli</title>

</head>
<body>


<div class="sidenav">
         <div class="login-main-text">
            <h2>Admin<br> Giriş Paneli</h2>
            <p>Giriş yapınız.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="yonlendir.php" method="post" onsubmit="return submitUserForm();">
                  <div class="form-group">
                     <label>Kullancı Adı</label>
                     <input type="text" class="form-control" name="username" placeholder="Kullancı Adı" required>
                  </div>
                  <div class="form-group">
                     <label>Şifre</label>
                     <input type="password" name="password" class="form-control" placeholder="Şifre" required>
                  </div>
                  <button type="submit" class="btn btn-black">Giriş</button>
                  <br> <br>
                  <?php $messages[0]="Hatalı kullanıcı adı veya şifre!";   
                if(isset($_GET['message'])){ 
                    echo $messages[$_GET['message']]; 
                } ?>
               </form>
            </div>
         </div>
      </div>
</body>
<style>
body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style>

</html>