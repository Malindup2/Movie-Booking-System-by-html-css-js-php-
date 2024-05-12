<?php 

    include('Connection.php');

    // Check if the 'id' parameter is set in the URL
    if(isset($_GET['id'])){
        $id = $_GET['id']; // Get the 'id' parameter from the URL
        
        // SQL statement to delete a user with the given ID
        $sql = "DELETE FROM bookings WHERE id = ?";
        
        // Prepare the SQL statement to prevent SQL injection
        $stmt = $con->prepare($sql);
        
        // Bind parameters to the prepared statement
        $stmt->bind_param("i", $id); // 'i' indicates that the parameter is an integer
        
        // Execute the prepared statement
        if ($stmt->execute()) {
            // If deletion is successful, display a success message and redirect to the CRUD application page
            echo '<script>alert("User with ID '.$id.' deleted successfully");</script>';
            echo '<script>location.replace("app.php")</script>'; // Redirect to the CRUD application page
        } else {
            // If an error occurs during execution, display the error message
            echo "Error: " . $stmt->error;
        }
        
        // Close the prepared statement
        $stmt->close();
    }

    // Close the database connection
    $con->close();
?>
