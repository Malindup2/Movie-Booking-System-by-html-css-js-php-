<?php
include("Connection.php");

// Check if ID parameter is set and not empty
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the ID parameter to prevent SQL injection
    $id = mysqli_real_escape_string($con, $_GET['id']);

    // SQL query to delete the record with the given ID
    $sql = "DELETE FROM inqury WHERE id = '$id'";

    // Execute the SQL query
    if (mysqli_query($con, $sql)) {
        // Record deleted successfully, redirect back to the page where the table is displayed

        echo "<script>alert('Deletion Successfull')</script>";
        
        header("Location: inquirycrud.php");
        exit();
    } else {
        // Handle any errors if the deletion fails
        echo "Error deleting record: " . mysqli_error($con);
    }
} else {
    // Handle the case where the ID parameter is missing or empty
    echo "Invalid request";
}
?>
