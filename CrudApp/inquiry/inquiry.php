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
select{
    font-size:15px;
    background-color:rgb(240, 240, 240);
    padding:10px;
    border-radius: 12px;
    text-decoration: solid;
    padding: 15px;
  }

select option[value="Payment"],
select option[value="Login"],
select option[value="Booking"] {

    font-size:15px;
    padding: 15px;
}

textarea{
    width:100%;
}


.inqurybox{
    background-color: #d9d9d9;
    border-radius: 15px;
    padding: 20px;
    width: 40%;
    text-align: center;
    box-shadow: 2 4px 6px rgba(0.1, 0.1, 0.1, 0.1);
    margin:20px;
}
label {
    display: block;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 5px;
    text-align: left;
    color:black;
    font-weight: bold;
}
input {
    display: block;
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    box-sizing: border-box;
    border:1px solid #3678db;
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
.inqbtn{
    
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
    border: none;
    color: white;
    cursor: pointer;
    background-color: #3678db;
    width: 60%;
    font-size: 18px;
    align-items: center;
    margin: 10px auto;
    width: 40%;
}
.inqbtn:hover{
    background-color: #5387f0;
}
img{
    margin-right: 5px;
}
h2{
    color:Blue;
}

</style>
<body>
    <div class="inqurybox">
            <h2>Inqury Submission</h2>
            <form action="inquiry.php" method="POST">
           <br>
            <label id="name">Enter your name</label>
            <input type="text" name="name" required>
            <label id="email">Enter e mail</label>
            <input type="email" name="email">
            <label id="telephone">Enter telephone number</label>
            <input type="text" name="telephone"required>
            <label>Select inquiry type</label>
             <select name="subject" required>
                <option value="Payemnt">Payment</option>
               <option value="Login">Log In</option>
               <option value="Booking">Booking</option>
              </select><br><br>
              
              <label> Describe your inquiry</label>
              
              <textarea name="description" rows="7" cols="50" required></textarea>
           
            <input type="submit" class="inqbtn" name="Submit" value="Submit">
            </form>
            
    </div>
    
</body>
</html>

<?php


// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST"){ // Form field values
    $name = $_POST["name"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $subject = $_POST["subject"];
    $description = $_POST["description"];
    
    // Check if the provided data matches any row in the database
    $sql = "INSERT INTO inqury  (name, email, telephone, subject, description) VALUES ('$name', '$email','$telephone' ,'$subject', '$description')";
    $result = mysqli_query($con, $sql);

    if (($result) > 0) {
        echo "<script>alert('Submission Successfull')</script>";
        echo "<script>setTimeout(function(){window.location.href='inquirycrud.php';}, 2000);</script>";
        header("Location:inquirycrud.php");
    } else {
        echo "<script>alert('Submission unsuccessfull')</script>";
    }
}
   



