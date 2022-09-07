<?php
include '../../sistem/baglan.php';
 if($_POST){if ($_FILES["resim"]["size"]<1024*1024)
    {if ($_FILES["resim"]["type"]=="image/jpeg"){ 
    $dosya_adi   =    $_FILES["resim"]["name"];$uret=array("as","rt","ty","yu","fg");$uzanti=substr($dosya_adi,-4,4);$sayi_tut=rand(1,10000);
    $yeni_ad="../../uploads/slider/".$uret[rand(0,4)].$sayi_tut.$uzanti;
    if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad)){echo 'Dosya başarıyla yüklendi.';
    $sorgu = $baglan->prepare("INSERT INTO slideryukleme SET resim=:resim");  
    $sorgu->execute(array(':resim'=> $yeni_ad)); 
       if ($sorgu){header('Location: ../slider.php?message=0');}
       else{header('Location: ../slider.php?message=1');}}
       else{header('Location: ../slider.php?message=1');}}
       else{header('Location: ../slider.php?message=2');}}
       else{header('Location: ../slider.php?message=3');}}
       
       ?>
       