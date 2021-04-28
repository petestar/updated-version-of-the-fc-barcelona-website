<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($mysqli, "SELECT * FROM `Login4` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: logout.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Barca TV</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
</head>
<style>
/* Font */
@import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

/* Design */
*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  background-color: #ecf9ff;
}

body {
  color: #272727;
  font-family: 'Quicksand', serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
}

.main{
  max-width: 1200px;
  margin: 0 auto;
}

h1 {
    font-size: 24px;
    font-weight: 400;
    text-align: center;
}

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

.btn {
  color: #ffffff;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 100%;
  cursor: pointer;
  border: 1px solid rgba(255, 255, 255, 0.2);
  background: transparent;
}

.btn:hover {
  background-color: rgba(255, 255, 255, 0.12);
}

.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%);
}

.card_title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
.made_by{
  font-weight: 400;
  font-size: 13px;
  margin-top: 35px;
  text-align: center;
}
/* navigation barr*/
.topnav {
  overflow: hidden;
  background-color: #333;
  width: 100%;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 1500px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 1500px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
@import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Montserrat', sans-serif;
  background-color: #eee;
  color: #111;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: purple;
   color: white;
   text-align: center;
}
</style>
<body style="background-image: url('barcelona.jpg');">
<!-- navigation bar with dropdown for mobile friendly -->
<div class="topnav" id="myTopnav">
  <a href="home.php" class="active">Home</a>
  <a href="contact us.php">Contact</a>
  <a href="about us.php">About</a>
  <a href="real-time-webrtc-chat.php">Fans chat</a>
  <a href="barca canvas games.php">barca games</a>
  <a href="logout.php">Logout</a>
  <p>Hello, <?php echo $userData['username'];?></p>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div class="main">
  <h1>Barca TV</h1>
  <ul class="cards">
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src=" antoine-griezmann-barcelona-la-liga-2020-21_y2axgtts3tk71ko9d7f4jz9o1.jpg" alt="griezmann" style="width: 500px" "height: 50px"></div>
        <div class="card_content">
          <h2 class="card_title">Sun 25 Apr</h2>
          <p class="card_text">Villarreal  vs FC Barcelona. La Liga Score: 1-2</p>
          <a class="btn card_btn" href="watchtv.php">Watch</a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src=" Pique-Sevilla.jpg" alt="Gerard Pique" style="width:500px;" "height:50px;"></div>
        <div class="card_content">
          <h2 class="card_title">Thur 22 APR</h2>
          <p class="card_text">FC Barcelona vs Getafe. La Liga Score: 5-2 </p>
          <a class="btn card_btn" href="Watchtv1.php">Watch</a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src=" mingueza.jpg" alt="Mingueza" style="width:500px;" "height:200px;"></div>
        <div class="card_content">
          <h2 class="card_title">SAT 10 APR</h2>
          <p class="card_text">FC Barcelona vs Real Madrid. La Liga Score: 1-2</p>
          <a class="btn card_btn" href="Watchtv2.php">Watch</a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src=" dembele.jpg" alt="Dembele" style="width:500px;" "height:50px;"></div>
        <div class="card_content">
          <h2 class="card_title">Mon 5 APR </h2>
          <p class="card_text">FC Barcelona vs Real Valladolid. La Liga Score: 1-0</p>
          <a class="btn card_btn" href="Watchtv3.php">Watch</a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src=" 842737a0-5b6c-47bc-adbc-ea5bef879661-Messi_gone.jpg" alt="Messi" style="width:500px;" "height:50px;"></div>
        <div class="card_content">
          <h2 class="card_title">Mon 15 MAR</h2>
          <p class="card_text">FC Barcelona vs Huesca> La Liga Score: 4-1</p>
          <a class="btn card_btn" href="Watchtv4.php">Watch</a>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="des.jpeg" alt="Sergino Dest" style="width:500px;" "height:50px;"></div>
        <div class="card_content">
          <h2 class="card_title">Wed 10 MAR</h2>
          <p class="card_text">FC Barcelona vs Paris saint Germain. UEFA Champions league Score 1-1</p>
          <a class="btn card_btn" href="Watchtv5.php">Watch</a>
        </div>
      </div>
    </li>
  </ul>
</div>

<div class="footer">
  <p>&copy FC Barcelona 2021</p>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>