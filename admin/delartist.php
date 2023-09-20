<?php
$conn = mysqli_connect('localhost','root','','artgallery');
$em=$_POST['email'];
$AID=$_POST['AID'];
$sql2="SELECT * FROM artist WHERE AID ='$AID'";
$query=mysqli_query($conn,$sql2);
$rows=mysqli_num_rows($query);
if($rows == 1){
    $sql="DELETE FROM artist WHERE AID='$AID'";
    mysqli_query($conn,$sql);
    header("location:admin-home.html");
}
else{
    header("location:add-artist.html");
}
mysqli_close($conn);
?>