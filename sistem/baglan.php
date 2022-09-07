<?php

try{
    $baglan = new PDO("mysql:host=localhost;dbname=webproje;charset=UTF8","root","");
    $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $error){
    die($e->getMessage());

}


?>