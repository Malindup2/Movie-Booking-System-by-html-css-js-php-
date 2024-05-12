<?php

include('Connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .topbox{
        margin:0 auto;
        width:100%;
        background-color:rgb(255, 75, 75);
        padding:20px;
        }

        h2{
            color:white;
            text-align: center;
            font-size: 15px;
            font-weight: 500;
        }

        .container{
            margin: auto;
            align-items: center;
            justify-content: center;
            width: 100%;
            display: flex;
            background-color: aliceblue;
        }
        button{
            margin:10px 20px;
            padding:10px;
            align-items: center;
            border-radius: 12px;
            background-color: blue;
            font-size: 12px;
            font-weight: 400;
            color:white;
            cursor: pointer;
            outline: none;
            
        }
        button:hover{
            background-color:rgb(58, 189, 97) ;
        }

    </style>
</head>
<body>
    <?php

  include('Header.php');

?>
/* body content goes here*/
<div class="topbox">
    <h2>Dashboard Admin</h2>
</div>
<div class="container">

    <button onclick="window.location.href='../CrudApp/Register/crudApp.php'">Register</button>
    <button onclick="window.location.href='../CrudApp/Booking/app.php'">Booking </button>
    <button onclick="window.location.href='../CrudApp/movie/app.php'">Movie </button>
    <button onclick="window.location.href='../CrudApp/inquiry/inquirycrud.php'">Inquiry </button>

    </div>

</body>

/* body content goes here*/


<?php

  include('footer.php');

?>


</body>
</html>