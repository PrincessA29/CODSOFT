<?php
session_start();

// initializing variables
$reason = "";
$date = "";
$time = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'iplab');

// Appointment form
if (isset($_POST['set'])) {
  // receive all input values from the form
  $reason = mysqli_real_escape_string($db, $_POST['reason']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $time = mysqli_real_escape_string($db, $_POST['time']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($reason)) { array_push($errors, "Reason is required"); }
  if (empty($date)) { array_push($errors, "Date is required"); }
  if (empty($time)) { array_push($errors, "Time is required"); }


  // first check the database to make sure 
  // an appointment does not already exist with the same date and/or time
  $block_check_query = "SELECT * FROM block WHERE date='$date' OR time='$time' LIMIT 1";
  $result = mysqli_query($db, $block_check_query);
  $block = mysqli_fetch_assoc($result);
  
  if ($block) { // if appointment form of user exists
    if ($block['date'] === $date) {
      array_push($errors, "Date already exists");
    }

    if ($appointment['time'] === $time) {
      array_push($errors, "Time already exists");
    }
  }

  // Finally, appointment of user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO block (reason, date, time) 
        VALUES('$reason', '$date', '$time')";
  	mysqli_query($db, $query);
    $_SESSION['reason'] = $reason;
  	$_SESSION['success'] = "Set successfully";
      header('location: blocked.php');
}
}

?>