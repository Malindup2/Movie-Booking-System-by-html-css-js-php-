<!DOCTYPE html>
<html>
<head>
    <title>Upload Movie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="file"] {
            display: block;
            margin-top: 5px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 5px;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload Movie</h2>
        <form action="logic.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="photo">Select Movie to Upload:</label>
                <input type="file" name="photo" id="photo">
            </div>
            <div class="form-group">
                <label for="name">Movie Name:</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="info">Info:</label><br>
                <textarea name="info" id="info" rows="4" cols="50"></textarea>
            </div>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>
</body>
</html>
