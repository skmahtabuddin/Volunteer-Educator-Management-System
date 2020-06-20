    <?php
    if(!isset($_SESSION)) { session_start(); }

    // initializing variables
    $email = "";
    $errors = array(); 

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'vems');



    //login
    if (isset($_POST['login_user'])) {
      $email = mysqli_real_escape_string($db, $_POST['email']);
      $password = mysqli_real_escape_string($db, $_POST['psw']);

      if (count($errors) == 0) {
        if ($email == 'admin@vems.com') {
        $query = "SELECT * FROM user WHERE email='$email' AND password='$password';";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = $email;
          header('location: admin.php');
        }
        /* else {
          array_push($errors, "Wrong combination!");
        }
        */
        }
        else{
       $query = "SELECT * FROM user WHERE email='$email' AND password='$password';";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = $email;
          header('location: educator.php');
        }
          /* else {
          array_push($errors, "Wrong combination!");
        }
        */
        }
      }
      }
    


    //Reg
    if (isset($_POST['reg_user'])) {

      $name = mysqli_real_escape_string($db, $_POST['name']);
      $inst = mysqli_real_escape_string($db, $_POST['eduinst']);
      $age = mysqli_real_escape_string($db, $_POST['age']);
      $mob = mysqli_real_escape_string($db, $_POST['mob']);
      $email = mysqli_real_escape_string($db, $_POST['email']);
      $pass= mysqli_real_escape_string($db, $_POST['psw']);
      $pass2= mysqli_real_escape_string($db, $_POST['psw2']);
      


     if ($pass != $pass2) {
      array_push($errors, "The two passwords do not match");
      }

      $user_check= "SELECT * FROM user WHERE email='$email' LIMIT 1";
      $result = mysqli_query($db, $user_check);
      $user = mysqli_fetch_assoc($result);

      if ($user) {
        if ($user['email'] === $email) {
          array_push($errors, "user already exists");
        }
      }
      if (count($errors) == 0) {

        $query2 = "INSERT INTO `user` (`name`, `email`, `password`, `mobile`, `age`, `Inst`) VALUES 
      ('$name', '$email', '$pass', '$mob', '$age', '$inst');";
       mysqli_query($db, $query2);
       header('location: index.php');
      }
      else{
        array_push($errors, "go fuck yourself");
      }
    }



    //Donate
    if (isset($_POST['don_user'])) {

      $name = mysqli_real_escape_string($db, $_POST['name']);
      $em = mysqli_real_escape_string($db, $_POST['email']);
      $mob = mysqli_real_escape_string($db, $_POST['mob']);
      $am = mysqli_real_escape_string($db, $_POST['am']);
      $paym = mysqli_real_escape_string($db, $_POST['paym']);
      $acc= mysqli_real_escape_string($db, $_POST['act']);

        $query3 = "INSERT INTO `donator` (`Name`, `Email`, `Mobile_no`, `payment_type`, `account`, `amount`) VALUES ('$name', '$em', '$mob', '$paym', '$acc', '$am')";
       mysqli_query($db, $query3);
       header('location: thankyou.php');
      }

   //Donate2
    if (isset($_POST['don_user2'])) {

      $am = mysqli_real_escape_string($db, $_POST['am']);
      $paym = mysqli_real_escape_string($db, $_POST['paym']);
      $acc= mysqli_real_escape_string($db, $_POST['act']);

      $email=$_SESSION['email'];
      $query1 = "SELECT * FROM user WHERE email='$email'";
      $result= mysqli_query($db, $query1);
      $user = mysqli_fetch_assoc($result);

      $name = $user['name'];
      $em = $user['email'];
      $mob = $user['mobile'];

        $query2 = "INSERT INTO `donator` (`Name`, `Email`, `Mobile_no`, `payment_type`, `account`, `amount`) VALUES ('$name', '$em', '$mob', '$paym', '$acc', '$am')";
       mysqli_query($db, $query2);
       header('location: thankyou.php');
      }



      
      //add class
    if (isset($_POST['add_class'])) {
      $sh = mysqli_real_escape_string($db, $_POST['school']); 
      $ar = mysqli_real_escape_string($db, $_POST['selLoc']);
      $t = mysqli_real_escape_string($db, $_POST['usr_time']);
      $d = mysqli_real_escape_string($db, $_POST['trip-start']);
     
        $query4 = "INSERT INTO `booking` (`ID`, `School`, `Area`, `Date`, `Time`, `Status`, `Booker`) VALUES ('', '$sh', '$ar', '$d', '$t', 'Available', '');";
       mysqli_query($db, $query4);
      }

     //Delete
       if (isset($_GET['delete'])) {
       $id=$_GET['delete'];
       $query5 = "DELETE FROM booking where ID ='$id';";
       mysqli_query($db, $query5);
  }

     //Book
      if (isset($_GET['book'])) {
       $bid=$_GET['book'];
       $email=$_SESSION['email'];
       $query6 = "UPDATE booking set Status='Booked', Booker='$email' where ID='$bid';";

       mysqli_query($db, $query6);
  }
      //b2b
     if (isset($_GET['b2b'])) {
     if ($_SESSION['email'] === 'admin@vems.com') {
          header('location: admin.php');
        }
       else{
      header('location: educator.php');
  }

  }

//TNX
     if (isset($_GET['tnx'])) {
     if (!isset($_SESSION['email'])) {
    header('location: index.php');
  }
     elseif ($_SESSION['email'] === 'admin@vems.com') {
          header('location: admin.php');
        }
     else{
     header('location: educator.php');
  }

  }