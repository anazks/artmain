<?php
include('conn.php');
$id = $_GET["id"];
$stmt =$conn->prepare("SELECT * FROM artwork where AWID=?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/art.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Our Artists</title>
</head>
<body>
<header>
    <?php include('chunks/navbar.php'); ?>  
  </header>
  <section>
      <div class="container pt-5 mt-5">
          <div class="row mt-5">
              <div class="col-12 col-md-6 w-100 h-100">
                <?php  echo '<img class="image w-100" src="'. $row['imgsrc']. '" alt="'. $row['name']. '  class="w-100 h-100""/>'; ?>
              </div>
              <div class="col-12 col-md-6 p-5">
                  <h2><?php echo $row['name'] ?></h2>
                  <h1 style="color: white;">&#8377;<?php echo $row['price'] ?></h1>
                  <p><?php echo $row['description'] ?>  </p>
                  <a class="btn button" role="button" href="order.php?AWID=<?php echo $row['AWID'] ?>">Buy Now</a>
              </div>
          </div>
      </div>
  </section>
  <?php include('chunks/footer.php'); ?>  
    
  </body>
</html>