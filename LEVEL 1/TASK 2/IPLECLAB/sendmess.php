<?php include('con4.php') ?>

<head>
    <meta charset="utf-8">
    <title>Message

    </title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Advent+Pro:wght@500&family=Foldit&display=swap');
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: #f2f2f2;
  
  /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
}

::selection{
  background: #4158d0;
  color: #fff;
}

/*LOGO*/
header{
    margin-top: 25px;
    margin-bottom: 0 !important;
    max-width: 580px;
    width: 580px;
}
.site-logo .logo{
    padding-right: 20px;
    padding-left: 5px;
    place-items: left;
    width: 110px;
    cursor: pointer;
    position: fixed;
    top: 5px;
    left: 5px;
}

h1{
    font-size: 20px;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    color: #a90707;
    padding-left: 10px;
    width: 400px;
    cursor: pointer;
    position: fixed;
    top: 25px;
    left: 85px;
}
h2{
    font-size: 15px;
    font-family: 'Advent Pro', sans-serif;
    font-weight: 300;
    color: white;
    padding-left: 10px;
    width: 400px;
    cursor: pointer;
    position: fixed;
    top: 52px;
    left: 85px;
}
/*END*/

/*KINEME*/
.kineme{
    background-color: black;
    opacity: 0.7;
    color: white;
    width: 600px;
    height: 200px;
    padding-right: 20px;
    padding-left: 25px;
    padding-top: 25px;
    place-items: left;
    position: fixed;
    top: 240px;
    left: 0px;
}
h4{
    font-family: 'Poppins', sans-serif;
    font-size: 30px;
    font-weight: 600;
}
.a{
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 250;
    padding-top: 20px;
}
/*END*/

/*ICONS*/
.field .icon {
    position: absolute;
    right: 15px;
    font-size: 1.3em;
    color: #999999;
    line-height: 57px;

}
/*END*/

.wrapper{
  width: 500px;
  height: 435px;
  background: #fff;
  border-radius: 15px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.9);
  margin-left: 650px;
  margin-bottom: 60px;
  margin-top: 50px;
  top: 50px;
  right: 290px;
  position: relative;
  justify-content: center;
  align-items:center;
}
.wrapper .form-box{
    width: 100%;
    padding: 40px;
}
.wrapper .title{
  font-size: 25px;
  font-weight: 600;
  text-align: center;
  line-height: 65px;
  color: #fff;
  user-select: none;
  border-radius: 15px 15px 0 0;
  background: #06142E;
}
.wrapper form{
  padding: 15px 30px 40px 30px;
}
.wrapper form .field{
  height: 50px;
  width: 450px;
  margin-top: 80px;
  position: relative;
  
}
.wrapper form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 15px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
  border-color: #c8a450;
}
.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #999999;
  font-weight: 400;
  font-size: 15px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 15px;
  color: #a90707;
  background: #fff;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 60%;
  height: 50px;
  font-size: 12px;
  align-items: center;
  padding-left: 15px;
}

form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #262626;
  user-select: none;
  padding-left: 5px;
}
form .content .pass-link{
  color: "";
}
form .field input[type="submit"]{
  color: #fff;
  border: none;
  padding-left: 0;
  margin-top: -10px;
  font-size: 18px;
  font-weight: 600;
  cursor: pointer;
  background: linear-gradient(-135deg,  #c8a450, #a90707);
  transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
  transform: scale(0.80);
}

/*ADMIN LOG IN BUTTON*/
.wrapper .adminbtn{
  width: 95%;
  margin-top: 15px;
  position: relative;
  padding-bottom: 10px;
}
.wrapper .adminbtn{
  height: 47px;
  width: 95%;
  outline: none;
  margin-top: 5px;
  padding-left: 5px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
form .adminbtn{
  color: #999999;
  height: 50px;
  border: none;
  padding-left: 0;
  padding-top: 10px;
  margin-top: -10px;
  text-align: center;
  justify-content: center;
  font-size: 15px;
  font-weight: 10;
  cursor: pointer;
  transition: all 0.3s ease;
}
b{
  width: 95%;
  height: 47px;
  border: none;
  transition: ease-out 0.3s;
  position: relative;
  z-index: 1;
}
b:hover {
  color: #a90707;
  cursor: pointer;
}
/*END*/



.signup-link{
  color: beige;
  margin-top: 14px;
  text-align: center;
}
form .pass-link a,
form .signup-link a{
  color: #4158d0;
  text-decoration: none;
}
form .pass-link a:hover,
form .signup-link a:hover{
  text-decoration: underline;
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
        .signupup{
            background-color: #06142E;
            position: relative;
            left: 170px;
            top: 10px;
            width: 100px;
            text-align: center;
            color: white;
            
        }
</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sign Up</title>
      <link rel="stylesheet" href="login.css">

    <style>
        body {
            background-color: #FFFEF2;
        }
    </style>
   </head>
   <body>
    <!--LOGO-->
   


      <div class="wrapper">
         <div class="title">
            What's on your mind?
         </div>
         <form action="sendmess.php" method="post">
         <?php include('errors.php'); ?>
            <div class="field">
                <span class="icon"></span>
               <input type="text" name="name" required>
               <label>Name of the person you want to message...</label> 
            </div>
            <div class="field">
                <span class="icon"></span>
               <input type="text" name="message" required>
               <label>Message</label> 
            </div>
            <br>
            <button class="signupup" type="submit" name="directmessage" ONCLICK="alert('Your message has been sent')" style="color: white;">Register</button>
            </div>
            
            
         </form>
      </div>
    <!--END-->

    <!--DESCRIPTION-->
    
 
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


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