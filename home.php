
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/home.css" >
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Artisance</title>
</head>
<body>
    <div class="mainDiv">

       <section>
               <?php require('chunks/navbar.php'); ?>
                <div class="container-fluid">
                     <div class="row mt-5 pt-5">
                        <div class="container col-12 col-sm-6 ">
                            <div class=" container intro ml-5">
                            <h1><strong>Artisance</strong> : a place to quench your thirst for genius and beauty</h1>
                            <svg width="100" height="3">
                                <rect width="100" height="3" rx="3" ry="3" style="fill:#E7B554;opacity:0.7" />
                            </svg>
                            <h5>
                                Welcome to one-stop destination where you can muse over your favorite artists, admire incredible art and buy from us
                            </h5>
                            <a class="button1" href="#" role="button"><span>Explore</span></a>
                            </div>  
                        </div>
                        <div class="col-12 col-sm-6">
                            <img class=" mainImg " src="https://images.unsplash.com/photo-1578301978162-7aae4d755744?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NzF8fGFydHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="mainImage">
                        </div>
                    </div>
                </div>
       </section>

        <section class="exhibition">
		<div class="container ">
		<div class="row">
				<div class="col-12 container exhibition-right ml-5 text-center pt-5">
						<h1>Our Latest Exhibition</h1>
						<svg width="100" height="3">
							<rect width="100" height="3" rx="3" ry="3" style="fill:white;opacity:0.7" />
						</svg>
						     <p>World-class contemporary art from the leading galleries and museums worldwide at your disposal.Browse through painting exhibitions and photography exhibitions,  presented by Artisance.</p>
						<!-- <a class="button1 " href="#" role="button"><span>Explore</span></a> -->
				</div>
			</div>
			<div class="row">
				<div class="exhibition-left col-12  ">
					<input type="radio" name="position" hidden/>
					<input type="radio" name="position" checked  hidden/>
					<input type="radio" name="position" hidden/>
					<input type="radio" name="position" hidden/>
				
					<main id="carousel">
						<div class="item"></div>
						<div class="item"></div>
						<div class="item"></div>
						<div class="item"></div>
					<main>
				</div>
			</div>
		</div>
        </section>
    
        <section class="categories">
          <div class="container row">
                <div class="col-12 col-sm-6">
                    <div class="intro ml-5 pl-5">
                        <h1>Categories</h1>
                        <svg width="100" height="3">
                            <rect width="100" height="3" rx="3" ry="3" style="fill:#E7B554;opacity:0.7" />
                        </svg>
                        <h4>
                            Explore magnificent art based on the category of your choice 
                        </h4>
                        <a class="button1" href="collection.php" role="button"><span>Explore</span></a>
                    </div>
                </div>

                <div class="container col-12 col-sm-6">
                        <div class="grid-container pt-5 mt-5 pl-5 ml-5">
                            <div class="grid-item item1">  
                                 <img src="https://images.unsplash.com/photo-1576773689115-5cd2b0223523?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8bXl0aG9sb2d5JTIwYXJ0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="category"/>
				            </div>
                       
                            <div class="grid-item item2">
                              <div class="overlay">
                                <a href="collection.php" class="text">More</a>
                              </div>
                              <img src=https://images.unsplash.com/photo-1536924940846-227afb31e2a5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YXJ0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="category"/>
                            </div>

				            <div class="grid-item itemx">  
                               <img src="https://blog.artsper.com/wp-content/uploads/2019/01/nuit-e%CC%81toile%CC%81e-644x430.jpg" class="category"/>
                            </div>

                            <div class="grid-item item4">  
                                 <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YXJ0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="category"/>
                            </div>  
                        </div>
                 </div>
            </div>
        </section>     

  	  <?php include('chunks/footer.php'); ?>  
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>