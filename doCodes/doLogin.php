<?php
include("../includes/dbcon.php");

$email = $_POST['email'];
$password = $_POST['password'];

$email = stripcslashes($email);
$password = stripcslashes($password);

$sql = "select * from login where email = '$email' and password = '$password'";  
$result = $dbCon->query($sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  


if($email== $row['email'] && $password == $row['password']){ 
       $_SESSION['user'] = $row['email']; 
        $_SESSION['userPass'] = $row['password']; 
        $_SESSION['idUser'] = $row['id'];
        $idUser = $row['id']; 
      header('LOCATION:/vejleder/registration.php'); 
   }else{
      header('LOCATION: /?f=login');
   }
?>