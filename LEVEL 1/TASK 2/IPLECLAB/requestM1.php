<?php
// Connect to the database
$con = mysqli_connect('localhost', 'root', '', 'iplab');

// Check if the connection is established
if (!$con) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM appointment";
$result = mysqli_query($con, $sql);

if (!$result) {
    die('Query Error: ' . mysqli_error($con));
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Message Request</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Advent+Pro:wght@500&family=Foldit&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        html,
        body {
           background-color: #FFFEF2;;
            margin: 0px;
            overflow-y: hidden;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-y: scroll;
            margin-bottom: 50px;
        }

        .navbar {
            background-color: black;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background:  #F1916D;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar ul li {
            display: inline-block;
            margin: 0 15px;
        }

        .navbar li a {
            color: rgba(255, 255, 255, 0.781);
            display: block;
            padding: 29px 25px;
            text-decoration: none;
            font-size: 18px;
        }

        .navbar ul ul {
            position: absolute;
            top: 100%;
            display: none;
        }

        .navbar ul ul li {
            display: block;
        }

        .navbar li:hover ul {
            display: block;
            background-color: rgba(255, 255, 255, 0.411);
        }

        .navbar li a:hover {
            background-color: rgba(255, 255, 255, 0.411);
        }

        .navbar ul ul li a:hover {
            background-color: rgba(255, 255, 255, 0.411);
        }

        .search-bar {
            position: absolute;
            top: 25px;
            right: 105px;
            background-color: rgba(255, 255, 255, 0.411);
            border: none;
            border-radius: 4px;
            color: black;
            padding: 5px;
            width: 150px;
            transition: 0.3s ease-in-out;
        }

        .search-bar:focus {
            width: 200px;
            outline: none;
        }

        .log-out-button {
            position: absolute;
            top: 25px;
            right: 10px;
            background-color: rgba(255, 255, 255, 0.411);
            border: none;
            border-radius: 4px;
            color: rgba(94, 92, 92, 0.575);
            padding: 5px 10px;
            font-weight: bold;
            cursor: pointer;
        }

        .log-out-button:hover {
            background-color: rgba(255, 255, 255, 0.8);
            color: rgba(94, 92, 92, 0.918);
        }

        .logo {
            width: 87px;
            height: 85px;
            left: 1px;
            top: -3px;
            position: fixed;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 130px;
            
        }

        .card {
            background-color: rgba(255, 255, 255, 0.7);
            width: 300px;
            height: 380px;
            margin: 40px;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            margin-bottom: 80px;
        }

        .card:hover {
            box-shadow: 0px 8px 10px 0px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 200px;
            height: 200px;
            margin: auto;
            display: block;
            border-radius: 100px;
        }

        .card h2 {
            margin-top: 10px;
            font-family: 'Poppins', sans-serif;
            font-size: 1.5em;
            text-align: center;
            color: #383b42;
        }

        .card p {
            margin-top: 15px;
            font-family: 'Poppins', sans-serif;
            font-size: 1.2em;
            text-align: center;
            color: #383b42;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: linear-gradient(-135deg, #c8a450, #a90707);
            color: white;
            text-align: left;
            padding: 5px 0;
            font-family: 'Poppins', sans-serif;
            font-size: 0.8em;
        }

        .footer a {
            color: white;
            text-decoration: none;
        }

        .navbar ul h1 {
            font-size: 15px;
            color: black;
            left: 90px;
            top: 10px;
            position: fixed;
        }

        .navbar ul h2 {
            font-size: 10px;
            left: 90px;
            top: 40px;
            position: fixed;
        }
        .card button {
            background-color: #06142E;
            width: 80px;
            height: 40px;

        }
        .navbar {
            background-color: black;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #473E66 50%, #F1916D 50%);
            display: flex;
            align-items: right;
            justify-content: right;
        }

        .navbar ul li {
            display: inline-block;
            margin: 0 15px;
        }

        .navbar li a {
            color: black;
            display: block;
            padding: 29px 15px;
            text-decoration: none;
            font-size: 18px;
            font-weight: normal;
        }

        .navbar ul ul {
            position: absolute;
            top: 100%;
            display: none;
        }

        .navbar ul ul li {
            display: block;
        }

        .navbar li:hover ul {
            display: block;
            background-color: rgba(255, 255, 255, 0.411);
        }

        .navbar li a:hover {
            background-color: rgba(255, 255, 255, 0.411);
        }

        .navbar ul ul li a:hover {
            background-color: rgba(255, 255, 255, 0.411);
        }
        .logo {
            width: 87px;
            height: 85px;
            left: 1px;
            top: -3px;
            position: fixed;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 130px;
            
        }
        .navbar ul h1 {
            font-size: 25px;
            color: white;
            left: 90px;
            top: 10px;
            position: fixed;
        }

        .navbar ul h2 {
            font-size: 10px;
            left: 90px;
            top: 40px;
            position: fixed;
            color: white;
        }
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(45deg, #F1916D 50%, #473E66 50%);
            color: black;
            text-align: left;
            padding: 5px 0;
            font-family: 'Poppins', sans-serif;
            font-size: 0.8em;
        }

        .footer a {
            color: white;
            text-decoration: none;
        }
        .footer {
            width: 2000px;
            height: 100px;
            background-color: linear-gradient(#F1916D, #F5D7D8);
        }

        .logofoot {
            position: relative;
            left: 1100px;
            bottom: 20px;
            font-size: 30px;
            color: white;
        }

        .notification {
            background-color: #555;
            color: white;
            text-decoration: none;
            padding: 20px 26px;
            position: relative;
            display: inline-block;
            border-radius: 2px;
        }

        .notification:hover {
            background: red;
        }

        .notification .badge {
            position: absolute;
            top: -10px;
            right: -10px;
            padding: 5px 10px;
            border-radius: 50%;
            background-color: red;
            color: white;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    

    <div class="content" method="post">
       
            <div class="card">
            <a href="requestM1.php" class="notification">
            <span class="badge">1</span>
            </a>
                <br>
                <br>

            <label><strong>Name of the Requester: </strong></label>
            <br>

            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $name = $row['name'];
                $date = $row['date'];
                $time = $row['time'];
            
                // Display the retrieved data
                echo '<div style="text-align: left; padding-bottom: 20px;"><strong></strong> ' . $name . '<br></div>';
                echo '<div style="text-align: left; padding-bottom: 20px;"><strong>Date: </strong> ' . $date . '<br></div>';
                echo '<div style="text-align: left; padding-bottom: 20px;"><strong>Time: </strong> ' . $time . '<br></div>';
            } else {
                echo "No data found.";
            }
            
            ?>

            <button class="signup-link" TYPE="button" ONCLICK="alert('Appoinment Accepted')"><a  style="color: white;" href="Listbook.php">Accept</a></button>
            <button class="signup-link"><a style="color: white;" href="feedbacks.php">Decline</a></button>
            </div>
       
   
            <div class="card">
                <br>
                <br>
            <label><strong>Name of the Requester: </strong></label>
            <br>
            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
            
                // Display the retrieved data
                echo '<div style="text-align: left; padding-bottom: 20px;"><strong></strong><br></div>';
                echo '<div style="text-align: left; padding-bottom: 20px;"><strong>Date: </strong><br></div>';
                echo '<div style="text-align: left; padding-bottom: 20px;"><strong>Time: </strong></div>';
            } else {
                echo "No data found.";
            }
            
            ?>

            <button class="signup-link" TYPE="button" ONCLICK="alert('Appoinment Accepted')"><a  style="color: white;" href="Listbook.php">Accept</a></button>
            <button class="signup-link"><a style="color: white;" href="feedbacks.php">Decline</a></button>
            </div>
       
            <div class="card">
                <br>
                <br>
                
            <label><strong>Name of the Requester: </strong></label>
            <br>
            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
            
                // Display the retrieved data
                echo '<div style="text-align: left; padding-bottom: 20px;"><strong></strong><br></div>';
                echo '<div style="text-align: left; padding-bottom: 20px;"><strong>Date: </strong><br></div>';
                echo '<div style="text-align: left; padding-bottom: 20px;"><strong>Time: </strong><br></div>';
            } else {
                echo "No data found.";
            }
            
            ?>

            <button class="signup-link" TYPE="button" ONCLICK="alert('Appoinment Accepted')"><a  style="color: white;" href="Listbook.php">Accept</a></button>

            <button class="signup-link"><a style="color: white;" href="feedbacks.php">Decline</a></button>
            </div>
        </a>
    </div>

    <div class="navbar">
        <ul>
            <header>
                <h1><b>APPOINTWAY</b></h1>
                <h2><b>Group 6 | ICC 0103.1-5</b></h2>
            </header>
            <li>
                
            </li>
            <li class="logo-item">
                <div class="site-logo">
                    <img src="logo.png" class="logo">
                </div>
            </li><li>
                <a href="IPhome.php">Home</a>
            </li>
            <li>
                <a href="abouts.php">About</a>
            </li>
            <li>
                <a href="teams.php">Team</a>
            </li>
            <li>
                <a href="Contacts.php">Contact</a>
            </li>
            <li>
                <a href="loglog.php">Log Out</a>
            </li>
           
            
           
        </ul>
    </div>
    <div class="footer">
    
        <a style="font-size: 40px; font-family: 'Roboto Condensed', sans-serif; color: #473E66; position: relative; top: 10px; left: 70px;"><b>APPOINTWAY<b></a>
        <a href="https://www.google.com/maps/place/Malate,+Manila,+1004+Metro+Manila/
          @14.5673483,120.9792513,15z/data=!3m1!4b1!4m6!3m5!1s0x3397ca2a93680a1f:0xc7215c3e47a64f85!8m2!
          3d14.570199!4d120.991585!16zL20vMDg3N2p6?entry=ttu" style="font-size: 15px; font-family: 'Roboto Condensed', sans-serif; color: white; position: relative; top: 30px; right: 180px;"> 
          <i class="fa fa-map-marker fa-fw w3-large"></i>Philippines, Malate, Manila</a>
          <a style="font-size: 19px; font-family: 'Roboto Condensed', sans-serif; color: black; position: relative; right: 15px; top: 5px;"><i class="fa fa-phone fa-fw w3-large"></i>Mobile Number: 09101573794</a>
          <a style="font-size: 19px; font-family: 'Roboto Condensed', sans-serif; color: black; position: relative; right: 350px; top: 25px;"><i class="fa fa-envelope fa-fw w3-large"></i>Email: veildevil123@gmail.com</a>
          
          
                <div class="logofoot">
                <a style="font-size: 22px; font-family: 'Roboto Condensed', sans-serif; color: white; position: relative; bottom: 40px; left: 120px;"><b>FOLLOW US: <b></a>
                <a href="https://www.facebook.com/Cess.Joeby.29"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
                <a href="https://www.instagram.com/hayashi_rc/"> <i class="fa fa-instagram w3-hover-opacity"></i></a>
                <a href="https://twitter.com/cess"> <i class="fa fa-twitter w3-hover-opacity"></i></a>
              </div>
    </div>
</body>

</html>