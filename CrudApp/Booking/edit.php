<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <div class="signupcontainer">
        <div class="crudBox">
            <div class="cardHeader">
                <h1>Edit Booking</h1>
            </div>
            <div class="cardBody">
                <?php
                
                require 'Connection.php';

                if(isset($_GET['id'])) {
                    $id = $_GET['id'];

                    // SQL query to select booking details with the given ID
                    $sql = "SELECT * FROM bookings WHERE id = ?";
                    $stmt = $con->prepare($sql);
                    $stmt->bind_param("i", $id);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $movie = $row['movie'];
                        $type = $row['type'];
                        $date = $row['date'];
                        $shows = $row['shows'];
                        $theatre = $row['theatre'];
                        $ticket = $row['ticket'];
                        $cost = $row['cost'];
                    } else {
                        echo "No booking found with this ID.";
                    }
                } else {
                    echo "No ID provided.";
                }
                ?>
                <form action="update.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label for="movie">Movie:</label>
                    <input type="text" id="movie" name="movie" value="<?php echo $movie; ?>"><br><br>
                    <label for="type">Type:</label>
                    <input type="text" id="type" name="type" value="<?php echo $type; ?>"><br><br>
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" value="<?php echo $date; ?>"><br><br>
                    <label for="shows">Shows:</label>
                    <input type="text" id="shows" name="shows" value="<?php echo $shows; ?>"><br><br>
                    <label for="theatre">Theatre:</label>
                    <input type="text" id="theatre" name="theatre" value="<?php echo $theatre; ?>"><br><br>
                    <label for="ticket">Ticket:</label>
                    <input type="text" id="ticket" name="ticket" value="<?php echo $ticket; ?>"><br><br>
                    <label for="cost">Cost:</label>
                    <input type="text" id="cost" name="cost" value="<?php echo $cost; ?>"><br><br>
                    <button type="submit" class="signupbtn">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
