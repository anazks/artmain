<?php 

   $email=$_SESSION['email'];
   $sql="SELECT * FROM customer where email='$email'";
   $query1=mysqli_query($conn,$sql);
   $row1=$query1->fetch_assoc();

   $cid=$row2['custID'];
   $sql2="SELECT * FROM orders where custID='$cid'";
   $query2=mysqli_query($conn,$sql2);
   $row2=$query2->fetch_assoc();

 ?>
<div class="orders">
    <?php   while($row2 = mysqli_fetch_array($query2) ){ ?>
        <tr> <td><?php echo $row1['name'];?></td>
        <td><?php echo $row2['OID'];?></td>
        <td><?php echo "&#8377;".$row2['amount'];?></td>
     </tr>
    <?php } ?>
</div>
