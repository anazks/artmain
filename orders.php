<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/navbar.css">
    <link rel="stylesheet" href="./style/orders.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Our Artists</title>
</head>

<body>
  <header>
    <?php include('chunks/navbar.php'); ?>  
  </header>

  <div class="container main-section">
    <div class="row">
    <?php include('conn.php');
        $email=$_SESSION['email'];
        $sql2="SELECT * FROM customer where email='$email'";
        $query2=mysqli_query($conn,$sql2);
        $row2=$query2->fetch_assoc();
        $cid=$row2['custID'];

        $sql4="SELECT * FROM orders where custID='$cid'";
        $query4=mysqli_query($conn,$sql4);
        if($query4->num_rows>0)
        { 
        while($row4 = $query4->fetch_assoc())
        {   
            array_push($orders,$row4["OID"]);
        }
    } ?>
    <div class="col-lg-12 pb-2">
        <h3 class="myorders">My orders</h3>
        <div class="container main-section">
    <div class="row">

 
    <div class="col-lg-12 pl-3 pt-3">
        <table class="table table-hover border bg-white">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>OrderID</th>
                    <th>Price</th>
                </tr>
            </thead>

       
             <?php include('ordersandname.php'); ?>
    
            <tfoot>
                <td><a href="collection.php" class="btn btn-warning text-white"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td> <?php echo '<a class="btn btn-success" role="button" href="logout.php">Logout</a>'; ?> </td>
            </tr>
        </tfoot>
        </table>

    </div>
    </div>
    </div>
    </h3>
    </div>
    </div>
    </div>
    <?php include('chunks/footer.php'); ?>  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
