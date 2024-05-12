<?php

include('Connection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cineflix</title>
    <link rel="stylesheet" href="sign.css">
</head>
<body  style = "background-image:../LootCity/img/9693743.jpg">


<div class="signupcontainer">

    <form action="Action.php" method="POST">

        <h1>Sign Up</h1>

        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter name" name="name" required>
        
        <label for="email"><b>Email Address</b></label>
        <input type="text" placeholder="Enter email" name="email" required>
        
        <label for="email"><b>Telephone Number</b></label>
        <input type="text" placeholder="Enter telephone number" name="phone" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="ps" required>

        <label for="psw-repeat"><b>Confirm Password</b></label>
        <input type="password" placeholder="Confirm Password" name="cps" required>
        
       
        <button type="submit" class="signupbtn">Sign Up</button>
        
    
    </form>
</div>

</body>
</html>