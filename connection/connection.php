<?php
$server_name = "localhost:3307";
$uname = "root";
$pass = "";
$database_name = "railway_management";
$connection = mysqli_connect($server_name, $uname,$pass,$database_name);
//now check the connection
if (!$connection) {
die("Please try again! Connection Failed:" . mysqli_connect_error());
}
mysqli_select_db($connection,$database_name);
?>