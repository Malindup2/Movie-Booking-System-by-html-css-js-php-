<?php
include("Connection.php");

// Check if ID is provided
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch the inquiry details from the database
    $sql = "SELECT * FROM inqury WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        $telephone = $row['telephone'];
        $subject = $row['subject'];
        $description = $row['description'];
    } else {
        echo "No inquiry found with this ID.";
        exit; // Stop further execution
    }
} else {
    echo "No ID provided.";
    exit; // Stop further execution
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST"){ // Form field values
    $name = $_POST["name"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $subject = $_POST["subject"];
    $description = $_POST["description"];
    
    // Update the inquiry details in the database
    $sql = "UPDATE inqury SET name='$name', email='$email', telephone='$telephone', subject='$subject', description='$description' WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Update Successful')</script>";
    } else {
        echo "<script>alert('Update Unsuccessful')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Inquiry</title>
    <style>
           body {

display: flex;
align-items: center;
justify-content: center;
font-family: sans-serif;
min-height: 100vh;
background: #bebebe;
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


.inquiryupdatebox{
    background-color: #d6dcff;
    border-radius: 15px;
    padding: 20px;
    width: 30%;
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
.updatebtn{
    
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
    border: none;
    color: white;
    cursor: pointer;
    background-color: #556fff;
    width: 60%;
    font-size: 18px;
    align-items: center;
    margin: 10px auto;
    width: 40%;
}
.updatebtn:hover{
    background-color: #6d91ed;
}
img{
    margin-right: 5px;
}
h2{
    color:Blue;
}
    </style>
</head>
<body>
    <div class="inquiryupdatebox">
        <h2>Update Inquiry</h2>
        <form action="editcrud.php?id=<?php echo $id; ?>" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br>
            <label for="telephone">Telephone:</label>
            <input type="text" id="telephone" name="telephone" value="<?php echo $telephone; ?>" required><br><br>
            <label for="subject">Subject:</label>
            <select name="subject" id="subject" required>
                <option value="Payment" <?php if($subject == 'Payment') echo 'selected'; ?>>Payment</option>
                <option value="Login" <?php if($subject == 'Login') echo 'selected'; ?>>Log In</option>
                <option value="Booking" <?php if($subject == 'Booking') echo 'selected'; ?>>Booking</option>
            </select><br><br>
            <label for="description">Description:</label><br>
            <textarea name="description" id="description" rows="7" cols="50" required><?php echo $description; ?></textarea><br><br>
            <input type="submit" class="updatebtn" name="Submit" value="Update">
        </form>
    </div>
</body>
</html>
