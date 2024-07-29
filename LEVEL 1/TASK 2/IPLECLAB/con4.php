<?php
session_start();

// initializing variables
$name = "";
$message = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'iplab');

// Enrollment form
if (isset($_POST['directmessage'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $message = mysqli_real_escape_string($db, $_POST['message']);

  // first check the database to make sure 
  // signup does not already exist with the same fname and/or email
  $directmessage_check_query = "SELECT * FROM directmessage WHERE name='$name' OR message='$message'  LIMIT 1";
  $result = mysqli_query($db, $directmessage_check_query);
  $directmessage = mysqli_fetch_assoc($result);

    // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($message)) { array_push($errors, "Message is required"); }
  
  // Finally, signup user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO directmessage (name, message) 
  			  VALUES('$name', '$message')";
  	mysqli_query($db, $query);
    $_SESSION['name'] = $name;
  	$_SESSION['success'] = "Message successfully";
    header('location: IPhome.php');
}
}