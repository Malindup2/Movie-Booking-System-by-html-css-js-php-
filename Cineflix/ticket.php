<?php
include('Connection.php');

// Establish connection to the database
$mysqli = new mysqli("localhost", "root", "", "test");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch all booking data
$sql = "SELECT * FROM bookings";
$result = $mysqli->query($sql);

// Check if there is any data
if ($result->num_rows > 0) {
    // Move the pointer to the last row
    $result->data_seek($result->num_rows - 1);
    // Fetch the last row
    $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket</title>
    <link rel="stylesheet" href="ticket.css"> 
</head>
<body>
    <div class="ticket">
        <div class="ticket-header"><h2>Grab your Ticket</h2></div>
        
        <div class="ticketInfo">
            <div>
                <span>
                    <p>Movie : <?php echo $row['movie']; ?></p>
                </span>
                <span>
                    <p>Type : <?php echo $row['type']; ?></p>
                </span>
            </div>
            
            <div>
                <span>
                    <p>Date : <?php echo $row['date']; ?></p>
                </span>
                <span>
                    <p>ShowTime : <?php echo $row['shows']; ?></p>
                </span>
            </div>

            <div>
                <span>
                    <p>Theatre : <?php echo $row['theatre']; ?></p>
                </span>
                <span>
                    <p>Number of Tickets : <?php echo $row['ticket']; ?></p>
                </span>
            </div>

            <div>
                <span>
                    <p>Total Cost : Rs.<?php echo $row['cost']; ?></p>
                </span>
            </div>
        </div>

        <p class="thanks-text">Thanks for booking!!</p>
            
    </div>    
</body>
</html>
<?php
} else {
    echo "No bookings found";
}

// Close connection
$mysqli->close();
?>
