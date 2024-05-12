<?php
include("Connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {

display: flex;
align-items: center;
justify-content: center;
font-family: sans-serif;
line-height: 1.5;
min-height: 100vh;
background: #f3f3f3;
flex-direction: column;
margin-top: 5px;

}

.paymentbox{
    background-color: #fff;
    border-radius: 15px;
    padding: 20px;
    width: 300px;
    text-align: center;
}
label {
    display: block;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 5px;
    text-align: left;
    color: #555;
    font-weight: bold;
}
input {
    display: block;
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.{
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
    border: none;
    color: white;
    cursor: pointer;
    background-color: #4CAF50;
    width: 100%;
    font-size: 16px;
}
.pay{
    
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
    border: none;
    color: white;
    cursor: pointer;
    background-color: #4CAF50;
    width: 100%;
    font-size: 16px;
}
.pay:hover{
    background-color: #62cf66;
}
img{
    margin-right: 5px;
}

</style>
<body>
    <div class="paymentbox">
            <h2>Payment Portal</h2>
            <form action="payment.php" method="POST">
            <label>We accept </label>
            <img src="src/images/payment/icons8-visa-48.png">
            <img src="src/images/payment/icons8-mastercard-48.png">
            <img src="src/images/payment/icons8-american-express-48.png">
            <label id="holder">Enter card holder name</label>
            <input type="text" name="cardholdername">
            <label id="email">Enter e mail</label>
            <input type="email" name="email">
            <label id="card">Enter card number</label>
            <input type="text" name="cardnumber">
            <label>Enter date of expiry</label>
            <input type="date"name="expiredate">
            <label>CVV</label>
            <input type="text" name="cvv">
            <input type="submit" class="pay" name="Pay" value="Pay">
            </form>
            
    </div>
    
</body>
</html>

<?php


// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form field values
    $cardholdername = $_POST["cardholdername"];
    $email = $_POST["email"];
    $cardnumber = $_POST["cardnumber"];
    $expiredate = $_POST["expiredate"];
    $cvv = $_POST["cvv"];

    // Check if the provided data matches any row in the database
    $sql = "SELECT * FROM payment WHERE name = '$cardholdername' AND email = '$email' AND cardnumber = '$cardnumber' AND DOE = '$expiredate' AND CVV = '$cvv'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: ticket.php");
        exit;
    } else {
        // Payment details do not match
        echo "Payment unsuccessfull";
    }
}