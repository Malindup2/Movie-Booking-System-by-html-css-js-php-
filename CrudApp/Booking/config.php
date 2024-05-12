<?php

include('Connection.php');

$movie = $_POST['movie'];
$type = $_POST['movieType'];
$date = $_POST['date'];
$shows = $_POST['showTime'];
$theatre = $_POST['theatre'];
$ticket = $_POST['ticketCount'];
$cost = $_POST['cost'];

$con = new mysqli("localhost", "root", "", "test");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO bookings (movie, type, date, shows, theatre, ticket, cost) VALUES ('$movie', '$type', '$date', '$shows', '$theatre', '$ticket', '$cost')";

if ($con->query($sql) === TRUE) {
   
    header("Location: app.php");
} else {
    echo "Error during registration: " . $con->error;
}

$con->close();

?>
