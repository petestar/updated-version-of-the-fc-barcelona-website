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
<title>Watch TV</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
</head>
<style>
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
  
 /*CSS*/ /html 5 responsive video
iframe {
	display: block;
	margin: 1em auto;
	width: 80%;
	height: calc(.5625 * 80vw);
	max-width: 400px;
	max-height: 225px;
}
page wrapper {
	color: purple;
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
<p>
</p>
<p>
</p>
<center><h1>FC Barcelona vs Getafe. La Liga Score: 5-2</h1></center>
<center><iframe width="80%" height="500" src="https://www.youtube.com/embed/MC36xnUA2OE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>

<section class="news-latest-features news-latest-features--3-items">
<!-- Page Wrapper -->
<div class="page-wrapper">
<p>bdsjjfsdgjgfsudsdsgusdtgudsggsd</p>
<!-- // Page Wrapper -->
</div></section>
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