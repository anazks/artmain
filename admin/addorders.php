<?php
$conn = mysqli_connect('localhost','root','','artgallery');
$awid=$_POST['AWID'];
$amt=$_POST['amt'];
$custID=$_POST['cid'];
$sql1="SELECT * FROM artwork where AWID=$awid";
$query1=mysqli_query($conn,$sql1);
$rows1=mysqli_num_rows($query1);
if($rows1==1)
{
    $sql2="SELECT * FROM customer where custID=$custID";
    $query2=mysqli_query($conn,$sql2);
    $rows2=mysqli_num_rows($query2);
    if($rows2==1)
    {
        $sql="INSERT INTO orders(OID,AWID,amount,custID) values (NULL,'$awid','$amt','$custID')";
        mysqli_query($conn,$sql);
        header("location:admin-home.html");
    }
    else{
        header("location:admin-orders.html");
    }
}
else{
    header("location:admin-orders.html");
}
mysqli_close($conn);
?>