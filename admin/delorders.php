<?php
$conn = mysqli_connect('localhost','root','','artgallery');
$OID=$_POST['OID'];
$sql1="SELECT * FROM orders where OID=$OID";
$query=mysqli_query($conn,$sql1);
$rows=mysqli_num_rows($query);
if($rows == 1){
    $sql="DELETE FROM orders WHERE OID=$OID";
    mysqli_query($conn,$sql);
    header("location:admin-home.html");
}
else{
    header("location:admin-orders.html");
}
mysqli_close($conn);
?>