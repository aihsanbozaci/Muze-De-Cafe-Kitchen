<?php
include 'sistem/baglan.php';
 if($_POST){if ($_FILES["resim"]["size"]<1024*1024)
    {if ($_FILES["resim"]["type"]=="image/jpeg"){ 
    $aciklama    =     $_POST["resimaciklama"];
    $dosya_adi   =    $_FILES["resim"]["name"];$uret=array("as","rt","ty","yu","fg");$uzanti=substr($dosya_adi,-4,4);$sayi_tut=rand(1,10000);
    $yeni_ad="uploads/".$uret[rand(0,4)].$sayi_tut.$uzanti;
    if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad)){echo 'Dosya başarıyla yüklendi.';
    $sorgu = $baglan->prepare("INSERT INTO resimyukleme SET resim=:resim,resimaciklama=:resimaciklama");  
    $sorgu->execute(array(':resim'=> $yeni_ad,':resimaciklama'=>$aciklama)); 
       if ($sorgu){header('Location: admin.php?message=0');}
       else{header('Location: admin.php?message=1');}}
       else{header('Location: admin.php?message=1');}}
       else{header('Location: admin.php?message=2');}}
       else{header('Location: admin.php?message=3');}}
       
       ?>