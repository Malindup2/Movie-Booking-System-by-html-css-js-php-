<?php
// Include the file containing your Connection object
require 'Connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract data from POST request
    $id = $_POST['id'];
    $movie = $_POST['movie'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $shows = $_POST['shows'];
    $theatre = $_POST['theatre'];
    $ticket = $_POST['ticket'];
    $cost = $_POST['cost'];

    // SQL query to update booking details
    $sql = "UPDATE bookings SET movie=?, type=?, date=?, shows=?, theatre=?, ticket=?, cost=? WHERE id=?";

    // Prepare and execute the SQL statement
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssssssii", $movie, $type, $date, $shows, $theatre, $ticket, $cost, $id);

    if ($stmt->execute()) {
        // If update is successful, redirect to the CRUD application page
        header("Location: app.php");
        exit();
    } else {
        // If an error occurs during execution, display the error message
        echo "Error: " . $stmt->error;
    }
}

// Close the prepared statement and the database connection
$stmt->close();
$con->close();
?>
