<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  border: 2px solid black;
  overflow: hidden;
  background-color: #333;
  border-radius: 20px;
}
li {
  float: left;
}
li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #4D4D4D;
}
.active {
  background-color: #FFFAC5;
}
</style>
</head>
<body>

<!-- call another php file, use include or require --> 
<?php
include 'HM.php';
$today=date("m-d-Y");
// var_dump($today);
?>

</body>
</html>