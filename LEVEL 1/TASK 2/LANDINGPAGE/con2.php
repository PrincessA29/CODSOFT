<?php
session_start();

// initializing variables
$name = "";
$purpose = "";
$date = "";
$time = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'iplab');

// Appointment form
if (isset($_POST['Set'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $purpose = mysqli_real_escape_string($db, $_POST['purpose']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $time = mysqli_real_escape_string($db, $_POST['time']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($purpose)) { array_push($errors, "Purpose is required"); }
  if (empty($date)) { array_push($errors, "Date is required"); }
  if (empty($time)) { array_push($errors, "Time is required"); }


  // first check the database to make sure 
  // an appointment does not already exist with the same date and/or time
  $appointment_check_query = "SELECT * FROM appointment WHERE name='$name' OR purpose='$purpose' LIMIT 1";
  $result = mysqli_query($db, $appointment_check_query);
  $appointment = mysqli_fetch_assoc($result);
  
  if ($appointment) { // if appointment form of user exists
    if ($appointment['name'] === $name) {
      array_push($errors, "Name already exists");
    }

    if ($appointment['purpose'] === $purpose) {
      array_push($errors, "Purpose already exists");
    }
  }

  // Finally, appointment of user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO appointment(name, purpose, date, time) 
        VALUES('$name', '$purpose', '$date', '$time')";
  	mysqli_query($db, $query);
    $_SESSION['name'] = $name;
  	$_SESSION['success'] = "Set successfully";
      header('location: IPhome.php');
}
}
?>