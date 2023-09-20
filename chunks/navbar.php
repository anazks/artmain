<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/navbar.css" > 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Name of the website</title>
</head>
<body>
 
            <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand" href="#">
                    <img src="./img/feather.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    <strong>Artisance</strong> 
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
                      <a class="nav-link" href="collection.php">Artwork</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="allArtists.php">Artists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                  </ul>
        
                   <div style="z-index: 100;position:relative;left:-25px;">
                   <?php
                   if (isset($_SESSION['email'])) {
                    echo '<a href="profile.php" class="btn btn-warning">Hi, '.$_SESSION['name'].'</a>
                     <a href="logout.php" class="btn btn-danger">Logout</a>';
                    } else {
                    echo '<a href="login.php" class="btn btn-success" data-target="modal1">Login</a>
                    <a href="register.php" class="btn btn-success" data-target="modal2">Register</a>';
                    }?>
                </div> 
                </div>
              </nav>  





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>