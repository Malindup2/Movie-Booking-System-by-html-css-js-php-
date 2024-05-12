<?php

include('Connection.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cineflix</title>
    <link rel="stylesheet" href="login.css">
    <style>
    
    </style>
</head>
<body>

    <div class="login">
        <h1>Log In</h1>
        <form action="logAction.php" method="post">
            <label for="first">Username:</label>
            <input type="text" id="first" name="first" placeholder="Enter your Username" required>
 
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your Password" required>
 
            <div class="wrap">
                <button type="submit" class="logbtn">Login</button>
            </div>
        </form>
        <p>Administrator
        <a href="dashboard.php">Dashboard</a>
        </p>

        <p>Not registered? 
            <a href="signup.php">Create an account</a>
        </p>
    </div>

</body>
</html>
