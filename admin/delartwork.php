<?php
$conn = mysqli_connect('localhost','root','','artgallery');
$name=$_POST['name'];
$AWID=$_POST['AWID'];
$sql2="SELECT * FROM artwork WHERE AWID ='$AWID'";
$query=mysqli_query($conn,$sql2);
$rows=mysqli_num_rows($query);
if($rows == 1){
    $sql="DELETE FROM artwork WHERE AWID='$AWID'";
    mysqli_query($conn,$sql);
    header("location:admin-home.html");
}
else{
    header("location:add-artwork.html");
}
mysqli_close($conn);
?>