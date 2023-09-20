<?php
        $conn = mysqli_connect('localhost','root','','artgallery');
        $OID=$_POST['oid'];
        $query ="SELECT * FROM orders where OID='$OID'";
        $result1=$conn->query($query);
        $row = $result1->fetch_assoc();
        echo '<table bgcolor=#ffffff border="2" cellspacing="5" cellpadding="5"> 
        <tr><td>Order ID : '.$row["OID"].'</td></tr>
        <tr><td>Artwork ID : '.$row["AWID"].'</td></tr>
        <tr><td>Amount : '.$row["amount"].'</td></tr>
        <tr><td>customer ID : '.$row["custID"].'</td></tr>';
        $c=$row["custID"];
        $aw=$row["AWID"];
        $query3 ="SELECT * FROM customer where custID=$c";
        $result3=$conn->query($query3);
        $row3 = $result3->fetch_assoc();
        echo '<tr><td>Customer name : '.$row3["name"].'<td</tr>
        <tr><td>Email : '.$row3["email"].'</td></tr>
        <tr><td>Age : '.$row3["age"].'</td></tr>';
        $query2 ="SELECT * FROM artwork where AWID=$aw";
        $result2=$conn->query($query2);
        $row2 = $result2->fetch_assoc();
        echo '<tr><td>Artwork name : '.$row2["name"].'<td</tr>
        <tr><td>Category : '.$row2["category"].'</td></tr>
        <tr><td>Description : '.$row2["description"].'</td></tr>';
        $a=$row2["AID"];
        $query4 ="SELECT * FROM artist where AID=$a";
        $result4=$conn->query($query4);
        $row4 = $result4->fetch_assoc();
        echo '<tr><td>Artist name : '.$row4["name"].'<td</tr>
        <tr><td>Email : '.$row4["email"].'</td></tr>';
        echo '<form action="admin-home.html">
            <input type="submit" value="home" />
        </form>';
        echo '<form action="orderdetail.html">
            <input type="submit" value="Another order" />
        </form>';
        echo '<form action="">
            <input type="submit" value="print" />
        </form>';
        ?>            