<?php
include("Connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Management</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            border: 2px solid #ddd; 
        }
        h2 {
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        button{
            padding: 10px;
            margin-bottom: 10px;
            width: calc(100% - 20px);
            margin: 0 auto;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
            width: auto;
            border-radius:15px;
            box-shadow: 2px 2px 4px 2px rgba(46, 184, 89, 0.5);
        }
         button{
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 2px solid #fffefe;
            padding: 15px;
            text-align: left;
            word-wrap: break-word;
        }
        th {
            background-color: #353434;
            color: white;
        }
        tr:nth-child(odd) {
        background-color: #dcdcdc; /* Light gray */
        }

        tr:nth-child(even) {
        background-color: #ffffff; /* White */
        }

        .edit-btn, .delete-btn {
            padding: 6px 10px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; 
        }
        .edit-btn {
            background-color: #007bff;
            color: white;
        }
        .edit-btn:hover {
            background-color: #0056b3;
        }
        .delete-btn {
            background-color: #dc3545;
            color: white;
        }
        .delete-btn:hover {
            background-color: #c82333;
        }


        /* popup*/
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal content */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* Close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Inquiry  Management</h2>
        <!-- Form for adding a new user -->
        <button><a href="inquiry.php" class="add-btn">Add An Inquiry</a></button>
        

        <!-- Table to display users -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Subject</th>
                    <th>Description</th>
                    <th colspan="2">Operator</th>
                </tr>
            </thead>
            <tbody>

                <?php
               
                // Fetch users from the database
                $sql = "SELECT * FROM inqury";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['telephone']."</td>";
                        echo "<td>".$row['subject']."</td>";
                        echo "<td>".$row['description']."</td>";
                        echo "<td>"."";
                        echo "<a class='edit-btn' href='editcrud.php?id=".$row['id']."'>Edit</a>";
                        echo "</td>";
                        echo "<td>";
                        echo "<a class='delete-btn' href='deletecrud.php?id=".$row['id']."'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
