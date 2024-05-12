<?php

include('Header.php');

?>




<!DOCTYPE html>
<html>
<head>
    <title>Now on Screens</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" type="text/css" href="Movie_page.css">
    <script src="Moviepage.js"></script>
</head>
<body>
    <section>
        <h2 class="heading" id="movies">Now on Screens<hr></h2>
        <div class="movies-container">
            <?php
            include('wire.php');

            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }

            $sql = "SELECT photo_name, name, info FROM movie";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $photoName = $row["photo_name"];
                    $name = $row["name"];
                    $info = $row["info"];

                   
                    echo '<div class="box">';
                    echo '  <div class="box-img">';
                    echo '    <img src="posters/'.$photoName.'" alt="'.$name.'">';
                    echo '  </div>';
                    echo '  <div class="center-text"><h3>'.$name.'</h3></div>';
                    echo '   <p class="movie-info">'.$info.'</p>';
                    echo '<hr>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }
            $con->close();
            ?>
        </div>
    </section>
</body>
</html>

<?php

include('footer.php');

?>