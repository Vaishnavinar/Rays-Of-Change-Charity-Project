<?php
// Database configuration

define('DB_SERVER',"localhost");
define('DB_USERNAME',"root");
define('DB_PASSWORD',"");
define('DB_DATABASE',"charity");
// Create connection
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
//$con= mysqli_connect("localhost","root","your_password","charity");

// Check connection
if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
} 

?>
