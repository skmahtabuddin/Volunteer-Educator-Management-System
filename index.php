<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="css/stylelog.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
body{
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.myImage {
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* middle e text rakhar css */
.bg-text {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.6);
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 65%;
  left:16%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 28%;
  padding:70px;
  text-align: center;
}
</style>

</head>
<body>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="#about">About</a>
  <a href="contact.html">Contact</a>
  
  <a href="reg.php">Sign up</a>
  <div class="login-container">
   <form method="post" action="index.php">
      <?php include('errors.php'); ?>
      <input type="email" placeholder="Email" name="email">
      <input type="Password" placeholder="Password" name="psw">
      <button type="submit" class="btn" name="login_user">Login</button> 
  </div>
</div>
 </form>

<div class="myImage"> 
<img src="css/img/1.jpg" alt="Jane" style="width:100%">
</div>

<div class="bg-text">
  <h2 style="font-size:20px">আমাদের এই যাত্রা তাদের জন্য যারা শিক্ষার আলো থেকে বঞ্চিত</h2>
  <h1 style="font-size:60px">শিক্ষা আমাদের অধিকার</h1>
  <p>আপনি চাইলে আমাদের সাথে থাকতে পারেন</p>
  <a href="donate.php" class="w3-btn w3-black">SUPPORT US</a>
</div>

<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  
  <a href="#"><i class="fa fa-twitter"></i></a>
  
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
  This website is developed by <a href="contact.html" target="_blank">Team Boomerang</a>
  </p>
</footer>
</body>
</html>
