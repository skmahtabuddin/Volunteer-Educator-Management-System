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

    <title>CRUD Using PHP/MySQL</title>

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
  <a href="profile.php">Profile</a>
  <a href="educator.php">Booking</a>
  <a href="donate2.php">Donate</a> 
  <div class="login-container">
      <li class="nav-item">
			   <a class="nav-link" href="search.php?logout='1'">Logout</a>
			  </li>
  </div>
</div>
  <?php endif ?>
<!--Navigation Bar Ends-->

<div class="container">
	  <form method="post" action="search.php">
	    <h1>SEARCH</h1>
	    <label for="SelectLocation"><b>Location</b></label>
	    <select name="selLoc">
	    <option >Select</option>
	    <option value="Mohakhali">Mohakhali</option>
	    <option value="Mirpur">Mirpur</option>
	    <option value="Badda">Badda</option>
	    <option value="Motijheel">Motijheel</option>
	    </select>
	      <label for="time"><b>Time</b>
	      <input type="time" name="usr_time" type="submit">
	     <label for="start">Date</label>
	     <input type="date" id="start" name="trip-start"
	       value=""
	       min="01-12-2018" max="31-12-2019">
	      <button type="submit" name="src_class">SUBMIT</button>
	    </div>
     </form>

<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div>
						<h2><b>RESULT</b></h2>
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
	                                        <th>Status</th>
	                                        <th>Action</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                 <?php                  
	           if (isset($_POST['src_class'])) {
      $ar = mysqli_real_escape_string($db, $_POST['selLoc']);
      $t = mysqli_real_escape_string($db, $_POST['usr_time']);
      $d = mysqli_real_escape_string($db, $_POST['trip-start']);
      if(empty($t) & empty($d)) {
        $query = "SELECT * FROM booking WHERE Status='Available' AND Area='$ar'";
           $result=mysqli_query($db, $query);
	                        while($row = $result->fetch_assoc()) {
	                                             
	                            echo '<tr>';
	                            echo '<td>'. $row['School'].'</td>';
	                            echo '<td>'. $row['Area'].'</td>';
	                            echo '<td>'. $row['Date'].'</td>';
	                            echo '<td>'. $row['Time'].'</td>';
	                            echo '<td>'. $row['Status'].'</td>';
	                            echo '<td> <a  type="button" class="btn btn-xs btn-danger" href="profile.php?book=' . $row['ID'] . '"> [BOOK]</a> </td>';
	                            echo '</tr> ';
	                }
	            }

	          elseif(empty($t)) {
        $query = "SELECT * FROM booking WHERE Status='Available' AND Area='$ar' AND `Date`='$d'";
           $result=mysqli_query($db, $query);
	                        while($row = $result->fetch_assoc()) {
	                                             
	                            echo '<tr>';
	                            echo '<td>'. $row['School'].'</td>';
	                            echo '<td>'. $row['Area'].'</td>';
	                            echo '<td>'. $row['Date'].'</td>';
	                            echo '<td>'. $row['Time'].'</td>';
	                            echo '<td>'. $row['Status'].'</td>';
	                            echo '<td> <a  type="button" class="btn btn-xs btn-danger" href="profile.php?book=' . $row['ID'] . '"> [BOOK]</a> </td>';
	                            echo '</tr> ';
	                }
	            }
	            elseif(empty($d)) {
        $query = "SELECT * FROM booking WHERE Status='Available' AND Area='$ar' AND `Time`='$t'";
           $result=mysqli_query($db, $query);
	                        while($row = $result->fetch_assoc()) {
	                                             
	                            echo '<tr>';
	                            echo '<td>'. $row['School'].'</td>';
	                            echo '<td>'. $row['Area'].'</td>';
	                            echo '<td>'. $row['Date'].'</td>';
	                            echo '<td>'. $row['Time'].'</td>';
	                            echo '<td>'. $row['Status'].'</td>';
	                            echo '<td> <a  type="button" class="btn btn-xs btn-danger" href="profile.php?book=' . $row['ID'] . '"> [BOOK]</a> </td>';
	                            echo '</tr> ';
	                }
	            }
	            else{
        $query = "SELECT * FROM booking WHERE Status='Available' AND Area='$ar' AND `Time`='$t' AND `Date`='$d'";
           $result=mysqli_query($db, $query);
	                        while($row = $result->fetch_assoc()) {
	                                             
	                            echo '<tr>';
	                            echo '<td>'. $row['School'].'</td>';
	                            echo '<td>'. $row['Area'].'</td>';
	                            echo '<td>'. $row['Date'].'</td>';
	                            echo '<td>'. $row['Time'].'</td>';
	                            echo '<td>'. $row['Status'].'</td>';
	                            echo '<td> <a  type="button" class="btn btn-xs btn-danger" href="profile.php?book=' . $row['ID'] . '"> [BOOK]</a> </td>';
	                            echo '</tr> ';  
	        }
	    }
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