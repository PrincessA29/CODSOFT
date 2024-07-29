<?php
session_start();

// initializing variables
$message = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'iplab');

// Enrollment form
if (isset($_POST['feedback'])) {
  // receive all input values from the form
  $message = mysqli_real_escape_string($db, $_POST['message']);

  // first check the database to make sure 
  // signup does not already exist with the same fname and/or email
  $feedback_check_query = "SELECT * FROM feedback WHERE message='$message' LIMIT 1";
  $result = mysqli_query($db, $feedback_check_query);
  $feedback = mysqli_fetch_assoc($result);

    // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($message)) { array_push($errors, "Message is required"); }
  
  // Finally, signup user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO feedback (message) 
  			  VALUES('$message')";
  	mysqli_query($db, $query);
    $_SESSION['message'] = $message;
  	$_SESSION['success'] = "Message successfully";
    header('location: IPhome.php');
}
}