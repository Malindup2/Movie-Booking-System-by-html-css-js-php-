<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  border-radius: 10px;
  padding: 10px;
  background-color: rgba(255, 255, 255, 0.2);
}

.about-section {
  text-align: center;
  background-color: #ffffff11;
  color: rgb(255, 0, 0);
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); 
}

.container {
  padding: 0 16px;
}

.row
{
  padding-top: 10px;
  padding-bottom: 10px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}


p
{
  text-align:left;
  padding:5px;
  color:white;

}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  border-radius: 10px;
}

.button:hover {
  background-color: red;
}

h2{
  color:white;
}

.Ab-img
{
  padding:0 30px;
  margin-left: 60px;
  width: 300px;
  height: 200px;
  border-radius: 40px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<?php

include('Header.php');

?>

<div class="about-section">
  <h1>About Us</h1>
  
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="img/CEO.jpeg" alt="Jane" class="Ab-img">
      <div class="container">
        <h2>Malindu Pabasara</h2>
        <p class="title">CEO & Founder</p>
        <p>Giving most efficient value to my customers is our satisfaction.</p>
        <p>malindu@gmail.com.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/Aravinda.jpeg" alt="Mike" class="Ab-img">
      <div class="container">
        <h2>Aravinda dissanayake</h2>
        <p class="title">Art Director</p>
        <p>Looking movies in different angle helps me to enhance creativity</p>
        <p>aravi@gmail.com.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="img/Jane.jpeg" alt="John" class="Ab-img">
      <div class="container">
        <h2>Anton Tharshan</h2>
        <p class="title">Designer</p>
        <p>I create the most eyecatching poster design in cinematic atposphere.</p>
        <p>aptharshan@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<?php

include('footer.php');

?>

</body>
</html>