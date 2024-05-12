<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings CRUD Application</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <div class="container">
        <div class="crudBox">
            <div class="cardHeader">
                <h2>Bookings CRUD Application</h2>
            </div>
            <div class="addBtn">
                <button class="button-Add"><a href="Booking.php">Add New</a></button>
            </div>
            <div class="cardBody">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Movie</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>Shows</th>
                            <th>Theatre</th>
                            <th>Ticket</th>
                            <th>Cost</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            
                            include('Connection.php');

                            if ($con->connect_error) {
                                die("Connection failed: " . $con->connect_error);
                            }

                            // Fetching and displaying bookings data
                            $sql = "SELECT * FROM bookings";
                            $result = $con->query($sql);

                            if ($result) {
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['id']; 
                                    $movie = $row['movie'];
                                    $type = $row['type'];
                                    $date = $row['date'];
                                    $shows = $row['shows'];
                                    $theatre = $row['theatre'];
                                    $ticket = $row['ticket'];
                                    $cost = $row['cost'];

                                    echo '<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$movie.'</td>
                                    <td>'.$type.'</td>
                                    <td>'.$date.'</td>
                                    <td>'.$shows.'</td>
                                    <td>'.$theatre.'</td>
                                    <td>'.$ticket.'</td>
                                    <td>'.$cost.'</td>

                                    <td>
                                        <div class="btn">
                                            <div class="edit-btn">
                                                <button><a href="edit.php?id='.$id.'">Update</a></button>
                                            </div>
                                            <div class="delete-btn">
                                                <button><a href="delete.php?id='.$id.'">Delete</a></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>';
                                }
                            }

                            // Closing the database connection
                            $con->close();
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
