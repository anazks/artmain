<?php
$conn = mysqli_connect('localhost','root','','artgallery');
$em=$_POST['email'];
$ps=$_POST['password'];
$cps=$_POST['cpassword'];
$sql="SELECT * FROM customer WHERE email='$em'";
$query=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($query);
if($rows == 1){
    $ps=md5($ps);
    $sql2="UPDATE customer_login SET passwd ='$ps' WHERE email='$em'";
    mysqli_query($conn,$sql2);
    header("location:login.php");
}
else
{
    header("location:forgotpassword.html");
}
mysqli_close($conn);
?>