<?php
include('conn.php');
$sql = 'SELECT distinct category FROM artwork';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/collection.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Our Artists</title>
</head>
<body>
  <header>
    <?php include('chunks/navbar.php'); ?>  
  </header>

  <section class="container-fluid">
    <div class="row mt-5 pt-5">
          <div class="col-12 col-md-1">
              <div class="title">Collections</div>
          </div>

          <div class="col-12 col-md-11">
                <div class="grid-container gridDiv">
                  <?php if($result = mysqli_query($conn, $sql)){
                    $x=mysqli_num_rows($result);
                      if(mysqli_num_rows($result) > 0){
                        for ($i =0 ; $i <= $x; $i++) {
                      while($row = mysqli_fetch_array($result) ){
                        
                        $i++;
                          echo  '<div class="grid-item item'.$i.' ">';
                          echo   '<img class="image" src="https://images.unsplash.com/flagged/photo-1572392640988-ba48d1a74457?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YXJ0fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="artist1"/>';
                          echo  '      <div class="overlay">';
                          echo '<a class="text" href="allArtwork.php?cat='. $row['category']. '">' . $row['category']. '</a>'; 
                          echo "</div>";
                          echo "</div>";
                        }   
                      }
                        mysqli_free_result($result);
                        } else{
                            echo "No records matching your query were found.";
                        }
                    } else{
                        echo "ERROR: Could not able to execute" ;
                    }
                    ?>
                  </div>
            </div>
        </div>
    </div>
  </section>
  <?php include('chunks/footer.php'); ?>  
</body>
</html>