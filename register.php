<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./style/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
        <title>Register page</title>
</head>
<body>
  <section>
      <div class="container">
          <div class="row">
              <div class="col-12 col-md-6">
                  <div class="container">
                      <img src="./img/feather.png" width="60" height="60" class="d-inline-block align-top mt-5" alt="">               
                      <div class="form-c">
                        <h1>Register</h1>
                        <form class="form" action="register.php" method="post" >
                         <?php include('errors.php'); ?>  
                        <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name"  class="form-control" id="name"  placeholder="Enter your Full Name" >
                            </div>
                            <div class="form-group">
                                <label for="phno">Phone number</label>
                                <input type="text" name="phno"  class="form-control" id="phno"  placeholder="Enter your phone number" >
                             </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" >
                             </div>
                             <div class="form-group">
                                <label for="name">Age</label>
                                <input type="text" name="age"  class="form-control" id="age"  placeholder="Enter your age in numbers" >
                             </div>
                             <div class="form-group">
                                <label for="gender">Select gender</label>
                                <select name="gender" id="gender" >
                                    <option value ="Female">Female</option>
                                    <option value ="Male">Male</option>
                                    <option value="Others">Others</option> 
                                </select>
                             </div>
                             <div class="form-group">
                                <label for="address">Address(city)</label>
                                <input type="text" name="address"  class="form-control" id="address"  placeholder="Enter your cityname" >
                             </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password" >   
                              </div>
                              <div class="form-group">
                                  <label for="confirm_password">Confirm password</label>
                                  <input type="confirm_password" name="confirm_password" id="confirm_password" class="form-control" aria-describedby="emailHelp" placeholder="Re-enter Password" >
                              </div>
                              <button class="button1 " name="register" type="submit">Register</button>
                            <br />
                            <div><h6>Already have an account ?<a class="link" href="login.php"> Login</a></h6></div>
                        </form>
                      </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="https://images.unsplash.com/photo-1578926288207-a90a5366759d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTd8fGFydHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" width="500px" height="500px" class="img" />
                </div>
                </div>
          </div>
      </div>
 </section>
</body>
</html>