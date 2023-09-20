<?php
$conn = mysqli_connect('localhost','root','','artgallery');
$name=$_POST['name'];
$cat=$_POST['category'];
$price=$_POST['price'];
$AID=$_POST['AID'];
$ld=$_POST['loginid'];
$d=$_POST['desc'];
$l=$_POST['ln'];
$sql2="SELECT * FROM artist WHERE AID ='$AID'";
$query=mysqli_query($conn,$sql2);
$rows=mysqli_num_rows($query);
if($rows == 1){
    $sql="INSERT INTO artwork values(NULL,'$name','$cat','$d','$price','$AID','$ld','$l')";
    mysqli_query($conn,$sql);
    header("location:admin-home.html");
}
else{
    header("location:add-artwork.html");
}
mysqli_close($conn);
?>