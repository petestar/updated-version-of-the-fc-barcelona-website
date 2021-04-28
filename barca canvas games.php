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

@media screen and (max-width: 1000px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 1000px) {
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
/* drag and drop api html 5*/
ul {
	/*list-style-type: none*/
	float: left;
}

li {
	margin: 5px;
}

img {
	width: 100px;
	height: 100px;
}

section {
	width: 250px;
	height: 500px;
	border: 1px solid #000;
	float: left;
	margin-top: 20px;
	margin-left: 100px;
}
canvas {
	width: 300px;
	height: 500px;
	border: 1px solid #000;
	margin-top: 20px;
	margin-left: 100px;
	float: left;
}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- body with background picture -->
<body style="background-image: url('barcelona.jpg');">
<!-- navigation bar with dropdown for mobile friendly -->
<div class="topnav" id="myTopnav">
  <a href="home.php" class="active">Home</a>
  <a href="contact us.php">Contact</a>
  <a href="about us.php">About</a>
  <a href="real-time-webrtc-chat.php">Fans chat</a>
  <a href="barca canvas games.php">Barca games</a>
  <a href="logout.php">Logout</a>
  <p>Hello, <?php echo $userData['username'];?></p>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<!-- header and scores -->
<center><h1>Barca Drag and drop canvas games</h1>
<p>Drag and drop them to the right places and also Click on the circle and the square for the circle to change colour</p></center>
	<ul id="demo">
		<li><img src="0c8405d2c3bd452128f66eba8ef12bfe.jpg" id="dragElement"></li>
		<li><img src="download (1).png" id="dragElement1"></li>
		<li><img src="1200px-Valenciacf.png" id="dragElement2"></li>
		<li><img src="FC-Barcelona-New-Logo.png" id="dragElement3"></li>
		<li><img src="1200px-Club_Athletic_Bilbao_logo.png"id ="dragElement4"></li>
	</ul>
<section id ="dropLocation"></section>
<canvas id="myCanvas" width="300" height="500" style="border:1px solid #000000;">
</canvas>
<script type="text/javascript" src="script23.js"></script>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

// Canvas Settings
let canvas = document.getElementById("myCanvas");
let context = canvas.getContext("2d");

var window_height = window.innerHeight;
var window_width = window.innerWidth;

canvas.width = window_width;
canvas.height = window_height;

canvas.style.background = "#bbf";

class Circle {
	constructor(xpoint, ypoint, radius, color) {
		this.xpoint = xpoint;
		this.ypoint= ypoint;
		this.radius = radius;
		this.color = color;
	}
	
	draw(context) {
		context.beginPath();
		context.arc(this.xpoint, this.ypoint, this.radius, 0, Math.PI * 2, false);
		context.strokeStyle = 'grey';
		context.lineWidth = 3;
		context.fillStyle = this.color;
		context.fill();
		context.stroke();
		context.closePath();
	}

	
	changeColor(newColor) {
		this.color = newColor;
		this.draw(context);
	}
	
clickCircle(xmouse, ymouse) {
	const distance =
	Math.sqrt(
	( ( xmouse - this.xpoint ) * ( xmouse - this.xpoint ) )
	+
	( ( ymouse - this.ypoint ) * ( ymouse - this.ypoint) )
	);
	if (distance < this.radius) {
	this.changeColor('#56f');
		return true;
	} else {
	this.changeColor('#f56');
		return false;
	}
	
}
}

let circle = new Circle(200, 200, 100, '#f56');
circle.draw(context);


myCanvas.addEventListener('click', (event) => {
	const rect = myCanvas.getBoundingClientRect();
	const x = event.clientX - rect.left;
	const y =event.clientY - rect.top;
	circle.clickCircle(x, y);
});
</script>
</body>
</html>