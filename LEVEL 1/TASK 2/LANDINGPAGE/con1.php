<?php
session_start();

// initializing variables
$fname = "";
$lname = "";
$email = "";
$mobile = "";
$password = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'iplab');

// Enrollment form
if (isset($_POST['register'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) { array_push($errors, "Fullname is required"); }
  if (empty($lname)) { array_push($errors, "Lastname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($mobile)) { array_push($errors, "Mobile number is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }


  // first check the database to make sure 
  // signup does not already exist with the same fname and/or email
  $usersignup_check_query = "SELECT * FROM usersignup WHERE fname='$fname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $usersignup_check_query);
  $usersignup = mysqli_fetch_assoc($result);
  
  if ($usersignup) { // if usersignup form of user exists
    if ($usersignup['fname'] === $fname) {
      array_push($errors, "fullname already exists");
    }

    if ($usersignup['email'] === $email) {
      array_push($errors, "mobile already exists");
    }
  }

  // Finally, signup user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO usersignup (fname, lname, email, mobile, password) 
  			  VALUES('$fname', '$lname', '$email', '$mobile', '$password')";
  	mysqli_query($db, $query);
    $_SESSION['fname'] = $fname;
  	$_SESSION['success'] = "Signup successfully";
      header('location: loglog.php');
}
}

// LOGIN
if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM usersignup WHERE email='$email' OR password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: landing.php');
  	}else {
  		array_push($errors, "Invalid Credentials");
  	}
  }
}

?>