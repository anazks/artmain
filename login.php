<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./style/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login page</title>
</head>
<body>
  <section>
      <div class="container">

          <div class="row">
              <div class="col-12 col-md-6">
                  <div class="container">
                      <img src="./img/feather.png" width="80" height="80" class="d-inline-block align-top mt-5" alt="">
                      
                      <div class="form-c">
                        <h1>Login</h1>
                        <form class="form" action="login.php" method="post">
                        <?php include('errors.php'); ?>  
                          <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                              <a href="forgotpassword.html" class="link">Forgot password ?</a>
                            </div>
                            <button class="button1 " name="login" type="submit">Login</button>
                            <br />
                            <div class="mt-1"><h6>Don't have an account ?<a class="link" href="register.php">  Register Now</a></h6></div>
                        </form>
                      </div>
                  </div>
              </div>

            <div class="d-none d-md-block col-md-6 w-100 h-100">
                <img src="https://images.unsplash.com/photo-1578926288207-a90a5366759d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTd8fGFydHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" width="100%" height="100%" class="img" />
            </div>
          </div>
      </div>
 </section>
</body>
</html>