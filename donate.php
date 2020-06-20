<?php include('server.php') ?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/styledon.css" type="text/css">
</head>
<body>
  


  <div class="container">
    <h1>SHARE HAPPINESS</h1>
    <p>Please fill in this form to donate.</p>

   <form method="post" action="donate.php">
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>

    <lasbel for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Your Email" name="email" required>

    <label for="Mobile" ><b>Mobile No</b> 
    <input type="text" placeholder="Enter Your Mobile Number" name="mob" required>

    <label for="mob" ><b> Amount </b> 
    <input type="text" placeholder="Enter Amount of Money" name="am" required>
    
    <label for="email"><b>Payment Method</b></label>
  <select name="paym">
    <option value="Credit Card">Credit Card</option>
    <option value="Paypal">Paypal</option>
    <option value="Bkash">Bkash</option>
  </select>
  <br><br>    
    <label for="psw"><b>Account No</b></label>
    <input type="text" placeholder="Enter Your Account" name="act" required>
    
    <label for="psw"><b>CVV/PIN Number </b></label>
    <input type="password" placeholder="Enter CVV Number" name="cvv" required>

    <button type="submit" class="registerbtn" name="don_user">DONATE</button>
  </div>
 </form>
  <div class="container signin">
    <a href="index.php">Back to the home page</a>
  </div>

</body>
</html>
