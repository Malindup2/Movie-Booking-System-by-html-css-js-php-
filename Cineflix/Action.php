<?php

include('Connection.php');

$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Password = $_POST['ps'];
$Cpassword = $_POST['cps'];

if($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    // Check if name already exists
    $check_stmt = $con->prepare("SELECT * FROM register WHERE Name = ?");
    $check_stmt->bind_param("s", $Name);
    $check_stmt->execute();
    $result = $check_stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Name already exists, display alert and reload page
        echo "<script>alert('Name already in use. Please choose a different name.');</script>";
        echo "<script>window.location.href = 'signUp.php';</script>";
        exit(); // Stop further execution
    } else {
        // Proceed with registration
        $stmt = $con->prepare("INSERT INTO register (Name, Email, Phone, Password, Cpassword) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $Name, $Email, $Phone, $Password, $Cpassword);
        $execval = $stmt->execute();
        
        if ($execval) {
            echo "Registration successful...";
            echo "<script>window.location.href = 'login.php';</script>";
        } else {
            echo "Error during registration: " . $stmt->error;
        }
        
        $stmt->close();
    }
    
    $con->close();
}

?>
