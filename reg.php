<?php include('server.php') ?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/stylereg.css" type="text/css">
</head>
<body>
  


  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>

   <form method="post" action="reg.php">
    <?php include('errors.php'); ?>
    <label for="username"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="name" required>

    <lasbel for="educinstitute"><b>Educational Institute</b></label>
    <input type="text" placeholder="Enter Your Educational Institute" name="eduinst" required>

    <label for="age" ><b> Age </b> 
    <input type="text" placeholder="Enter Your Age" name="age" required>

    <label for="mob" ><b> Mobile No. </b> 
    <input type="text" placeholder="Enter Your Mobile Number" name="mob" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Your Email" name="email" required>
      
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    
    <label for="psw"><b>Repeat Password</b></label>
    <input type="password" placeholder="Enter Password Again" name="psw2" required>

    <button type="submit" class="registerbtn" name="reg_user">REGISTER</button>
  </div>
 </form>
  <div class="container signin">
    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
  </div>


</body>
</html>
