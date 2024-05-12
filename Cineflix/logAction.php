<?php
include('Connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['first'];
    $password = $_POST['password'];
    
    // Prepare and execute query to check if username and password match
    $stmt = $con->prepare("SELECT * FROM register WHERE Name = ? AND Password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Close the window if login is successful
        echo "<script>window.close();</script>";
    } else {
        // Invalid credentials, display error message and redirect to the login page
        echo "<script>alert('Invalid username or password'); window.location.href = 'login.php';</script>";
    }

    $stmt->close();
    $con->close();
}
?>
