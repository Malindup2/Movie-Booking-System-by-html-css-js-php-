<?php

include('Connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Booking</title>
  <link rel="stylesheet" href="booking.css">
  <script src="Booking.js"></script>
</head>
<body>
  <div class="container">
    <h1>Movie Booking</h1>
    <form action="config.php" method="post" onsubmit="return validateForm()">
      <label for="movie">Select Movie:</label>
      <select id="movie" name="movie">
        <option value="">Select a movie</option>
        <option value="leo">Leo</option>
        <option value="angrybird2">Angry Bird 2</option>
        <option value="deadpoolxwolverine">Deadpool X Wolverine</option>
        <option value="vikram">Vikram</option>
        <option value="piratesofcaribbean">Pirates of Caribbean</option>
        <option value="kungfupanda4">Kung Fu Panda 4</option>
        <option value="migration">Migration</option>
        <option value="dune">Dune</option>
        <option value="spidermannwh">Spiderman: No Way Home</option>
      </select>

      <label for="movieType">Select Movie Type:</label>
      <select id="movieType" name="movieType" class="set">
        <option value="">Select a movie type</option>
        <option value="2d">2D</option>
        <option value="3d">3D</option>
      </select>

      <label for="date">Select Date:</label>
      <input type="date" id="date" name="date" required class="set">

      <label for="showTime">Select Show Time:</label>
      <select id="showTime" name="showTime" class="set">
        <option value="">Select a show time</option>
        <option value="10:30">10.30 am</option>
        <option value="14:30">2.30 pm</option>
        <option value="18:30">6.30 pm</option>
        <option value="21:30">9.30 pm</option>
      </select>

      <label for="theatre">Select Theatre:</label>
      <select id="theatre" name="theatre" class="set">
        <option value="">Select a theatre</option>
        <option value="PVR Cinema">PVR Cinema</option>
        <option value="Savoy Cinema">Savoy Cinema</option>
        <option value="Sun Cinema">Sun Cinema</option>
        <option value="Majestic Cinema">Majestic Cinema</option>
        <option value="Selva Cinema">Selva Cinema</option>
      </select>

      <label for="ticketCount">Number of Tickets:</label>
      <input type="number" id="ticketCount" name="ticketCount" class="set" oninput="updateTotal()" min="1">

      <p id="totalCost" name="totalCost">cost :</p>
      <input type="hidden" id="cost" name="cost">

      <input type="submit" value="Book Now" class="booking-button">
    </form>
  </div>
</body>
</html>
