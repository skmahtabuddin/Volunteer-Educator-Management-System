<?php
session_start(); 

  if (!isset($_SESSION['email'])) {
    header('location: index.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: index.php");
  }
?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/stylead.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  

      <!-- Bootstrap Core CSS -->
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
<body>
<!--Navigation Bar Starts-->
<div class="topnav">
	<?php  if (isset($_SESSION['email'])) : ?>
  <a href="adminprof.php">Profile</a>
  <a href="admin.php">Control</a>
  <a href="adminbk.php">Booking</a>
  <a href="adminsrc.php">Search</a>
  <a href="donate2.php">Donate</a>  
  <div class="login-container">
      <li class="nav-item">
			   <a class="nav-link" href="history.php?logout='1'">Logout</a>
			  </li>
  </div>
</div>
  <?php endif ?>
<!--Navigation Bar Ends-->

<div class="container">

	    <h1>HISTORY</h1>
	
	    </div>

<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div>
						<h2> </h2>
					</div>
					<table>
						
						<!--PHP code Food-->
	                          <div class="table-responsive">
	                            <table class="table table-bordered table-hover table-striped">
	                                <thead>
	                                    <tr>
	                                    	<th>School</th>
	                                        <th>Area</th>
	                                        <th>Date</th>
	                                        <th>Time</th>
	                                        <th>Educator</th>
	                                        <th>Email</th>
	                                        <th>Mobile No.</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                 <?php                  
	           
	               $query = "SELECT * FROM booking inner join user on (booking.Booker=user.email);";
	              $result = mysqli_query($db, $query);                  
	                        while($row = $result->fetch_assoc()) {
	                                             
	                            echo '<tr>';
	                            echo '<td>'. $row['School'].'</td>';
	                            echo '<td>'. $row['Area'].'</td>';
	                            echo '<td>'. $row['Date'].'</td>';
	                            echo '<td>'. $row['Time'].'</td>';
	                            echo '<td>'. $row['name'].'</td>';
	                            echo '<td>'. $row['email'].'</td>';
	                            echo '<td>'. $row['mobile'].'</td>';
	                            echo '</tr> ';
	                }
	            ?> 
	                                    
	                                </tbody>
	                            </table>
	                        </div>


<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div>
						<h1>DONATION</h1>
					</div>
					<table>
						
						<!--PHP code Food-->
	                          <div class="table-responsive">
	                            <table class="table table-bordered table-hover table-striped">
	                                <thead>
	                                    <tr>
	                                    	<th>Transaction Time</th>
	                                        <th>Name</th>
	                                        <th>Email</th>
	                                        <th>Mobile No.</th>
	                                        <th>Payment Method</th>
	                                        <th>Account No.</th>
	                                        <th>Amount</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                 <?php                  
	           
	               $query = "SELECT * FROM donator;";
	              $result = mysqli_query($db, $query);                  
	                        while($row = $result->fetch_assoc()) {
	                                             
	                            echo '<tr>';
	                            echo '<td>'. $row['Date'].'</td>';
	                            echo '<td>'. $row['Name'].'</td>';
	                            echo '<td>'. $row['Email'].'</td>';
	                            echo '<td>'. $row['Mobile_no'].'</td>';
	                            echo '<td>'. $row['payment_type'].'</td>';
	                            echo '<td>'. $row['account'].'</td>';
	                            echo '<td>'. $row['amount'].'</td>';
	                            echo '</tr> ';
	                }
	            ?> 
	                                    
	                                </tbody>
	                            </table>
	                        </div>


  <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

 </body>
</html>