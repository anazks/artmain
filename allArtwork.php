<?php
include('conn.php');
$category = $_GET["cat"];
$sql = $conn->prepare("SELECT * FROM artwork where category=?");
$sql->bind_param("s", $category);
$sql->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/allArtwork.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Our Artists</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <a class="navbar-brand" href="#">
                <img src="./img/feather.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    Artisance
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><img src=""/></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="collection.php">ArtWork</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="allArtists.php">Artists</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
              </ul>
    
               <div style="z-index: 100;">
                <button class="btn btn-outline-success my-2 my-sm-0" >Login</button>
               </div> 
            </div>
          </nav>  
  </header>

  <section>

      <h1 class="pt-5" style="padding-left: 150px;"><?php echo $category ?></h1>
      <hr />
   
    <div class="grid-container">
     <?php if($result = $sql->get_result()){
       $x=mysqli_num_rows($result);
  
         if(mysqli_num_rows($result) > 0){
          for ($i =0 ; $i <= $x; $i++) {
        while($row = mysqli_fetch_array($result) ){
          
           $i++;
            echo  '<div class="grid-item item'.$i.' ">';
            echo   '<img class="image" src="'. $row['imgsrc']. '" alt="artist1"/>';
            echo  '      <div class="overlay">';
            echo '<a class="name" href="art.php?id='. $row['AWID']. '">' . $row['name']. '</a>'; 
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
  </section>
  <?php include('chunks/footer.php'); ?>  
</body>
</html>
