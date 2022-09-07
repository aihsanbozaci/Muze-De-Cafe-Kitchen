<?php


$referer = $_SERVER['HTTP_REFERER']; 

if ($referer == "") 
{ 
echo "GİRİŞ YAPMALISINIZ!"; 
header("Refresh: 0; url=login.php");
ob_end_flush();
} 

else 
{ 

} 

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'webproje';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
 
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if ( !isset($_POST['username'], $_POST['password']) ) {
  
    exit('Please fill both the username and password fields!');
}
if ($stmt = $con->prepare('SELECT id, password FROM kullanici WHERE username = ?')) {
  
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
  
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
  
        if ($_POST['password'] === $password) {
    
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            $name = $_SESSION['name']; 
            
   
          
            header('Location: admin.php');
        } else {
           
            header('Location: login.php?message=0');
        }
    } else {
       
        header('Location: login.php?message=0');
        
    }

    $stmt->close();
}
?>