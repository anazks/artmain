<?php
$conn = mysqli_connect('localhost','root','','artgallery');
$name=$_POST['name'];
$age=$_POST['age'];
$phno=$_POST['phno'];
$g=$_POST['gender'];
$c=$_POST['address'];
$em=$_POST['email'];
$d=$_POST['desc'];
$l=$_POST['ln'];
$sql2="SELECT * FROM artist WHERE email ='$em'";
$query=mysqli_query($conn,$sql2);
$rows=mysqli_num_rows($query);
if($rows == 0){
    $sql="INSERT INTO artist values(NULL,'$name','$age','$phno','$g','$c','$em','$d','$l')";
    mysqli_query($conn,$sql);
    header("location:admin-home.html");
}
else{
    header("location:add-artist.html");
}
mysqli_close($conn);
?>