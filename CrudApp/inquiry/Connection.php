<?php

$Servername = "localhost";
$username = "root";
$password = "";
$DB = "test";


$con = new mysqli($Servername, $username, $password, $DB);
if($con->connect_error)
{ 
    die("Connection failed: " . $con->connect_error);
} 

?>
