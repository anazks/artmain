<?php
session_start();
$conn = mysqli_connect('localhost','root','','artgallery');
$loginid = $_POST['loginid'];  
$passwd = $_POST['password'];
$sql = "SELECT * FROM admin WHERE loginid = '$loginid.' AND passwd = '$passwd'";  
$result = mysqli_query($conn, $sql); 
//$count = mysqli_num_rows($result);
if($result)
{  
   header("location:admin-home.html");
} 
else{
    header("location:admin-login.html");
} 