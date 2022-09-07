<?php 
ob_start();
session_start();

include 'baglan.php';


if (isset($_POST['admingiris'])) 
{
$kullanici_mail = $_POST['kullanici_mail'];
$kullanici_password = $_POST['kullanici_password'];

$kullanicisor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
$kullanicisor->execute(array(
	'mail' => $kullanici_mail,
	'password' => $kullanici_password,
	'yetki' => 5
	
	));

	echo $say = $kullanicisor->rowCount();
	
	if ($say==1) 
	{
		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("location: ../production/index.php");
		exit;
	}

	else
	{
		header("location: ../production/login.php?durum=no");
		exit;
	}

}

if (isset($_POST['menuduzenlekaydet'])) 
{
	$menu_id=$_POST['menu_id'];


	$ayarkaydet=$baglan->prepare("UPDATE menu SET
		menu_ad=:ad,
		menu_url=:url,
		menu_sira=:sira,
		menu_durum=:durum
		WHERE menu_id={$_POST['menu_id']}");

	$update=$ayarkaydet->execute(array(
		'ad' => $_POST['menu_ad'],
		'url' => $_POST['menu_url'],
		'sira' => $_POST['menu_sira'],
		'durum' => $_POST['menu_durum']
		));
	
	if ($update) 
	{
		header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=ok");
	}
	else
	{
		header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=no");
	}
}

if (isset($_POST['maktif'])) {

		$menu_id=(int)$_POST["menu_id"];
		$pasifyap=$baglan->prepare("UPDATE menu SET
		menu_durum=:durum
		WHERE menu_id=$menu_id");

		$update=$pasifyap->execute(array(
		'durum' => 0
	));
	if ($update) 
	{
		header("Location:../production/menu.php?menu_id=$menu_id&durum=ok");
	}
	else
	{
		header("Location:../production/menu.php?menu_id=$menu_id&durum=no");
	}
	
}
if (isset($_POST['mpasif'])) {
		$menu_id=(int)$_POST["menu_id"];
		$pasifyap=$baglan->prepare("UPDATE menu SET
		menu_durum=:durum
		WHERE menu_id=$menu_id");

		$update=$pasifyap->execute(array(
		'durum' => 1
	));
	if ($update) 
	{
		header("Location:../production/menu.php?menu_id=$menu_id&durum=ok");
	}
	else
	{
		header("Location:../production/menu.php?menu_id=$menu_id&durum=no");
	}
}

if ($_GET['menusil']=="ok") 
{
	$sil=$baglan->prepare("DELETE FROM menu WHERE menu_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['menu_id']
	));
	if ($kontrol) 
	{
		header("location:../production/menu.php?sil=ok");
	}
	else
	{
		header("location:../production/menu.php?sil=no");
	}
}


if (isset($_POST['menukaydet'])) 
{

	$menu_seourl=$_POST['menu_ad'];

	$ayarkaydet=$baglan->prepare("INSERT INTO menu SET
		menu_ad=:ad,
		menu_url=:url,
		menu_sira=:sira,
		menu_durum=:durum
		");

	$ınsert=$ayarkaydet->execute(array(
		'ad' => $_POST['menu_ad'],
		'url' => $_POST['menu_url'],
		'sira' => $_POST['menu_sira'],
		'durum' => $_POST['menu_durum']
		));
	
	if ($ınsert) 
	{
		header("Location:../production/menu.php?durum=ok");
	}
	else
	{
		header("Location:../production/menu.php?durum=no");
	}
}
 ?>
