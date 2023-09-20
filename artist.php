<?php include('conn.php');
$id = $_GET["id"];
$stmt =$conn->prepare("SELECT * FROM artist where AID=?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$sql2="SELECT * FROM artwork where AID='$id'";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/artist.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Our Artists</title>
</head>
<body>
  <header>
    <?php include('chunks/navbar.php'); ?>  
  </header>
  <section class="artist mt-5 pt-5">
    <ul class="nav nav-pills justify-content-end" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-bio-tab" data-toggle="pill" href="#pills-bio" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-image-tab" data-toggle="pill" href="#pills-image" role="tab" aria-controls="pills-image" aria-selected="false">Artwork</a>
              </li>
      </ul>
      <div class="tab-content mt-5" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-bio" role="tabpanel" aria-labelledby="pills-bio-tab">
          <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h1><?php echo $row['name'] ?></h1>
                        <p>Born 1975, Peshawar, Pakistan</p>
                        <br/>
                        <p class="description">
                             <?php echo $row['description'] ?>
                        </p>
                       
                    </div>
                    <div class="d-none d-md-block col-md-6">
                      <?php echo '<img src="'. $row['imgsrc']. '" width="500px" height="450px" alt="artist" class=""/>'; ?>
                    </div>
                </div>
          </div>
        </div>

        <div class="tab-pane fade" id="pills-image" role="tabpanel" aria-labelledby="pills-image-tab">
          <div class="grid-container">
          <?php if($result1 = mysqli_query($conn, $sql2)){
       $x=mysqli_num_rows($result1);
         if(mysqli_num_rows($result1) > 0){
          for ($i =0 ; $i <= $x; $i++) {
        while($row = mysqli_fetch_array($result1) ){
          
           $i++;
            echo  '<div class="grid-item item'.$i.' ">';
            echo   '<img class="image" src="'. $row['imgsrc']. '" alt="'. $row['name']. '"/>';
            echo  '      <div class="overlay">';
            echo '<a class="text" href="art.php?id='. $row['AWID']. '">' . $row['name']. '</a>'; 
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
  </section>

  <?php include('chunks/footer.php'); ?>  

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>