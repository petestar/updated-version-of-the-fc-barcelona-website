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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" media="all" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<title>Home</title>
<style>
a, a:visited{
color: #0000EE;
}
a:hover{
color: #EE0000;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

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

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
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
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.marketing-partners {
    height: 10.5rem;
    padding: 1 .8rem;
    display: flex;
    justify-content: center;
    margin: auto;
    align-items: center;
    background: linear-gradient(
0deg
,#181733 0,#181733 30%,rgba(173,16,40,.5));
}
* {
    box-sizing: border-box;
}
 {
    background-color: transparent;
}
* {
    box-sizing: border-box;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}
svg:not(:root) {
    overflow: hidden;
}
.marketing-partners__logo--nike {
    width: 7.2rem;
}
.marketing-partners__logo {
    height: 4rem;
    opacity: .6;
    margin-left: 2.8rem;
}
* {
    box-sizing: border-box;
}
svg:not(:root) {
    overflow: hidden;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.marketing-partners__title {
    font-size: 1.2rem;
    color: #fff;
    text-transform: uppercase;
    line-height: 3.6rem;
    padding-right: 2.4rem;
    letter-spacing: .1rem;
    border-right: .1rem solid hsla(0,0%,100%,.2);
    white-space: nowrap;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h1, h2, h3, h4, h5, h6, strong {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h4 {
    font-size: 1.28rem;
}
h1, h2, h3, h4, h5, h6, p {
    margin-top: 0;
    margin-bottom: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
h4 {
    display: block;
    margin-block-start: 1.33em;
    margin-block-end: 1.33em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
html {
    font-size: 10px;
}
.teams-playlist {
    padding: 3rem 2.4rem 4.4rem;
    position: relative;
    background-color: #fff;
    border: .1rem solid #efefef;
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
* {
    box-sizing: border-box;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
section {
    display: block;
}
.u-main-background {
    background-color: #181733;
    padding: 0 1.6rem .1rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.wrapper {
    width: 100%;
    max-width: 148rem;
    margin: 0 auto;
    position: relative;
}
.wrapper, td, th {
    padding: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller {
    position: relative;
    padding: 3.4rem 3.4rem 4.4rem;
    border-radius: 1.2rem 1.2rem 0 0;
    background: #fff;
    overflow: hidden;
    border-bottom: 1px solid #efefef;
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
section {
    display: block;
}
#clockdiv{ 
	font-family: sans-serif; 
	color: #fff; 
	display: inline-block; 
	font-weight: 100; 
	text-align: center; 
	font-size: 30px; 
} 
#clockdiv > div{ 
	padding: 10px; 
	border-radius: 3px; 
	background: #00BF96; 
	display: inline-block; 
} 
#clockdiv div > span{ 
	padding: 15px; 
	border-radius: 3px; 
	background: #00816A; 
	display: inline-block; 
} 
smalltext{ 
	padding-top: 5px; 
	font-size: 16px; 
} 
.widget__title {
    background: linear-gradient(
90deg
,#cd122d,#154284);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    color: #fff;
}
.widget__title {
    font-size: 3.6rem;
    margin-bottom: 2rem;
    color: #cd122d;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h1, h2, h3, h4, h5, h6, strong {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h3 {
    font-size: 1.44rem;
}
h1, h2, h3, h4, h5, h6, p {
    margin-top: 0;
    margin-bottom: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
h3 {
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.widget__header {
    text-align: center;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
html {
    font-size: 10px;
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
.teams-playlist__card--7 {
    width: 14.28571%;
}
.teams-playlist__card {
    position: relative;
    padding: .6rem;
    width: 20%;
}
ol li, ul li {
    list-style-type: none;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
html {
    font-size: 10px;
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
.teams-playlist__container {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
ol, ul {
    padding-left: 0;
    margin-top: 0;
    margin-bottom: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
.teams-playlist__photo {
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    border-radius: .2rem;
}
img {
    border: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
html {
    font-size: 10px;
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
@media (max-width: 750px)
.teams-playlist {
    padding: 1.9rem 0 2.5rem;
}
@media (max-width: 950px)
.teams-playlist {
    padding: 1.2rem 0 2rem;
}
.teams-playlist {
    padding: 3rem 2.4rem 4.4rem;
    position: relative;
    background-color: #fff;
    border: .1rem solid #efefef;
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
section {
    display: block;
}
svg:not(:root) {
    overflow: hidden;
}
.marketing-partners__logo--rakuten {
    width: 10rem;
}
.marketing-partners__logo {
    height: 4rem;
    opacity: .6;
    margin-left: 2.8rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
svg:not(:root) {
    overflow: hidden;
}
.marketing-partners__logo--beko {
    width: 6.5rem;
}
.marketing-partners__logo {
    height: 4rem;
    opacity: .6;
    margin-left: 2.8rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
svg:not(:root) {
    overflow: hidden;
}
.marketing-partners__logo--nike {
    width: 7.2rem;
}
.marketing-partners__logo {
    height: 4rem;
    opacity: .6;
    margin-left: 2.8rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller__list-container {
    margin: 0 auto;
    position: relative;
}
.wrapper {
    width: 100%;
    max-width: 148rem;
    margin: 0 auto;
    position: relative;
}
.wrapper, td, th {
    padding: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
element.style {
    left: -4px;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
ol, ul {
    padding-left: 0;
    margin-top: 0;
    margin-bottom: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller__item-wrap--active {
    opacity: 1;
}
@media (max-width: 1175px) and (min-width: 841px)
.matches-scroller-item--small {
    width: 33%;
    min-width: 29rem;
}
.matches-scroller-item--link {
    background-image: url(../i/bg-elements/fixture-scroller-bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50%;
    border: none;
}
.matches-scroller-item--small {
    min-width: 35.2rem;
}
.matches-scroller-item {
    display: flex;
    flex-direction: column;
    margin: 0 .4rem;
    background-color: #fff;
    border: .1rem solid #efefef;
    box-shadow: 0 0 0.8rem 0 rgb(0 0 0 / 6%);
    transition: box-shadow .3s ease;
}
ol li, ul li {
    list-style-type: none;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-item--link .matches-scroller-item__link-element {
    text-decoration: none;
    display: block;
    height: 100%;
    background-image: linear-gradient(
230deg
,rgba(24,23,53,.9),rgba(154,0,11,.9));
}
a {
    background-color: transparent;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
html {
    font-size: 10px;
}
.matches-scroller__item-wrap--active {
    opacity: 1;
}
@media (max-width: 1175px) and (min-width: 841px)
.matches-scroller-item--small {
    width: 33%;
    min-width: 29rem;
}
.matches-scroller-item--small {
    min-width: 35.2rem;
}
.matches-scroller-item {
    display: flex;
    flex-direction: column;
    margin: 0 .4rem;
    background-color: #fff;
    border: .1rem solid #efefef;
    box-shadow: 0 0 0.8rem 0 rgb(0 0 0 / 6%);
    transition: box-shadow .3s ease;
}
ol li, ul li {
    list-style-type: none;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller__item-wrap--active {
    opacity: 1;
}
@media (max-width: 1175px) and (min-width: 841px)
.matches-scroller-item--small {
    width: 33%;
    min-width: 29rem;
}
.matches-scroller-item--small {
    min-width: 35.2rem;
}
.matches-scroller-item {
    display: flex;
    flex-direction: column;
    margin: 0 .4rem;
    background-color: #fff;
    border: .1rem solid #efefef;
    box-shadow: 0 0 0.8rem 0 rgb(0 0 0 / 6%);
    transition: box-shadow .3s ease;
}
ol li, ul li {
    list-style-type: none;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1150px) and (min-width: 951px)
.matches-scroller-item--large {
    min-width: 35rem;
}
@media (max-width: 1175px) and (min-width: 951px)
.matches-scroller-item--large {
    padding-left: 0;
    padding-right: 0;
}
.matches-scroller-item--large {
    min-width: calc(100% - 70rem);
}
.matches-scroller-item {
    display: flex;
    flex-direction: column;
    margin: 0 .4rem;
    background-color: #fff;
    border: .1rem solid #efefef;
    box-shadow: 0 0 0.8rem 0 rgb(0 0 0 / 6%);
    transition: box-shadow .3s ease;
}
ol li, ul li {
    list-style-type: none;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1175px) and (min-width: 841px)
.matches-scroller-item--small {
    width: 33%;
    min-width: 29rem;
}
.matches-scroller-item--small {
    min-width: 35.2rem;
}
.matches-scroller-item {
    display: flex;
    flex-direction: column;
    margin: 0 .4rem;
    background-color: #fff;
    border: .1rem solid #efefef;
    box-shadow: 0 0 0.8rem 0 rgb(0 0 0 / 6%);
    transition: box-shadow .3s ease;
}
ol li, ul li {
    list-style-type: none;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1175px) and (min-width: 841px)
.matches-scroller-item--small {
    width: 33%;
    min-width: 29rem;
}
.matches-scroller-item--link {
    background-image: url(../i/bg-elements/fixture-scroller-bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50%;
    border: none;
}
.matches-scroller-item--small {
    min-width: 35.2rem;
}
.matches-scroller-item {
    display: flex;
    flex-direction: column;
    margin: 0 .4rem;
    background-color: #fff;
    border: .1rem solid #efefef;
    box-shadow: 0 0 0.8rem 0 rgb(0 0 0 / 6%);
    transition: box-shadow .3s ease;
}
ol li, ul li {
    list-style-type: none;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-item--link .matches-scroller-item__link-text-wrap {
    position: relative;
    top: 50%;
    left: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller-item--link .matches-scroller-item__link-element {
    text-decoration: none;
    display: block;
    height: 100%;
    background-image: linear-gradient(
230deg
,rgba(24,23,53,.9),rgba(154,0,11,.9));
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-item--link .matches-scroller-item__link-text {
    font-family: fcb-light,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
.matches-scroller-item--link .matches-scroller-item__link-text, .matches-scroller-item--link .matches-scroller-item__link-text-bold {
    color: #fff;
    text-align: center;
    display: block;
    font-size: 3.2rem;
    text-decoration: none;
    line-height: 3.6rem;
}
* {
    box-sizing: border-box;
}
.matches-scroller-item--link .matches-scroller-item__link-element {
    text-decoration: none;
    display: block;
    height: 100%;
    background-image: linear-gradient(
230deg
,rgba(24,23,53,.9),rgba(154,0,11,.9));
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-item--link .matches-scroller-item__link-text-bold {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
.matches-scroller-item--link .matches-scroller-item__link-text, .matches-scroller-item--link .matches-scroller-item__link-text-bold {
    color: #fff;
    text-align: center;
    display: block;
    font-size: 3.2rem;
    text-decoration: none;
    line-height: 3.6rem;
}
* {
    box-sizing: border-box;
}
.matches-scroller-item--link .matches-scroller-item__link-element {
    text-decoration: none;
    display: block;
    height: 100%;
    background-image: linear-gradient(
230deg
,rgba(24,23,53,.9),rgba(154,0,11,.9));
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-item--primary .matches-scroller-item__header {
    background-color: #154284;
}
.matches-scroller-item__header {
    margin: -.1rem;
    padding: .7rem 1.4rem .6rem;
    background-color: #181733;
    display: flex;
    color: #fff;
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
header {
    display: block;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-item__match {
    text-decoration: none;
}
a {
    background-color: transparent;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-item__header-left {
    line-height: 1rem;
    word-spacing: .6rem;
}
.matches-scroller-item__header-center, .matches-scroller-item__header-left, .matches-scroller-item__header-right {
    flex: 1;
}
h1, h2, h3, h4, h5, h6, strong {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h3 {
    font-size: 1.44rem;
}
h1, h2, h3, h4, h5, h6, p {
    margin-top: 0;
    margin-bottom: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
h3 {
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.matches-scroller-item__header {
    margin: -.1rem;
    padding: .7rem 1.4rem .6rem;
    background-color: #181733;
    display: flex;
    color: #fff;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-item__date-day {
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    line-height: 3.2rem;
    font-size: 4rem;
    display: inline-block;
}
* {
    box-sizing: border-box;
}
.matches-scroller-item__header-left {
    line-height: 1rem;
    word-spacing: .6rem;
}
h1, h2, h3, h4, h5, h6, strong {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h3 {
    font-size: 1.44rem;
}
user agent stylesheet
h3 {
    font-size: 1.17em;
    font-weight: bold;
}
.matches-scroller-item__header {
    margin: -.1rem;
    padding: .7rem 1.4rem .6rem;
    background-color: #181733;
    display: flex;
    color: #fff;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-item__date-info {
    text-transform: uppercase;
    display: inline-block;
    word-spacing: normal;
}
* {
    box-sizing: border-box;
}
.matches-scroller-item__header-left {
    line-height: 1rem;
    word-spacing: .6rem;
}
h1, h2, h3, h4, h5, h6, strong {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h3 {
    font-size: 1.44rem;
}
user agent stylesheet
h3 {
    font-size: 1.17em;
    font-weight: bold;
}
.matches-scroller-item__header {
    margin: -.1rem;
    padding: .7rem 1.4rem .6rem;
    background-color: #181733;
    display: flex;
    color: #fff;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-item__date-weekday {
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    display: block;
    font-size: 1.8rem;
    line-height: 1.6rem;
}
* {
    box-sizing: border-box;
}
.matches-scroller-item__date-info {
    text-transform: uppercase;
    display: inline-block;
    word-spacing: normal;
}
.matches-scroller-item__header-left {
    line-height: 1rem;
    word-spacing: .6rem;
}
h1, h2, h3, h4, h5, h6, strong {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h3 {
    font-size: 1.44rem;
}
user agent stylesheet
h3 {
    font-size: 1.17em;
    font-weight: bold;
}
.matches-scroller-item__header {
    margin: -.1rem;
    padding: .7rem 1.4rem .6rem;
    background-color: #181733;
    display: flex;
    color: #fff;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-item__date-month {
    font-family: fcb-light,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    display: block;
    font-size: 1.8rem;
    line-height: 1.6rem;
}
* {
    box-sizing: border-box;
}
.matches-scroller-item__date-info {
    text-transform: uppercase;
    display: inline-block;
    word-spacing: normal;
}
.matches-scroller-item__header-left {
    line-height: 1rem;
    word-spacing: .6rem;
}
h1, h2, h3, h4, h5, h6, strong {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h3 {
    font-size: 1.44rem;
}
user agent stylesheet
h3 {
    font-size: 1.17em;
    font-weight: bold;
}
.matches-scroller-item__header {
    margin: -.1rem;
    padding: .7rem 1.4rem .6rem;
    background-color: #181733;
    display: flex;
    color: #fff;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match--small {
    padding: 1.6rem 2.7rem 1.1rem;
}
.matches-scroller-match {
    padding: 1.6rem 4rem 1.1rem;
    display: flex;
    position: relative;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1280px)
.matches-scroller-match__arrow {
    display: none;
}
.matches-scroller-match__arrow {
    position: absolute;
    right: .9rem;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__arrow .icon {
    width: 1.2rem;
    height: .9rem;
    fill: #000;
}
svg:not(:root) {
    overflow: hidden;
}
.icon {
    display: inline-block;
    width: 1.6rem;
    height: 1.6rem;
    vertical-align: middle;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    fill-rule: evenodd;
    d: path("M 9.63 3.82 L 6.68 0.93 L 7.63 0 l 4.51 4.43 l -4.51 4.43 l -0.95 -0.92 l 2.81 -2.76 H 0 V 3.82 h 9.63 Z");
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__arrow .icon {
    width: 1.2rem;
    height: .9rem;
    fill: #000;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1280px)
.matches-scroller-match__arrow--mobile {
    display: block;
}
@media (max-width: 1280px)
.matches-scroller-match__arrow {
    display: none;
}
.matches-scroller-match__arrow--mobile {
    display: none;
}
.matches-scroller-match__arrow {
    position: absolute;
    right: .9rem;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__arrow .icon {
    width: 1.2rem;
    height: .9rem;
    fill: #000;
}
svg:not(:root) {
    overflow: hidden;
}
.icon {
    display: inline-block;
    width: 1.6rem;
    height: 1.6rem;
    vertical-align: middle;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    fill-rule: evenodd;
    d: path("M 46.59 44 l -3.2 -3.73 L 8.79 0 L 0 7.46 L 31.4 44 L 0 80.54 L 8.79 88 l 34.6 -40.27 l 3.2 -3.73 Z");
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__arrow .icon {
    width: 1.2rem;
    height: .9rem;
    fill: #000;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}

@media (max-width: 1225px) and (min-width: 951px)
.matches-scroller-match--complete .matches-scroller-match__team {
    padding-top: 5.3rem;
}
@media (max-width: 1225px) and (min-width: 951px)
.matches-scroller-match--small .matches-scroller-match__team {
    padding-top: 5rem;
}
@media (max-width: 1280px)
.matches-scroller-match--small .matches-scroller-match__team {
    padding-top: 5.3rem;
}
.matches-scroller-match--complete .matches-scroller-match__team {
    padding-top: 4.6rem;
}
.matches-scroller-match--small .matches-scroller-match__team {
    padding-top: 4.3rem;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__badge {
    display: inline;
}
* {
    box-sizing: border-box;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.visually-hidden, .visually-hidden-nav-item {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    visibility: hidden;
}
.visually-hidden {
    width: 1px;
}
* {
    box-sizing: border-box;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1280px)
.matches-scroller-match--small .matches-scroller-match__badge svg {
    width: 4rem;
    height: 4rem;
}
.matches-scroller-match--small .matches-scroller-match__badge svg {
    width: 5.5rem;
    height: 5.5rem;
}
.matches-scroller-match__badge svg {
    width: 8.6rem;
    height: 8.6rem;
}
svg:not(:root) {
    overflow: hidden;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 8.1 32.4 a 24.43 24.43 0 0 1 -1.5 -28 s 8.6 4.7 19.8 0 a 26.43 26.43 0 0 0 20.4 0.4 c 6.5 10.4 2.8 21.4 -2.4 27.6 c -5.3 6.8 -15.3 6.4 -18 11.9 c -2.7 -5.5 -13.8 -5.9 -18.3 -11.9");
    fill: none;
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 48.3 0.4 l -0.2 -0.3 l -0.3 0.2 l -0.1 0.1 A 17.48 17.48 0 0 1 37.9 3 A 29.1 29.1 0 0 1 26.5 0.5 l -0.1 -0.1 l -0.1 0.1 A 28.6 28.6 0 0 1 15.1 3 a 16.27 16.27 0 0 1 -6.9 -1.4 C 7.5 1.3 6.9 0.9 6.5 0.7 L 6.1 0.4 L 6 0.3 L 5.7 0 l -0.2 0.3 A 34.32 34.32 0 0 0 0 18.2 a 22.75 22.75 0 0 0 5.2 15 c 3.3 3.7 7.7 5.8 11.6 7.9 s 7.5 4.2 9.2 8 l 0.3 0.7 l 0.3 -0.7 c 1.6 -3.6 5 -5.6 9 -7.7 s 8.4 -4 11.7 -7.8 a 25.75 25.75 0 0 0 5.9 -16.8 A 30.9 30.9 0 0 0 48.3 0.4 Z");
    fill: rgb(220, 177, 21);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__competition {
    margin: 0 auto;
    width: 9.2rem;
    height: 2.4rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.icn-fbl-competitions-95.icn-fbl-competitions-95-331 {
    background-position: -95px -25px;
    width: 58px;
    height: 25px;
    display: inline-block;
    opacity: 1;
}
.icn-fbl-competitions-95 {
    background-image: url(../i/sprites/football-competitions-95-sprite.png);
    background-repeat: no-repeat;
}
* {
    box-sizing: border-box;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.visually-hidden, .visually-hidden-nav-item {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    visibility: hidden;
}
.visually-hidden {
    width: 1px;
}
* {
    box-sizing: border-box;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__outcome {
    text-align: center;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__outcome-text {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    display: block;
    font-size: 1rem;
    color: #727272;
    position: relative;
    top: .8rem;
    min-height: 1rem;
}
* {
    box-sizing: border-box;
}
.matches-scroller-match__outcome {
    text-align: center;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__outcome-value {
    line-height: 5.8rem;
    font-size: 4.8rem;
    display: inline-block;
    margin-bottom: .6rem;
}
* {
    box-sizing: border-box;
}
.matches-scroller-match__outcome {
    text-align: center;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__score {
    font-family: fcb-light,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    color: #154284;
    margin-bottom: 2rem;
}
.fixture-info__score-container, .fixture-info__team-container {
    display: flex;
    align-items: center;
}
.fixture-info__score-container {
    justify-content: center;
}
* {
    box-sizing: border-box;
}
.matches-scroller-match__outcome-value {
    line-height: 5.8rem;
    font-size: 4.8rem;
    display: inline-block;
    margin-bottom: .6rem;
}
.matches-scroller-match__outcome {
    text-align: center;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fixture-info__score {
    height: 4rem;
    text-align: center;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller-match__score {
    font-family: fcb-light,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    color: #154284;
    margin-bottom: 2rem;
}
.matches-scroller-match__outcome-value {
    line-height: 5.8rem;
    font-size: 4.8rem;
    display: inline-block;
    margin-bottom: .6rem;
}
.matches-scroller-match__outcome {
    text-align: center;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fixture-info__score>span {
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    display: inline-block;
    height: 3.9rem;
    font-size: 3.2rem;
    line-height: 3.6rem;
    text-align: center;
    color: #fff;
    background: linear-gradient(
180deg
,#2c4481 0,#181733);
    width: auto;
    min-width: 8rem;
    margin: 0 .1rem;
    padding: 0 1rem;
}
* {
    box-sizing: border-box;
}
.fixture-info__score {
    height: 4rem;
    text-align: center;
}
.matches-scroller-match__score {
    font-family: fcb-light,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    color: #154284;
    margin-bottom: 2rem;
}
.matches-scroller-match__outcome-value {
    line-height: 5.8rem;
    font-size: 4.8rem;
    display: inline-block;
    margin-bottom: .6rem;
}
.matches-scroller-match__outcome {
    text-align: center;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__team-names {
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    max-width: 16rem;
    text-align: center;
    margin: 0 auto;
    color: #222;
    font-size: 1.8rem;
    margin-bottom: .3rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__team-names-wrap {
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    position: relative;
    left: 50%;
    display: inline-block;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller-match__team-names {
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    max-width: 16rem;
    text-align: center;
    margin: 0 auto;
    color: #222;
    font-size: 1.8rem;
    margin-bottom: .3rem;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__subtitle, .matches-scroller-match__versus {
    font-family: fcb-light,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    color: #222;
}
.matches-scroller-match__versus {
    font-size: 1.2rem;
}
* {
    box-sizing: border-box;
}
.matches-scroller-match__team-names {
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    max-width: 16rem;
    text-align: center;
    margin: 0 auto;
    color: #222;
    font-size: 1.8rem;
    margin-bottom: .3rem;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__subtitle, .matches-scroller-match__versus {
    font-family: fcb-light,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    color: #222;
}
.matches-scroller-match__versus {
    font-size: 1.2rem;
}
* {
    box-sizing: border-box;
}
.matches-scroller-match__team-names {
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    max-width: 16rem;
    text-align: center;
    margin: 0 auto;
    color: #222;
    font-size: 1.8rem;
    margin-bottom: .3rem;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__subtitle {
    text-align: center;
    font-size: 1.1rem;
}
.matches-scroller-match__subtitle, .matches-scroller-match__versus {
    font-family: fcb-light,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    color: #222;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.u-hide {
    display: none!important;
}
.matches-scroller-match__subtitle-bold {
    font-family: fcb-semi-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
* {
    box-sizing: border-box;
}
.matches-scroller-match__subtitle {
    text-align: center;
    font-size: 1.1rem;
}
.matches-scroller-match__subtitle, .matches-scroller-match__versus {
    font-family: fcb-light,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    color: #222;
}
.matches-scroller-match__meta {
    word-spacing: normal;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1225px) and (min-width: 951px)
.matches-scroller-match--complete .matches-scroller-match__team {
    padding-top: 5.3rem;
}
@media (max-width: 1225px) and (min-width: 951px)
.matches-scroller-match--small .matches-scroller-match__team {
    padding-top: 5rem;
}
@media (max-width: 1280px)
.matches-scroller-match--small .matches-scroller-match__team {
    padding-top: 5.3rem;
}
.matches-scroller-match--complete .matches-scroller-match__team {
    padding-top: 4.6rem;
}
.matches-scroller-match--small .matches-scroller-match__team {
    padding-top: 4.3rem;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-match__badge {
    display: inline;
}
* {
    box-sizing: border-box;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.visually-hidden, .visually-hidden-nav-item {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    visibility: hidden;
}
.visually-hidden {
    width: 1px;
}
* {
    box-sizing: border-box;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1280px)
.matches-scroller-match--small .matches-scroller-match__badge svg {
    width: 4rem;
    height: 4rem;
}
.matches-scroller-match--small .matches-scroller-match__badge svg {
    width: 5.5rem;
    height: 5.5rem;
}
.matches-scroller-match__badge svg {
    width: 8.6rem;
    height: 8.6rem;
}
svg:not(:root) {
    overflow: hidden;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 173.29 341.43 s -12.065 -8.947 -22.964 -19.124 c -71.282 -2.954 -130.27 -42.933 -125.76 -127.61 c 0.266 -2.234 0.043 -2.085 0.429 -5.894 c -4.088 -4.326 -10.853 -11.383 -14.422 -14.948 c 25.568 -26.533 55.405 -87.228 13.991 -142.26 c 2.726 -4.379 4.695 -5.83 8.748 -11.596 c 8.279 2.859 17.482 4.674 26.732 4.674 c 23.748 0 39.963 -2.357 59.9 -15.558 c 15.759 10.941 32.854 17.787 53.319 17.787 c 20.466 0 37.554 -6.846 53.314 -17.787 c 19.937 13.2 36.152 15.558 59.903 15.558 c 9.247 0 18.45 -1.815 26.729 -4.674 c 4.052 5.765 6.022 7.216 8.748 11.596 c -41.411 55.038 -11.579 115.73 13.994 142.26 c -3.575 3.565 -10.337 10.622 -14.422 14.948 c 0.388 3.81 0.16 3.661 0.426 5.894 c 4.508 84.674 -54.483 124.65 -125.76 127.61 c -10.898 10.177 -22.898 19.124 -22.898 19.124 Z");
    fill: rgb(235, 189, 0);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 346.52 173.96 l -5.143 -5.338 c -21.969 -22.79 -53.04 -79.814 -13.397 -132.5 l 3.106 -4.131 l -2.731 -4.387 c -1.706 -2.742 -3.157 -4.508 -4.695 -6.378 c -1.25 -1.52 -2.544 -3.092 -4.286 -5.569 l -3.263 -4.645 l -5.368 1.853 c -8.07 2.787 -16.462 4.261 -24.266 4.261 c -22.641 0 -37.476 -2.212 -55.739 -14.304 l -4.265 -2.824 l -4.199 2.916 c -16.158 11.216 -31.733 16.44 -49.015 16.44 c -17.287 0 -32.862 -5.224 -49.02 -16.44 L 120.04 -0.002 l -4.264 2.822 C 97.513 14.913 82.678 17.125 60.04 17.125 c -7.806 0 -16.199 -1.474 -24.269 -4.261 l -5.368 -1.853 l -3.263 4.645 c -1.742 2.476 -3.035 4.048 -4.286 5.569 c -1.538 1.87 -2.989 3.636 -4.695 6.378 l -2.731 4.387 l 3.108 4.131 c 39.638 52.678 8.569 109.7 -13.397 132.5 l -5.14 5.333 l 5.24 5.235 c 2.96 2.955 8.138 8.341 11.976 12.373 l -0.024 0.669 c -0.016 0.46 -0.027 0.834 -0.117 1.575 l -0.041 0.489 c -2.023 37.989 7.877 69.264 29.428 92.955 c 22.845 25.115 58.547 40.136 100.77 42.456 c 10.467 9.526 21.095 17.428 21.57 17.78 l 4.503 3.34 l 4.497 -3.351 c 0.472 -0.353 11.035 -8.25 21.486 -17.771 c 42.217 -2.319 77.924 -17.342 100.77 -42.456 c 21.551 -23.691 31.451 -54.965 29.428 -92.953 l -0.041 -0.489 c -0.087 -0.731 -0.098 -1.101 -0.114 -1.554 c -0.008 -0.213 -0.013 -0.438 -0.024 -0.69 c 4.134 -4.348 9.144 -9.547 11.97 -12.368 l 5.248 -5.236 Z m -24.996 14.844 c 0.388 3.81 0.16 3.661 0.426 5.894 c 4.508 84.674 -54.483 124.65 -125.76 127.61 c -10.896 10.177 -22.896 19.124 -22.896 19.124 s -12.065 -8.947 -22.964 -19.124 c -71.282 -2.954 -130.27 -42.933 -125.76 -127.61 c 0.266 -2.234 0.043 -2.085 0.429 -5.894 c -4.088 -4.326 -10.853 -11.383 -14.422 -14.948 c 25.568 -26.533 55.405 -87.228 13.991 -142.26 c 2.726 -4.379 4.695 -5.83 8.748 -11.596 c 8.279 2.859 17.482 4.674 26.732 4.674 c 23.748 0 39.963 -2.357 59.9 -15.558 c 15.759 10.941 32.854 17.787 53.319 17.787 c 20.466 0 37.554 -6.846 53.314 -17.787 c 19.937 13.2 36.152 15.558 59.903 15.558 c 9.247 0 18.45 -1.815 26.729 -4.674 c 4.052 5.765 6.022 7.216 8.748 11.596 c -41.411 55.038 -11.579 115.73 13.994 142.26 c -3.577 3.565 -10.339 10.621 -14.424 14.948 Z");
    fill: rgb(29, 29, 27);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 154.32 309.5 c 0.447 0.022 0.887 0.056 1.337 0.075 c 13.074 0.071 24.933 0.137 35.2 0 c 0.949 -0.039 1.885 -0.106 2.829 -0.158 v -118.64 H 154.32 v 118.72 Z m -78.714 -23.668 c 11.273 8.079 24.589 13.969 39.364 17.881 v -112.93 H 75.606 v 95.053 Z m 157.43 -95.053 v 112.55 c 14.835 -4.086 28.158 -10.207 39.369 -18.57 v -93.978 h -39.369 Z");
    fill: rgb(164, 3, 68);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 38.089 190.78 h 270.34 c 0.193 2.422 0.369 2.563 0.619 4.975 c 3.982 78.081 -49.237 110.96 -118.19 113.82 c -10.267 0.137 -22.126 0.071 -35.2 0 c -68.949 -2.856 -122.17 -35.74 -118.19 -113.82 c 0.249 -2.411 0.423 -2.552 0.618 -4.975 Z");
    fill: none;
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 47.073 141.42 c 12.987 -29.771 17.815 -68.005 -4.014 -105.38 c 5.452 0.963 11.181 1.565 16.983 1.565 c 22.348 0 39.944 -2.032 59.705 -13.202 c 15.581 9.427 33.036 15.418 53.474 15.431 c 20.517 -0.013 37.969 -6.005 53.55 -15.431 c 19.763 11.17 37.356 13.202 59.707 13.202 c 5.799 0 11.528 -0.602 17.037 -1.659 c -21.887 37.458 -17.056 75.698 -4.071 105.47 H 47.074 v 0.001 Z");
    fill: rgb(255, 255, 255);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 198.46 141.42 h 13.489 V 31.95 a 100.57 100.57 0 0 1 -13.489 4.598 v 104.87 Z M 301.83 36.24 c -4.991 0.865 -10.137 1.372 -15.347 1.372 c -2.414 0 -4.763 -0.03 -7.077 -0.087 v 103.9 h 20.043 c -12.624 -28.942 -17.466 -65.888 2.382 -102.34 v -2.844 Z m -49.405 105.18 h 13.492 V 36.71 c -4.601 -0.477 -9.073 -1.184 -13.492 -2.211 v 106.92 Z m -79.883 -101.6 v 101.61 h 12.429 V 39.1 c -3.814 0.447 -7.703 0.745 -11.745 0.747 c -0.234 0 -0.453 -0.023 -0.684 -0.025 Z m 52.902 -14.649 v 116.26 h 13.492 V 30.271 a 100.267 100.267 0 0 1 -12.16 -5.847 c -0.437 0.264 -0.893 0.498 -1.332 0.757 Z");
    fill: rgb(255, 220, 0);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 225.44 25.164 a 113.661 113.661 0 0 1 -13.492 6.783 v 109.47 h 13.492 V 25.157 Z M 184.96 141.42 h 13.492 V 36.55 a 97.434 97.434 0 0 1 -13.492 2.547 v 102.33 Z m 53.97 0 h 13.489 V 34.5 a 92.24 92.24 0 0 1 -13.489 -4.242 v 111.16 Z M 279.4 37.522 c -4.663 -0.114 -9.138 -0.362 -13.492 -0.815 v 104.71 H 279.4 v -103.9 Z M 95.214 106.97 v 34.445 h 37.557 V 106.97 h 40.015 V 69.41 h -40.015 V 31.194 a 115.964 115.964 0 0 1 -13.026 -6.791 c -8.39 4.743 -16.391 7.827 -24.532 9.818 V 69.41 h -39.3 c 2.639 12.885 2.731 25.53 1.034 37.56 h 38.267 Z");
    fill: rgb(220, 5, 43);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 301.13 142.52 H 45.39 l 0.673 -1.545 c 11.121 -25.49 19.462 -64.292 -3.955 -104.38 l -1.202 -2.057 l 2.346 0.415 c 5.815 1.027 11.466 1.547 16.79 1.547 c 22.839 0 39.841 -2.136 59.162 -13.058 l 0.562 -0.317 l 0.553 0.334 c 16.961 10.264 34.267 15.259 52.902 15.271 c 18.684 -0.012 36.014 -5.007 52.978 -15.271 l 0.554 -0.334 l 0.561 0.317 C 246.638 34.364 263.642 36.5 286.479 36.5 c 5.495 0 11.159 -0.551 16.828 -1.638 l 2.387 -0.457 l -1.226 2.097 c -23.463 40.156 -15.133 78.975 -4.012 104.47 l 0.673 1.544 Z m -127.24 -2.208 h 123.88 c -10.793 -25.527 -18.402 -63.448 3.616 -102.86 c -5.024 0.836 -10.028 1.26 -14.908 1.26 c -22.986 0 -40.175 -2.144 -59.688 -13.03 c -16.942 10.134 -34.264 15.129 -52.904 15.256 v 99.376 Z m -125.14 0 h 122.93 V 40.928 c -18.26 -0.278 -35.276 -5.273 -51.95 -15.247 c -19.511 10.887 -36.7 13.03 -59.686 13.03 c -4.747 0 -9.738 -0.404 -14.873 -1.2 c 21.997 39.359 14.378 77.273 3.579 102.8 Z m 66.87 43.468 h 7.682 v -14.471 h 10.351 v -7.482 h -10.351 v -5.665 h 17.707 v -7.531 H 115.62 v 35.149 Z m 55.009 -28.059 c 2.753 0 4.69 1.149 5.921 3.51 l 0.179 0.343 l 7.101 -3.278 l -0.179 -0.371 c -2.479 -5.125 -6.95 -7.834 -12.925 -7.834 c -9.22 0 -15.662 7.449 -15.662 18.114 c 0 11.006 6.052 18.117 15.418 18.117 c 6.106 0 10.503 -2.685 13.071 -7.981 l 0.163 -0.335 l -6.458 -3.83 l -0.206 0.347 c -1.817 3.04 -3.545 4.169 -6.374 4.169 c -4.627 0 -7.736 -4.214 -7.736 -10.487 c 0 -6.467 2.946 -10.484 7.687 -10.484 Z m 55.606 9.008 c 2.059 -1.518 3.228 -3.89 3.228 -6.617 c 0 -5.938 -4.223 -9.482 -11.297 -9.482 h -16.153 v 35.15 h 16.006 c 7.901 0 12.621 -4.295 12.621 -11.491 c 0.001 -3.327 -1.594 -6.045 -4.405 -7.56 Z m -16.687 -8.959 h 8.322 c 3.361 0 3.814 1.457 3.814 2.881 c 0 1.933 -1.101 2.833 -3.467 2.833 h -8.669 v -5.714 Z m 8.716 20.676 h -8.715 v -8.068 h 8.715 c 3.071 0 4.5 1.273 4.5 4.009 c -0.001 2.655 -1.555 4.059 -4.5 4.059 Z");
    fill: rgb(29, 29, 27);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 309.04 195.75 c -0.25 -2.411 -0.426 -2.552 -0.619 -4.975 h -36.033 v 93.986 c 24.424 -18.211 38.789 -47.088 36.652 -89.011 Z m -271.58 0 c -2.178 42.761 12.822 71.941 38.143 90.082 v -95.057 H 38.079 c -0.195 2.423 -0.369 2.564 -0.619 4.975 Z m 156.21 113.66 c 13.907 -0.749 27.149 -2.726 39.367 -6.092 v -112.55 H 193.67 v 118.64 Z m -78.711 -5.708 c 12.242 3.241 25.473 5.135 39.364 5.791 v -118.72 h -39.364 v 112.93 Z");
    fill: rgb(0, 74, 153);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 176.92 310.76 c -6.497 0 -13.446 -0.037 -20.778 -0.076 l -0.494 -0.003 c -41.949 -1.737 -74.83 -14.421 -95.122 -36.679 c -17.694 -19.406 -25.823 -45.75 -24.163 -78.3 c 0.119 -1.18 0.22 -1.823 0.312 -2.422 a 29.97 29.97 0 0 0 0.309 -2.585 l 0.081 -1.016 h 272.38 l 0.081 1.017 c 0.1 1.283 0.198 1.905 0.304 2.589 c 0.095 0.598 0.195 1.24 0.312 2.358 c 1.663 32.608 -6.466 58.952 -24.158 78.357 c -20.292 22.26 -53.17 34.943 -95.081 36.679 c -4.4 0.059 -9.06 0.081 -13.978 0.081 Z M 39.09 191.89 a 30.084 30.084 0 0 1 -0.233 1.733 c -0.087 0.571 -0.184 1.183 -0.293 2.252 c -1.625 31.883 6.312 57.688 23.593 76.643 c 19.888 21.815 52.235 34.249 93.543 35.961 l 0.453 0.001 c 12.868 0.071 24.551 0.129 34.687 -0.001 c 41.276 -1.712 73.623 -14.146 93.51 -35.961 c 17.281 -18.955 25.215 -44.76 23.588 -76.701 c -0.106 -1.008 -0.203 -1.618 -0.29 -2.188 c -0.081 -0.519 -0.157 -1.005 -0.236 -1.739 H 39.092 Z");
    fill: rgb(29, 29, 27);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 136.34 248.71 c 0 -20.418 16.552 -36.97 36.966 -36.97 c 20.42 0 36.971 16.552 36.971 36.97 s -16.551 36.97 -36.971 36.97 c -20.414 0 -36.966 -16.552 -36.966 -36.97 Z");
    fill: rgb(235, 189, 0);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 173.11 210.83 c 20.843 0 37.736 16.895 37.736 37.737 c 0 20.841 -16.893 37.736 -37.736 37.736 c -20.84 0 -37.734 -16.895 -37.734 -37.736 c 0 -20.842 16.894 -37.737 37.734 -37.737 Z m -19.256 44.584 c -6.83 -6.218 -6.852 -18.855 -5.018 -27.25 c 0.51 -2.335 1.156 -4.625 1.815 -7.241 c -8.026 6.53 -13.153 16.488 -13.153 27.644 c 0 4.722 0.917 9.229 2.588 13.352 c 0.602 0.081 1.22 0.124 1.847 0.124 c 5.272 0 9.583 -2.437 11.921 -6.629 Z m 36.662 2.726 c -1.166 5.97 -7.551 10.443 -13.562 14.03 c -6.201 3.697 -16.194 5.608 -23.718 5.955 a 35.437 35.437 0 0 0 19.874 6.059 c 13.432 0 25.126 -7.435 31.194 -18.412 c -1.066 -8.791 -9.421 -9.819 -13.788 -7.632 Z m -40.042 17.924 c 7.427 0.058 18.846 -1.812 25.394 -5.715 c 8.457 -5.045 15.03 -10.432 11.908 -17.902 c -1.579 -3.772 -6.825 -8.139 -13.628 -3.326 c -0.434 5.577 -7.316 10.495 -12.255 9.861 c -2.503 -0.321 -4.603 -1.112 -6.347 -2.255 c -2.778 4.743 -7.747 7.436 -13.614 7.436 c -0.287 0 -0.575 -0.008 -0.86 -0.023 a 35.714 35.714 0 0 0 9.402 11.924 Z m 22.546 -49.693 c 5.889 -2.441 14.053 0.732 20.273 4.207 c 5.875 3.281 12.008 9.405 15.369 15.834 c -1.109 -18.565 -16.438 -33.302 -35.243 -33.461 c -5.62 3.689 -4.852 10.649 -0.399 13.42 Z m -0.998 22.726 c -7.291 -5.319 -6.844 -13.693 -3.705 -18.662 c 0.768 -1.219 1.665 -2.178 2.664 -2.913 c -4.242 -3.384 -5.091 -9.951 -0.982 -14.437 a 35.402 35.402 0 0 0 -16.687 5.871 c -1.554 6.688 -3.534 12.799 -3.434 19.782 c 0.133 9.419 4.031 17.081 12.288 18.138 c 3.851 0.496 9.411 -3.607 9.856 -7.779 Z m 36.556 2.746 c -2.034 -7.367 -9.339 -15.514 -16.316 -19.413 c -8.604 -4.805 -18.016 -7.42 -22.155 -0.863 c -2.658 4.211 -3.027 11.165 3 15.696 c 8.192 -5.658 14.734 -0.156 16.622 4.367 c 0.608 1.45 0.914 2.828 0.968 4.139 c 4.836 -1.701 12.692 -0.605 15.111 6.938 a 35.354 35.354 0 0 0 2.77 -10.864 Z");
    fill: rgb(29, 29, 27);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller-match__team {
    flex: 1;
    text-align: center;
    padding-top: 1rem;
}
.matches-scroller-item__match {
    text-decoration: none;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller__control-wrapper {
    display: inline-block;
    margin-right: 1.7rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller__controls-header {
    text-align: right;
    position: absolute;
    top: 4.4rem;
    right: 3.4rem;
    left: 0;
    margin: 0;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller__controls-header {
    text-align: right;
    position: absolute;
    top: 4.4rem;
    right: 3.4rem;
    left: 0;
    margin: 0;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.matches-scroller__controls-header {
    text-align: right;
    position: absolute;
    top: 4.4rem;
    right: 3.4rem;
    left: 0;
    margin: 0;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller__slide-arrow--inactive {
    cursor: not-allowed;
    opacity: .5;
    pointer-events: none;
}
.matches-scroller__slide-arrow {
    position: relative;
    text-indent: -99rem;
    z-index: 10;
    width: 4rem;
    height: 4rem;
    opacity: 1;
    transition: opacity .3s ease-out;
    overflow: hidden;
    -webkit-transform: none;
    transform: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: none;
    background: transparent;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
button {
    appearance: auto;
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: center;
    align-items: flex-start;
    cursor: default;
    background-color: -internal-light-dark(rgb(239, 239, 239), rgb(59, 59, 59));
    box-sizing: border-box;
    margin: 0em;
    font: 400 13.3333px Arial;
    padding: 1px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
.matches-scroller__controls-header {
    text-align: right;
    position: absolute;
    top: 4.4rem;
    right: 3.4rem;
    left: 0;
    margin: 0;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller__slide-arrow .icon {
    fill: #000;
}
.matches-scroller__slide-arrow .icon {
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    top: 50%;
    transition: fill .3s ease-out;
    z-index: 30;
}
svg:not(:root) {
    overflow: hidden;
}
.icon {
    display: inline-block;
    width: 1.6rem;
    height: 1.6rem;
    vertical-align: middle;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
.matches-scroller__slide-arrow--inactive {
    cursor: not-allowed;
    opacity: .5;
    pointer-events: none;
}
.matches-scroller__slide-arrow {
    position: relative;
    text-indent: -99rem;
    z-index: 10;
    width: 4rem;
    height: 4rem;
    opacity: 1;
    transition: opacity .3s ease-out;
    overflow: hidden;
    -webkit-transform: none;
    transform: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: none;
    background: transparent;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
user agent stylesheet
button {
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    text-align: center;
    cursor: default;
    font: 400 13.3333px Arial;
}
.matches-scroller__controls-header {
    text-align: right;
    position: absolute;
    top: 4.4rem;
    right: 3.4rem;
    left: 0;
    margin: 0;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 0.41 44 l 3.2 -3.73 L 38.21 0 L 47 7.46 L 15.6 44 L 47 80.54 L 38.21 88 L 3.61 47.73 Z");
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller__slide-arrow .icon {
    fill: #000;
}
.matches-scroller__slide-arrow--inactive {
    cursor: not-allowed;
    opacity: .5;
    pointer-events: none;
}
.matches-scroller__slide-arrow {
    position: relative;
    text-indent: -99rem;
    z-index: 10;
    width: 4rem;
    height: 4rem;
    opacity: 1;
    transition: opacity .3s ease-out;
    overflow: hidden;
    -webkit-transform: none;
    transform: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: none;
    background: transparent;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
user agent stylesheet
button {
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    text-align: center;
    cursor: default;
    font: 400 13.3333px Arial;
}
.matches-scroller__controls-header {
    text-align: right;
    position: absolute;
    top: 4.4rem;
    right: 3.4rem;
    left: 0;
    margin: 0;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller__slide-arrow {
    position: relative;
    text-indent: -99rem;
    z-index: 10;
    width: 4rem;
    height: 4rem;
    opacity: 1;
    transition: opacity .3s ease-out;
    overflow: hidden;
    -webkit-transform: none;
    transform: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: none;
    background: transparent;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
button {
    appearance: auto;
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: center;
    align-items: flex-start;
    cursor: default;
    background-color: -internal-light-dark(rgb(239, 239, 239), rgb(59, 59, 59));
    box-sizing: border-box;
    margin: 0em;
    font: 400 13.3333px Arial;
    padding: 1px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
.matches-scroller__controls-header {
    text-align: right;
    position: absolute;
    top: 4.4rem;
    right: 3.4rem;
    left: 0;
    margin: 0;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller__slide-arrow .icon {
    fill: #000;
}
.matches-scroller__slide-arrow .icon {
    position: absolute;
    left: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    top: 50%;
    transition: fill .3s ease-out;
    z-index: 30;
}
svg:not(:root) {
    overflow: hidden;
}
.icon {
    display: inline-block;
    width: 1.6rem;
    height: 1.6rem;
    vertical-align: middle;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
.matches-scroller__slide-arrow {
    position: relative;
    text-indent: -99rem;
    z-index: 10;
    width: 4rem;
    height: 4rem;
    opacity: 1;
    transition: opacity .3s ease-out;
    overflow: hidden;
    -webkit-transform: none;
    transform: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: none;
    background: transparent;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
user agent stylesheet
button {
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    text-align: center;
    cursor: default;
    font: 400 13.3333px Arial;
}
.matches-scroller__controls-header {
    text-align: right;
    position: absolute;
    top: 4.4rem;
    right: 3.4rem;
    left: 0;
    margin: 0;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    fill-rule: evenodd;
    d: path("M 46.59 44 l -3.2 -3.73 L 8.79 0 L 0 7.46 L 31.4 44 L 0 80.54 L 8.79 88 l 34.6 -40.27 l 3.2 -3.73 Z");
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.matches-scroller__slide-arrow .icon {
    fill: #000;
}
.matches-scroller__slide-arrow {
    position: relative;
    text-indent: -99rem;
    z-index: 10;
    width: 4rem;
    height: 4rem;
    opacity: 1;
    transition: opacity .3s ease-out;
    overflow: hidden;
    -webkit-transform: none;
    transform: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: none;
    background: transparent;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
user agent stylesheet
button {
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    text-align: center;
    cursor: default;
    font: 400 13.3333px Arial;
}
.matches-scroller__controls-header {
    text-align: right;
    position: absolute;
    top: 4.4rem;
    right: 3.4rem;
    left: 0;
    margin: 0;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller-item__cta {
    word-spacing: .8rem;
    padding: 1.2rem .4rem;
    border-top: .1rem solid #efefef;
    font-size: 0;
    text-align: center;
    margin-top: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 8.2rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1175px) and (min-width: 841px)
.matches-scroller-item--small .matches-scroller-item__button {
    min-width: auto;
    width: 45%;
}
.matches-scroller-item .button, .matches-scroller-item__button {
    word-spacing: normal;
    margin-bottom: .4rem;
}
@media (max-width: 1175px) and (min-width: 841px)
.matches-scroller-item__button {
    max-width: 13.4rem;
    min-width: auto;
    width: 45%;
}
.button--dark {
    color: #fff;
}
.button--stroke {
    color: #222;
}
.button {
    min-width: 14.8rem;
    position: relative;
    display: inline-block;
    padding: 0 1.6rem;
    line-height: 3.2rem;
    border-radius: 3px;
    border: none;
    text-transform: uppercase;
    text-decoration: none;
    text-align: center;
    color: #fff;
    box-shadow: 0 0.2rem 0.6rem 0.1rem rgb(0 0 0 / 20%);
    font-size: 1.2rem;
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    will-change: transform;
    -webkit-transform: translateY(0);
    transform: translateY(0);
    cursor: pointer;
    pointer-events: all;
    transition: color .2s ease,box-shadow .2s ease,-webkit-transform .2s ease;
    transition: color .2s ease,box-shadow .2s ease,transform .2s ease;
    transition: color .2s ease,box-shadow .2s ease,transform .2s ease,-webkit-transform .2s ease;
}
a {
    background-color: transparent;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}
.matches-scroller-item__cta {
    word-spacing: .8rem;
    padding: 1.2rem .4rem;
    border-top: .1rem solid #efefef;
    font-size: 0;
    text-align: center;
    margin-top: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 8.2rem;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1175px) and (min-width: 841px)
.matches-scroller-item__text-desktop {
    display: none;
}
.matches-scroller-item__text-desktop {
    display: inline;
}
* {
    box-sizing: border-box;
}
.matches-scroller-item .button, .matches-scroller-item__button {
    word-spacing: normal;
    margin-bottom: .4rem;
}
.button--dark {
    color: #fff;
}
.button--stroke {
    color: #222;
}
.button {
    min-width: 14.8rem;
    position: relative;
    display: inline-block;
    padding: 0 1.6rem;
    line-height: 3.2rem;
    border-radius: 3px;
    border: none;
    text-transform: uppercase;
    text-decoration: none;
    text-align: center;
    color: #fff;
    box-shadow: 0 0.2rem 0.6rem 0.1rem rgb(0 0 0 / 20%);
    font-size: 1.2rem;
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    will-change: transform;
    -webkit-transform: translateY(0);
    transform: translateY(0);
    cursor: pointer;
    pointer-events: all;
    transition: color .2s ease,box-shadow .2s ease,-webkit-transform .2s ease;
    transition: color .2s ease,box-shadow .2s ease,transform .2s ease;
    transition: color .2s ease,box-shadow .2s ease,transform .2s ease,-webkit-transform .2s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
.matches-scroller-item__cta {
    word-spacing: .8rem;
    padding: 1.2rem .4rem;
    border-top: .1rem solid #efefef;
    font-size: 0;
    text-align: center;
    margin-top: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 8.2rem;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1175px) and (min-width: 841px)
.matches-scroller-item__text-mobile {
    display: inline;
}
.matches-scroller-item__text-mobile {
    display: none;
}
* {
    box-sizing: border-box;
}
.matches-scroller-item .button, .matches-scroller-item__button {
    word-spacing: normal;
    margin-bottom: .4rem;
}
.button--dark {
    color: #fff;
}
.button--stroke {
    color: #222;
}
.button {
    min-width: 14.8rem;
    position: relative;
    display: inline-block;
    padding: 0 1.6rem;
    line-height: 3.2rem;
    border-radius: 3px;
    border: none;
    text-transform: uppercase;
    text-decoration: none;
    text-align: center;
    color: #fff;
    box-shadow: 0 0.2rem 0.6rem 0.1rem rgb(0 0 0 / 20%);
    font-size: 1.2rem;
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    will-change: transform;
    -webkit-transform: translateY(0);
    transform: translateY(0);
    cursor: pointer;
    pointer-events: all;
    transition: color .2s ease,box-shadow .2s ease,-webkit-transform .2s ease;
    transition: color .2s ease,box-shadow .2s ease,transform .2s ease;
    transition: color .2s ease,box-shadow .2s ease,transform .2s ease,-webkit-transform .2s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
.matches-scroller-item__cta {
    word-spacing: .8rem;
    padding: 1.2rem .4rem;
    border-top: .1rem solid #efefef;
    font-size: 0;
    text-align: center;
    margin-top: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 8.2rem;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1175px) and (min-width: 841px)
.matches-scroller-item--small .matches-scroller-item__button {
    min-width: auto;
    width: 45%;
}
.matches-scroller-item__button:nth-child(2), .matches-scroller-item__ticket:nth-child(2) {
    margin-left: .8rem;
}
.matches-scroller-item .button, .matches-scroller-item__button {
    word-spacing: normal;
    margin-bottom: .4rem;
}
@media (max-width: 1175px) and (min-width: 841px)
.matches-scroller-item__button {
    max-width: 13.4rem;
    min-width: auto;
    width: 45%;
}
.button {
    min-width: 14.8rem;
    position: relative;
    display: inline-block;
    padding: 0 1.6rem;
    line-height: 3.2rem;
    border-radius: 3px;
    border: none;
    text-transform: uppercase;
    text-decoration: none;
    text-align: center;
    color: #fff;
    box-shadow: 0 0.2rem 0.6rem 0.1rem rgb(0 0 0 / 20%);
    font-size: 1.2rem;
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    will-change: transform;
    -webkit-transform: translateY(0);
    transform: translateY(0);
    cursor: pointer;
    pointer-events: all;
    transition: color .2s ease,box-shadow .2s ease,-webkit-transform .2s ease;
    transition: color .2s ease,box-shadow .2s ease,transform .2s ease;
    transition: color .2s ease,box-shadow .2s ease,transform .2s ease,-webkit-transform .2s ease;
}
a {
    background-color: transparent;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}
.matches-scroller-item__cta {
    word-spacing: .8rem;
    padding: 1.2rem .4rem;
    border-top: .1rem solid #efefef;
    font-size: 0;
    text-align: center;
    margin-top: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 8.2rem;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
html {
    font-size: 10px;
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
.button:before {
    background: linear-gradient(
270deg
,#154284,#cd122d);
}
.button:after, .button:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: .3rem;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}
.button--secondary:after {
    background: #154284;
}
.button:after {
    background: linear-gradient(
90deg
,#154284,#cd122d);
    transition: opacity .2s ease;
}
.button:after, .button:before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: .3rem;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}
@media (max-width: 1175px) and (min-width: 841px)
.matches-scroller-item__text-desktop {
    display: none;
}
.matches-scroller-item__text-desktop {
    display: inline;
}
* {
    box-sizing: border-box;
}
.matches-scroller-item .button, .matches-scroller-item__button {
    word-spacing: normal;
    margin-bottom: .4rem;
}
.button {
    min-width: 14.8rem;
    position: relative;
    display: inline-block;
    padding: 0 1.6rem;
    line-height: 3.2rem;
    border-radius: 3px;
    border: none;
    text-transform: uppercase;
    text-decoration: none;
    text-align: center;
    color: #fff;
    box-shadow: 0 0.2rem 0.6rem 0.1rem rgb(0 0 0 / 20%);
    font-size: 1.2rem;
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    will-change: transform;
    -webkit-transform: translateY(0);
    transform: translateY(0);
    cursor: pointer;
    pointer-events: all;
    transition: color .2s ease,box-shadow .2s ease,-webkit-transform .2s ease;
    transition: color .2s ease,box-shadow .2s ease,transform .2s ease;
    transition: color .2s ease,box-shadow .2s ease,transform .2s ease,-webkit-transform .2s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
.matches-scroller-item__cta {
    word-spacing: .8rem;
    padding: 1.2rem .4rem;
    border-top: .1rem solid #efefef;
    font-size: 0;
    text-align: center;
    margin-top: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 8.2rem;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1175px) and (min-width: 841px)
.matches-scroller-item__text-mobile {
    display: inline;
}
.matches-scroller-item__text-mobile {
    display: none;
}
* {
    box-sizing: border-box;
}
.matches-scroller-item .button, .matches-scroller-item__button {
    word-spacing: normal;
    margin-bottom: .4rem;
}
.button {
    min-width: 14.8rem;
    position: relative;
    display: inline-block;
    padding: 0 1.6rem;
    line-height: 3.2rem;
    border-radius: 3px;
    border: none;
    text-transform: uppercase;
    text-decoration: none;
    text-align: center;
    color: #fff;
    box-shadow: 0 0.2rem 0.6rem 0.1rem rgb(0 0 0 / 20%);
    font-size: 1.2rem;
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    will-change: transform;
    -webkit-transform: translateY(0);
    transform: translateY(0);
    cursor: pointer;
    pointer-events: all;
    transition: color .2s ease,box-shadow .2s ease,-webkit-transform .2s ease;
    transition: color .2s ease,box-shadow .2s ease,transform .2s ease;
    transition: color .2s ease,box-shadow .2s ease,transform .2s ease,-webkit-transform .2s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
.matches-scroller-item__cta {
    word-spacing: .8rem;
    padding: 1.2rem .4rem;
    border-top: .1rem solid #efefef;
    font-size: 0;
    text-align: center;
    margin-top: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 8.2rem;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
.matches-scroller__list {
    white-space: nowrap;
    position: relative;
    transition: left .3s ease-out,-webkit-transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out;
    transition: left .3s ease-out,transform .3s ease-out,-webkit-transform .3s ease-out;
    will-change: left;
    word-spacing: .8rem;
    display: flex;
    flex-direction: row;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1210px)
.matches-scroller .calendar-download {
    position: static;
    margin: 1rem auto;
}
.matches-scroller .calendar-download {
    display: block;
    position: absolute;
    right: 15rem;
    top: 4.8rem;
    z-index: 10;
}
.calendar-download__button {
    border: none;
    padding: 0;
    text-align: left;
}
.calendar-download {
    display: none;
    margin-right: auto;
    margin-left: 1.6rem;
    text-decoration: none;
    color: #154284;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    font-style: italic;
    background: transparent;
    border: none;
    margin-top: .6rem;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
button {
    appearance: auto;
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: center;
    align-items: flex-start;
    cursor: default;
    background-color: -internal-light-dark(rgb(239, 239, 239), rgb(59, 59, 59));
    box-sizing: border-box;
    margin: 0em;
    font: 400 13.3333px Arial;
    padding: 1px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.calendar-download .icon {
    margin-right: .4rem;
    fill: #154284;
}
svg:not(:root) {
    overflow: hidden;
}
.icon {
    display: inline-block;
    width: 1.6rem;
    height: 1.6rem;
    vertical-align: middle;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
.calendar-download__button {
    border: none;
    padding: 0;
    text-align: left;
}
.calendar-download {
    display: none;
    margin-right: auto;
    margin-left: 1.6rem;
    text-decoration: none;
    color: #154284;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    font-style: italic;
    background: transparent;
    border: none;
    margin-top: .6rem;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
user agent stylesheet
button {
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    text-align: center;
    cursor: default;
    font: 400 13.3333px Arial;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 4.1 2.3 a 0.78 0.78 0 0 1 -1.56 0 a 0.78 0.78 0 0 1 1.56 0 m 8.06 0 a 0.78 0.78 0 0 1 -1.56 0 a 0.78 0.78 0 0 1 1.56 0");
    fill-rule: evenodd;
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.calendar-download .icon {
    margin-right: .4rem;
    fill: #154284;
}
.calendar-download__button {
    border: none;
    padding: 0;
    text-align: left;
}
.calendar-download {
    display: none;
    margin-right: auto;
    margin-left: 1.6rem;
    text-decoration: none;
    color: #154284;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    font-style: italic;
    background: transparent;
    border: none;
    margin-top: .6rem;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
user agent stylesheet
button {
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    text-align: center;
    cursor: default;
    font: 400 13.3333px Arial;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 1 1.9 a 0.9 0.9 0 0 1 0.94 -0.9 h 10.83 a 0.89 0.89 0 0 1 0.9 0.89 v 1.7 H 1 Z m 8.56 9.85 H 1.94 a 0.9 0.9 0 0 1 -0.94 -0.89 V 4.62 h 12.67 v 3.14 a 4.55 4.55 0 0 1 0.52 0 a 4.21 4.21 0 0 1 0.51 0 V 1.9 A 1.92 1.92 0 0 0 12.77 0 H 1.94 A 1.92 1.92 0 0 0 0 1.9 v 9 a 1.92 1.92 0 0 0 1.94 1.9 h 7.65 a 3.88 3.88 0 0 1 0 -0.48 a 4.73 4.73 0 0 1 0 -0.53 Z");
    fill-rule: evenodd;
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.calendar-download .icon {
    margin-right: .4rem;
    fill: #154284;
}
.calendar-download__button {
    border: none;
    padding: 0;
    text-align: left;
}
.calendar-download {
    display: none;
    margin-right: auto;
    margin-left: 1.6rem;
    text-decoration: none;
    color: #154284;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    font-style: italic;
    background: transparent;
    border: none;
    margin-top: .6rem;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
user agent stylesheet
button {
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    text-align: center;
    cursor: default;
    font: 400 13.3333px Arial;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 4 7.9 a 0.76 0.76 0 0 1 -0.76 -0.77 a 0.76 0.76 0 1 1 1.52 0 A 0.76 0.76 0 0 1 4 7.9 Z m 0 -2.53 a 1.8 1.8 0 0 0 -1.85 1.76 a 1.81 1.81 0 0 0 3.62 0 A 1.8 1.8 0 0 0 4 5.37 Z m 0.72 4.27 H 3.18 a 0.51 0.51 0 0 0 -0.52 0.51 a 0.51 0.51 0 0 0 0.52 0.5 h 1.54 a 0.51 0.51 0 0 0 0.52 -0.5 a 0.51 0.51 0 0 0 -0.52 -0.51 Z m 3.66 0 H 6.84 a 0.51 0.51 0 0 0 -0.52 0.51 a 0.51 0.51 0 0 0 0.52 0.5 h 1.54 a 0.51 0.51 0 0 0 0.52 -0.5 a 0.51 0.51 0 0 0 -0.52 -0.51 Z m 0 -3.01 H 6.84 a 0.51 0.51 0 0 0 -0.52 0.5 a 0.51 0.51 0 0 0 0.52 0.51 h 1.54 a 0.51 0.51 0 0 0 0.52 -0.51 a 0.51 0.51 0 0 0 -0.52 -0.5 Z m 3.62 0 h -1.52 a 0.51 0.51 0 0 0 -0.52 0.5 a 0.51 0.51 0 0 0 0.52 0.51 H 12 a 0.51 0.51 0 0 0 0.52 -0.51 a 0.5 0.5 0 0 0 -0.52 -0.5 Z m 2.19 8.17 a 2.53 2.53 0 1 1 2.57 -2.52 a 2.55 2.55 0 0 1 -2.57 2.52 Z m 0 -6.06 a 3.54 3.54 0 1 0 3.6 3.53 a 3.57 3.57 0 0 0 -3.6 -3.53 Z");
    fill-rule: evenodd;
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.calendar-download .icon {
    margin-right: .4rem;
    fill: #154284;
}
.calendar-download__button {
    border: none;
    padding: 0;
    text-align: left;
}
.calendar-download {
    display: none;
    margin-right: auto;
    margin-left: 1.6rem;
    text-decoration: none;
    color: #154284;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    font-style: italic;
    background: transparent;
    border: none;
    margin-top: .6rem;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
user agent stylesheet
button {
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    text-align: center;
    cursor: default;
    font: 400 13.3333px Arial;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 14.86 12.21 l -0.16 0.15 v -1.44 a 0.52 0.52 0 0 0 -1 0 v 1.44 l -0.16 -0.15 a 0.52 0.52 0 0 0 -0.73 0 a 0.51 0.51 0 0 0 0 0.71 l 1 1 a 0.51 0.51 0 0 0 0.37 0.14 a 0.57 0.57 0 0 0 0.37 -0.14 l 1 -1 a 0.5 0.5 0 0 0 0 -0.71 a 0.52 0.52 0 0 0 -0.73 0 Z");
    fill-rule: evenodd;
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.calendar-download .icon {
    margin-right: .4rem;
    fill: #154284;
}
.calendar-download__button {
    border: none;
    padding: 0;
    text-align: left;
}
.calendar-download {
    display: none;
    margin-right: auto;
    margin-left: 1.6rem;
    text-decoration: none;
    color: #154284;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    font-style: italic;
    background: transparent;
    border: none;
    margin-top: .6rem;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
user agent stylesheet
button {
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    text-align: center;
    cursor: default;
    font: 400 13.3333px Arial;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller__controls {
    margin-top: 2.4rem;
    position: relative;
    display: flex;
    justify-content: center;
}
ol, ul {
    padding-left: 0;
    margin-top: 0;
    margin-bottom: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
ol li, ul li {
    list-style-type: none;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller__pager--active {
    background-color: #cd122d;
}
.matches-scroller__pager {
    margin-right: .3rem;
    width: 4.4rem;
    height: .4rem;
    border: none;
    box-shadow: none;
    list-style-type: none;
    transition: background-color .3s ease-out;
    display: block;
    background-color: #d8d8d8;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
button {
    appearance: auto;
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: center;
    align-items: flex-start;
    cursor: default;
    background-color: -internal-light-dark(rgb(239, 239, 239), rgb(59, 59, 59));
    box-sizing: border-box;
    margin: 0em;
    font: 400 13.3333px Arial;
    padding: 1px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.visually-hidden, .visually-hidden-nav-item {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    visibility: hidden;
}
.visually-hidden {
    width: 1px;
}
* {
    box-sizing: border-box;
}
.matches-scroller__pager {
    margin-right: .3rem;
    width: 4.4rem;
    height: .4rem;
    border: none;
    box-shadow: none;
    list-style-type: none;
    transition: background-color .3s ease-out;
    display: block;
    background-color: #d8d8d8;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
user agent stylesheet
button {
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    text-align: center;
    cursor: default;
    font: 400 13.3333px Arial;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
ol li, ul li {
    list-style-type: none;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller__pager {
    margin-right: .3rem;
    width: 4.4rem;
    height: .4rem;
    border: none;
    box-shadow: none;
    list-style-type: none;
    transition: background-color .3s ease-out;
    display: block;
    background-color: #d8d8d8;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
button {
    appearance: auto;
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: center;
    align-items: flex-start;
    cursor: default;
    background-color: -internal-light-dark(rgb(239, 239, 239), rgb(59, 59, 59));
    box-sizing: border-box;
    margin: 0em;
    font: 400 13.3333px Arial;
    padding: 1px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.visually-hidden, .visually-hidden-nav-item {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    visibility: hidden;
}
.visually-hidden {
    width: 1px;
}
* {
    box-sizing: border-box;
}
.matches-scroller__pager {
    margin-right: .3rem;
    width: 4.4rem;
    height: .4rem;
    border: none;
    box-shadow: none;
    list-style-type: none;
    transition: background-color .3s ease-out;
    display: block;
    background-color: #d8d8d8;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
user agent stylesheet
button {
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    text-align: center;
    cursor: default;
    font: 400 13.3333px Arial;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (min-width: 840px)
.matches-scroller__pager:hover {
    background-color: #cd122d;
    cursor: pointer;
}
.matches-scroller__pager:focus {
    background-color: #cd122d;
    cursor: pointer;
}
.matches-scroller__pager--active {
    background-color: #cd122d;
}
.matches-scroller__pager {
    margin-right: .3rem;
    width: 4.4rem;
    height: .4rem;
    border: none;
    box-shadow: none;
    list-style-type: none;
    transition: background-color .3s ease-out;
    display: block;
    background-color: #d8d8d8;
}
:focus {
    outline: 0;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
:focus {
    outline: -webkit-focus-ring-color auto 1px;
}
user agent stylesheet
button {
    appearance: auto;
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: center;
    align-items: flex-start;
    cursor: default;
    background-color: -internal-light-dark(rgb(239, 239, 239), rgb(59, 59, 59));
    box-sizing: border-box;
    margin: 0em;
    font: 400 13.3333px Arial;
    padding: 1px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller__pager--active {
    background-color: #cd122d;
}
.matches-scroller__pager {
    margin-right: .3rem;
    width: 4.4rem;
    height: .4rem;
    border: none;
    box-shadow: none;
    list-style-type: none;
    transition: background-color .3s ease-out;
    display: block;
    background-color: #d8d8d8;
}
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
button {
    appearance: auto;
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(black, white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: center;
    align-items: flex-start;
    cursor: default;
    background-color: -internal-light-dark(rgb(239, 239, 239), rgb(59, 59, 59));
    box-sizing: border-box;
    margin: 0em;
    font: 400 13.3333px Arial;
    padding: 1px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
ol li, ul li {
    list-style-type: none;
}
user agent stylesheet
li {
    text-align: -webkit-match-parent;
}
user agent stylesheet
ul {
    list-style-type: disc;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.matches-scroller .mobile-scroller {
    display: none;
    background-color: rgba(0,0,0,.1);
}
.mobile-scroller {
    margin: 0 1.6rem;
    display: block;
    height: .4rem;
    background-color: hsla(0,0%,100%,.1);
    margin-top: 1.7rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
element.style {
    width: 40.1867%;
    left: 0%;
}
.matches-scroller .mobile-scroller__indicator {
    background-color: #cd122d;
}
.mobile-scroller__indicator {
    height: 100%;
    width: 4.4rem;
    background-color: #fdc52c;
    will-change: left;
    position: relative;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
section {
    display: block;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__title {
    position: relative;
    display: inline-block;
    font-size: 6.2rem;
    line-height: 5rem;
    text-transform: uppercase;
    color: #fff;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    font-style: italic;
    margin: 2.2rem 0 3rem;
    z-index: 10;
}
h1, h2, h3, h4, h5, h6, strong {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h2 {
    font-size: 1.76rem;
}
h1, h2, h3, h4, h5, h6, p {
    margin-top: 0;
    margin-bottom: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
h2 {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__title--yellow {
    color: #fdc52c;
}
* {
    box-sizing: border-box;
}
.fan-comments__title {
    position: relative;
    display: inline-block;
    font-size: 6.2rem;
    line-height: 5rem;
    text-transform: uppercase;
    color: #fff;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    font-style: italic;
    margin: 2.2rem 0 3rem;
    z-index: 10;
}
h1, h2, h3, h4, h5, h6, strong {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h2 {
    font-size: 1.76rem;
}
user agent stylesheet
h2 {
    font-size: 1.5em;
    font-weight: bold;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__title:after {
    content: "";
    position: absolute;
    height: 2.4rem;
    width: calc(100% + 4rem);
    left: -2rem;
    background-color: rgba(173,16,40,.3);
    bottom: -.8rem;
    z-index: -1;
}
.fan-comments__splitter {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 3.6rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__splitter:after, .fan-comments__splitter:before {
    content: "";
    height: .1rem;
    background: #fff;
    flex: 1;
}
.fan-comments__splitter:after, .fan-comments__splitter:before {
    content: "";
    height: .1rem;
    background: #fff;
    flex: 1;
}
.fan-comments__splitter:after, .fan-comments__splitter:before {
    content: "";
    height: .1rem;
    background: #fff;
    flex: 1;
}
.fan-comments__splitter-text {
    font-size: 1.6rem;
    margin: 0 1rem;
    text-transform: uppercase;
}
h1, h2, h3, h4, h5, h6, strong {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h4 {
    font-size: 1.28rem;
}
h1, h2, h3, h4, h5, h6, p {
    margin-top: 0;
    margin-bottom: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
h4 {
    display: block;
    margin-block-start: 1.33em;
    margin-block-end: 1.33em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__splitter-topic-text {
    color: #fdc52c;
}
* {
    box-sizing: border-box;
}
.fan-comments__splitter-text {
    font-size: 1.6rem;
    margin: 0 1rem;
    text-transform: uppercase;
}
h1, h2, h3, h4, h5, h6, strong {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h4 {
    font-size: 1.28rem;
}
user agent stylesheet
h4 {
    font-weight: bold;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
.fan-comments__splitter-text {
    font-size: 1.6rem;
    margin: 0 1rem;
    text-transform: uppercase;
}
h1, h2, h3, h4, h5, h6, strong {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h4 {
    font-size: 1.28rem;
}
user agent stylesheet
h4 {
    font-weight: bold;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__splitter:after, .fan-comments__splitter:before {
    content: "";
    height: .1rem;
    background: #fff;
    flex: 1;
}
.fan-comments__content-container {
    position: relative;
    margin-top: 3.2rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__answers-content-container {
    position: relative;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__answers-counter {
    width: 7.7rem;
    border-radius: 1.4rem;
    background-color: rgba(0,0,0,.4);
    padding: .4rem 1.6rem;
    letter-spacing: .08rem;
    text-align: center;
    font-size: 1.6rem;
}
* {
    box-sizing: border-box;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
.fan-comments__answers-counter {
    width: 7.7rem;
    border-radius: 1.4rem;
    background-color: rgba(0,0,0,.4);
    padding: .4rem 1.6rem;
    letter-spacing: .08rem;
    text-align: center;
    font-size: 1.6rem;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__answers-container {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    margin-top: 1.8rem;
    min-height: 17.8rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__answers-controls-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    padding: 0 .6rem;
    fill: #fdc52c;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__answers-control {
    padding: 1rem;
    position: relative;
    left: 0;
    transition: .3s ease-in-out;
    cursor: pointer;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.fan-comments__answers-controls-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    padding: 0 .6rem;
    fill: #fdc52c;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
section {
    display: block;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__answer-container.is-showing {
    display: block;
}
.fan-comments__answer-container {
    position: relative;
    display: none;
    margin: 0 5rem;
    max-width: calc(100% - 10rem);
    transition: .4s ease-in-out;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__answer-text {
    color: #fff;
    font-size: 3.4rem;
    line-height: 1.26;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
p, p a {
    color: #222;
}
p {
    line-height: 1.6;
}
h1, h2, h3, h4, h5, h6, p {
    margin-top: 0;
    margin-bottom: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__answer-meta-container {
    display: flex;
    justify-content: center;
    align-items: stretch;
    margin-top: 2.4rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__answer-meta-child:first-of-type {
    border-left: none;
}
.fan-comments__answer-meta-child {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 3.2rem;
    border-left: .1rem solid hsla(0,0%,100%,.1);
    z-index: 10;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url(../i/bg-elements/fan-comments-background.png);
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__answer-meta-name-icon, .fan-comments__answer-meta-name-text {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
.fan-comments__answer-meta-name-icon {
    font-size: 4.8rem;
    margin-right: 1rem;
    color: #fdc52c;
}
* {
    box-sizing: border-box;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__answer-meta-name-text {
    font-size: 2.2rem;
    color: #fff;
}
.fan-comments__answer-meta-name-icon, .fan-comments__answer-meta-name-text {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
p, p a {
    color: #222;
}
p {
    line-height: 1.6;
}
h1, h2, h3, h4, h5, h6, p {
    margin-top: 0;
    margin-bottom: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image:url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
svg:not(:root) {
    overflow: hidden;
}
.fan-comments__answers-control-icon {
    width: 1.7rem;
    height: auto;
    vertical-align: middle;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
.fan-comments__answers-control {
    padding: 1rem;
    position: relative;
    left: 0;
    transition: .3s ease-in-out;
    cursor: pointer;
}
.fan-comments__answers-controls-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    padding: 0 .6rem;
    fill: #fdc52c;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 0.41 44 l 3.2 -3.73 L 38.21 0 L 47 7.46 L 15.6 44 L 47 80.54 L 38.21 88 L 3.61 47.73 Z");
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.fan-comments__answers-control {
    padding: 1rem;
    position: relative;
    left: 0;
    transition: .3s ease-in-out;
    cursor: pointer;
}
.fan-comments__answers-controls-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    padding: 0 .6rem;
    fill: #fdc52c;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__answers-control {
    padding: 1rem;
    position: relative;
    left: 0;
    transition: .3s ease-in-out;
    cursor: pointer;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.fan-comments__answers-controls-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    padding: 0 .6rem;
    fill: #fdc52c;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
svg:not(:root) {
    overflow: hidden;
}
.fan-comments__answers-control-icon {
    width: 1.7rem;
    height: auto;
    vertical-align: middle;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
.fan-comments__answers-control {
    padding: 1rem;
    position: relative;
    left: 0;
    transition: .3s ease-in-out;
    cursor: pointer;
}
.fan-comments__answers-controls-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    padding: 0 .6rem;
    fill: #fdc52c;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    fill-rule: evenodd;
    d: path("M 46.59 44 l -3.2 -3.73 L 8.79 0 L 0 7.46 L 31.4 44 L 0 80.54 L 8.79 88 l 34.6 -40.27 l 3.2 -3.73 Z");
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.fan-comments__answers-control {
    padding: 1rem;
    position: relative;
    left: 0;
    transition: .3s ease-in-out;
    cursor: pointer;
}
.fan-comments__answers-controls-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    padding: 0 .6rem;
    fill: #fdc52c;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments__answer-meta-child {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 3.2rem;
    border-left: .1rem solid hsla(0,0%,100%,.1);
    z-index: 10;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça--visible, .força-barça--visible .força-barça {
    opacity: 1;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça--visible, .força-barça--visible .força-barça {
    opacity: 1;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__label-wrapper {
    min-width: 14.5rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__labels {
    position: relative;
    text-align: right;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments .força-barça__counter, .fan-comments .força-barça__title {
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
.fan-comments .força-barça__title {
    color: #fdc52c;
    font-size: 2.2rem;
    line-height: 1.2;
    -webkit-text-fill-color: unset;
}
.força-barça__title {
    background: linear-gradient(
90deg
,#cd122d,#154284);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    color: #fff;
}
.força-barça__title {
    font-size: 1.2rem;
    line-height: 1.2rem;
    text-transform: uppercase;
    color: #cd122d;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.força-barça__labels {
    position: relative;
    text-align: right;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__section {
    display: flex;
    align-items: baseline;
    justify-content: flex-end;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.força-barça__labels {
    position: relative;
    text-align: right;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça .max-claps-fire-icon {
    margin-right: .5rem;
    width: 1.5rem;
    height: 1.7rem;
    fill: #cd122d;
    opacity: 0;
}
svg:not(:root) {
    overflow: hidden;
}
.icon {
    display: inline-block;
    width: 1.6rem;
    height: 1.6rem;
    vertical-align: middle;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
.força-barça__labels {
    position: relative;
    text-align: right;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 154.4 180 c 14.8 6.6 26.8 15.6 36.7 27.5 c 15.3 18.5 23.6 39.5 23.2 63.6 c -0.3 15.2 -4.7 29.1 -13.6 41.6 c -6.4 8.8 -9.9 18.5 -7.8 29.4 c 2.7 14 13.2 23.5 28.3 26.2 c 12.2 2.1 25.7 -4.4 32.7 -15.6 c 4 -6.4 5.8 -13.3 4.9 -20.9 c -0.1 -0.7 0 -1.3 0 -2.6 c 4.1 5.4 6.5 10.9 8 16.7 c 5.5 20 3.7 39.4 -4.5 58.4 c -6 14 -13.9 26.7 -25.3 36.9 c -18 16.4 -39.4 25.2 -63.8 26 h -2.6 c -1.5 -15 -7.6 -28 -15.7 -40.2 c -2 -3.1 -4.1 -6.2 -6.5 -8.9 c -14.4 -16.6 -19.4 -36.2 -18.4 -57.5 c 0.2 -5.4 1.2 -10.8 1.8 -16.2 c 0.1 -0.5 0.1 -1.1 0.1 -1.9 c -20.2 19.2 -40 56.9 -20.7 105.3 c -2.7 -2.2 -5.8 -4.1 -8.4 -6.5 c -16.3 -15.6 -25.8 -34.7 -29.5 -56.7 c -3.2 -18.9 -1 -37.3 7.5 -54.5 c 6 -12.3 15.5 -22.2 25.4 -31.7 c 8.4 -7.9 17.3 -15.3 25.4 -23.4 c 12 -12 21.6 -25.8 26.9 -42.1 c 5.6 -17.2 4.7 -33.9 -3.2 -50.1 c -0.1 -0.9 -0.3 -1.5 -0.9 -2.8");
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.força-barça .max-claps-fire-icon {
    margin-right: .5rem;
    width: 1.5rem;
    height: 1.7rem;
    fill: #cd122d;
    opacity: 0;
}
.força-barça__labels {
    position: relative;
    text-align: right;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    fill: none;
    d: path("M 0 194.6 h 203.4 v 288.1 H 0 V 194.6 Z");
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.força-barça .max-claps-fire-icon {
    margin-right: .5rem;
    width: 1.5rem;
    height: 1.7rem;
    fill: #cd122d;
    opacity: 0;
}
.força-barça__labels {
    position: relative;
    text-align: right;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.fan-comments .força-barça__counter {
    color: #fff;
    font-size: 3rem;
    line-height: .63;
}
.fan-comments .força-barça__counter, .fan-comments .força-barça__title {
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
.força-barça__counter {
    font-size: 2.4rem;
    line-height: 2.6rem;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.força-barça__labels {
    position: relative;
    text-align: right;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
html {
    font-size: 10px;
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
.força-barça__icon:before {
    content: "";
    position: absolute;
    top: -.6rem;
    left: -.6rem;
    right: -.6rem;
    bottom: -.6rem;
    border-radius: 100%;
    background: #cd122d;
    opacity: .2;
    z-index: -1;
    transition: -webkit-transform .3s;
    transition: transform .3s;
    transition: transform .3s, -webkit-transform .3s;
}
.força-barça__icon:before {
    content: "";
    position: absolute;
    top: -.6rem;
    left: -.6rem;
    right: -.6rem;
    bottom: -.6rem;
    border-radius: 100%;
    background: #cd122d;
    opacity: .2;
    z-index: -1;
    transition: -webkit-transform .3s;
    transition: transform .3s;
    transition: transform .3s, -webkit-transform .3s;
}
.força-barça__icon .confetti-canvas {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    z-index: -1;
    pointer-events: none;
}
audio, canvas, progress, video {
    display: inline-block;
    vertical-align: baseline;
}
* {
    box-sizing: border-box;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.fan-comments {
    position: relative;
    margin: 2rem 0;
    padding: 2.2rem 3.2rem 4.8rem;
    width: 100%;
    background-image: url("71IwqVkzVQL._SL1100_.jpg");
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    text-align: center;
    color: #fff;
    min-height: 42rem;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.visually-hidden, .visually-hidden-nav-item {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    visibility: hidden;
}
.visually-hidden {
    width: 1px;
}
* {
    box-sizing: border-box;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__icon .clap-count-disc {
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    opacity: 1;
    border-radius: 100%;
    background: hsla(0,0%,59%,.7);
    width: 2.5rem;
    height: 2.5rem;
    text-align: center;
    color: #fff;
    padding-top: .2rem;
    z-index: -1;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    font-size: 1.4rem;
    line-height: normal;
}
* {
    box-sizing: border-box;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
html {
    font-size: 10px;
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
.força-barça__icon .clap-count-disc:before {
    content: "+";
}
.força-barça__icon .clap-count-disc:before {
    content: "+";
}
.força-barça__icon .max-clap-total {
    display: none;
    font-size: 2.4rem;
    opacity: 0;
    color: #fff;
    line-height: 2.6rem;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
* {
    box-sizing: border-box;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__icon .hand-icon--top {
    z-index: 10;
}
.força-barça__icon .hand-icon {
    width: 2.5rem;
    height: 2.5rem;
    position: absolute;
    top: 50%;
    left: 50%;
    opacity: 1;
    -webkit-transform: translate(-55%,-50%);
    transform: translate(-55%,-50%);
    transition: -webkit-transform .15s ease;
    transition: transform .15s ease;
    transition: transform .15s ease, -webkit-transform .15s ease;
}
.força-barça__icon .icon {
    width: 3rem;
    height: 3rem;
}
svg:not(:root) {
    overflow: hidden;
}
.icon {
    display: inline-block;
    width: 1.6rem;
    height: 1.6rem;
    vertical-align: middle;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__icon .hand-icon .fill {
    fill: #cd122d;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 111.7 9.1 c 5.2 -6.2 13 -6.9 19.2 -1.7 c 6.2 5.2 7.8 13 2.6 19.2 L 146.6 11 c 5.2 -6.2 14.4 -7 20.6 -1.8 c 6.2 5.2 7 14.4 1.8 20.6 l -12.5 14.9 c 5.2 -6.2 14.6 -6.1 20.8 -0.9 c 6.2 5.2 7.8 15.1 2.6 21.3 l -16.5 19.6 c 5.2 -6.2 13.8 -8.3 20 -3.1 c 6.2 5.2 6.2 13.8 1 20 l -52.8 62.9 c -27.3 32.5 -73.9 38.4 -104 13.1 s -32.4 -72.2 -5.1 -104.7 l 21.4 -25.3 c 5.2 -6.2 10.9 -13.9 17 -8.7 s 10.7 17.5 5.5 23.7 l 45.3 -53.5 Z");
    fill: rgb(255, 255, 255);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__icon .hand-icon .stroke {
    stroke: #fff;
}
* {
    box-sizing: border-box;
}
g[Attributes Style] {
    fill: none;
    stroke: rgb(206, 32, 44);
    stroke-width: 9;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-miterlimit: 10;
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__icon .hand-icon .stroke {
    stroke: #fff;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 80 91.1 l 66.5 -79.3 c 5.2 -6.2 14.4 -7 20.6 -1.8 s 7 14.4 1.8 20.6 l -66.5 79.3 M 156.5 45.5 c 5.2 -6.2 14.6 -6.1 20.8 -0.9 c 6.2 5.2 7.8 15.1 2.6 21.3 l -53.2 63.4");
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__icon .hand-icon .stroke {
    stroke: #fff;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 163.4 85.5 c 5.2 -6.2 13.8 -8.3 20 -3.1 c 6.2 5.2 6.2 13.8 1 20 l -52.8 62.9 c -27.3 32.5 -73.9 38.4 -104 13.1 s -32.4 -72.2 -5.1 -104.7 L 44 48.5 c 5.2 -6.2 10.9 -13.9 17 -8.7 s 10.7 17.5 5.5 23.7 L 40.1 95.1 l 72.2 -86 c 5.2 -6.2 13.7 -7.6 19.9 -2.4 c 6.2 5.2 6.6 14.5 1.4 20.7");
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__icon .hand-icon--bottom {
    position: absolute;
    opacity: .7;
    -webkit-transform: translate(-40%,-40%) skew(
-5deg
) rotate(
10deg
);
    transform: translate(-40%,-40%) skew(
-5deg
) rotate(
10deg
);
}
.força-barça__icon .hand-icon {
    width: 2.5rem;
    height: 2.5rem;
    position: absolute;
    top: 50%;
    left: 50%;
    opacity: 1;
    -webkit-transform: translate(-55%,-50%);
    transform: translate(-55%,-50%);
    transition: -webkit-transform .15s ease;
    transition: transform .15s ease;
    transition: transform .15s ease, -webkit-transform .15s ease;
}
.força-barça__icon .icon {
    width: 3rem;
    height: 3rem;
}
svg:not(:root) {
    overflow: hidden;
}
.icon {
    display: inline-block;
    width: 1.6rem;
    height: 1.6rem;
    vertical-align: middle;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__icon .hand-icon .fill {
    fill: #cd122d;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 111.7 9.1 c 5.2 -6.2 13 -6.9 19.2 -1.7 c 6.2 5.2 7.8 13 2.6 19.2 L 146.6 11 c 5.2 -6.2 14.4 -7 20.6 -1.8 c 6.2 5.2 7 14.4 1.8 20.6 l -12.5 14.9 c 5.2 -6.2 14.6 -6.1 20.8 -0.9 c 6.2 5.2 7.8 15.1 2.6 21.3 l -16.5 19.6 c 5.2 -6.2 13.8 -8.3 20 -3.1 c 6.2 5.2 6.2 13.8 1 20 l -52.8 62.9 c -27.3 32.5 -73.9 38.4 -104 13.1 s -32.4 -72.2 -5.1 -104.7 l 21.4 -25.3 c 5.2 -6.2 10.9 -13.9 17 -8.7 s 10.7 17.5 5.5 23.7 l 45.3 -53.5 Z");
    fill: rgb(255, 255, 255);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__icon .hand-icon .stroke {
    stroke: #fff;
}
* {
    box-sizing: border-box;
}
g[Attributes Style] {
    fill: none;
    stroke: rgb(206, 32, 44);
    stroke-width: 9;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-miterlimit: 10;
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__icon .hand-icon .stroke {
    stroke: #fff;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 80 91.1 l 66.5 -79.3 c 5.2 -6.2 14.4 -7 20.6 -1.8 s 7 14.4 1.8 20.6 l -66.5 79.3 M 156.5 45.5 c 5.2 -6.2 14.6 -6.1 20.8 -0.9 c 6.2 5.2 7.8 15.1 2.6 21.3 l -53.2 63.4");
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.força-barça__icon .hand-icon .stroke {
    stroke: #fff;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 163.4 85.5 c 5.2 -6.2 13.8 -8.3 20 -3.1 c 6.2 5.2 6.2 13.8 1 20 l -52.8 62.9 c -27.3 32.5 -73.9 38.4 -104 13.1 s -32.4 -72.2 -5.1 -104.7 L 44 48.5 c 5.2 -6.2 10.9 -13.9 17 -8.7 s 10.7 17.5 5.5 23.7 L 40.1 95.1 l 72.2 -86 c 5.2 -6.2 13.7 -7.6 19.9 -2.4 c 6.2 5.2 6.6 14.5 1.4 20.7");
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.força-barça__icon {
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 1.6rem;
    width: 5rem;
    height: 5rem;
    border-radius: 100%;
    background: #cd122d;
    border: 2px solid #cd122d;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.força-barça {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
    opacity: 0;
    transition: opacity .3s ease-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
#testimonial-slider{
    padding: 50px 20px 35px 20px;
    background: #fff;
    text-align: center;
     
}
.testimonial .description{
    font-size: 14px;
    color: #777;
    line-height: 26px;
    text-indent: 30px;
    position: relative;
}
.testimonial .description:before{
    content: "\f10d";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    top: 0;
    left: -15px;
}
.testimonial .title{
    font-size: 22px;
    font-weight: bold;
    color: #646262;
    text-transform: capitalize;
    margin: 0;
    letter-spacing: 1px;
}
.testimonial .post{
    display: block;
    font-size: 15px;
    color: #363636;
}
.owl-buttons{
    width: 100%;
    height: 40px;
    position: absolute;
    bottom: 40%;
    left: 0;
}
.owl-prev,
.owl-next{
    position: absolute;
    left: 0;
    transition: all 0.4s ease-in-out 0s;
}
.owl-next{
    left: auto;
    right: 0;
}
.owl-buttons .owl-prev:before,
.owl-buttons .owl-next:before{
    content: "\f104";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 60px;
    font-weight: 900;
    color: #cacaca;
    line-height: 20px;
    opacity: 0.8;
}
.owl-buttons .owl-next:before{
    content: "\f105";
}
.owl-buttons .owl-prev:hover:before,
.owl-buttons .owl-next:hover:before{
    opacity: 1;
}
.owl-theme .owl-controls .owl-buttons div{
    background: transparent;
}
.owl-theme .owl-controls{
    margin-top: 40px;
}
.owl-theme .owl-controls .owl-page span{
    width: 80px;
    height: 80px;
    border-radius: 50%;
    border: 4px solid dodgerblue;
    background: url("img-1.jpg") no-repeat;
    background-size: cover;
    transition: all 0.3s ease-in-out 0s;
}
.owl-theme .owl-controls .owl-page:nth-child(2) span{
    background: url("img-2.jpg") no-repeat;
    background-size: cover;
}
.owl-theme .owl-controls .owl-page:nth-child(3) span{
    background: url("img-3.jpg") no-repeat;
    background-size: cover;
}
.owl-theme .owl-controls.clickable .owl-page:hover span{
    opacity: 0.5;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls .owl-page.active:hover span{
    border-color: dodgerblue;
    opacity: 1;
}
@media only screen and (max-width: 479px){
    .owl-buttons{ bottom: 30%; }
}
        body{
         font-family: 'Roboto Condensed', sans-serif;
        }
.news-latest-features {
    margin: 0;
    padding: 3rem 2.4rem 4.4rem;
    position: relative;
    background-color: #fff;
    border: .1rem solid #efefef;
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
section {
    display: block;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.widget__header {
    text-align: center;
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
header {
    display: block;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.widget__title {
    background: linear-gradient(
90deg
,#cd122d,#154284);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    color: #fff;
}
.widget__title {
    font-size: 3.6rem;
    margin-bottom: 2rem;
    color: #cd122d;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h1, h2, h3, h4, h5, h6, strong {
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
}
h3 {
    font-size: 1.44rem;
}
h1, h2, h3, h4, h5, h6, p {
    margin-top: 0;
    margin-bottom: 0;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
h3 {
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.widget__header {
    text-align: center;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.news-latest-features__list {
    justify-content: center;
    display: flex;
    margin: 0 -.4rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (max-width: 1280px)
.thumbnail:not(.thumbnail--wide).thumbnail--featured-wide {
    height: 100%;
}
@media (max-width: 1280px)
.thumbnail:not(.thumbnail--wide) {
    height: 26.4rem;
}
@media (min-width: 641px)
.thumbnail--featured-wide {
    height: 100%;
    margin-bottom: 0;
    padding-bottom: 0;
}
.thumbnail--featured-wide {
    border: none;
    padding-top: 0;
}
.thumbnail--featured {
    padding-left: 0;
    padding-right: 0;
    overflow: hidden;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
a {
    background-color: transparent;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
figure {
    margin: 0;
}
figure {
    margin: 1em 40px;
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
figure {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 40px;
    margin-inline-end: 40px;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (min-width: 641px)
.thumbnail--featured-wide:before {
    width: 2.2rem;
    height: 20.4rem;
    top: 11rem;
}
.thumbnail--featured:before {
    top: 2.4rem;
    left: 0;
    height: 10.4rem;
    background: #154284;
}
.thumbnail--featured:after, .thumbnail--featured:before {
    position: absolute;
    content: "";
    width: 1.5%;
    min-width: .8rem;
    max-width: 3.6rem;
    z-index: 20;
}
background-attachment scroll
background-clip border-box
background-color rgb(21, 66, 132)
background-image none
background-origin padding-box
background-position-x 0%
background-position-y 0%
background-repeat-x 
background-repeat-y 
background-size auto
content ""
display block
height 204px
left 0px
max-width 36px
min-width 8px
position absolute
top 110px
width 22px
z-index 20
@media (min-width: 641px)
.thumbnail--featured-wide:after {
    width: 2.2rem;
    height: 14.4rem;
    top: 5.5rem;
}
@media (min-width: 641px)
.thumbnail--featured-wide .thumbnail__figure:before {
    background-image: linear-gradient(
180deg
,rgba(24,23,51,0),rgba(24,23,51,.9));
    height: 100%;
}
.thumbnail--featured .thumbnail__figure:before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 50%;
    background: linear-gradient(
0deg
,#181733 40%,rgba(24,23,51,.45) 70%,rgba(24,23,51,0));
    z-index: 10;
}
background-attachment scroll
background-clip border-box
background-color rgba(0, 0, 0, 0)
background-image linear-gradient(rgba(24, 23, 51, 0), rgba(24, 23, 51, 0.9))
background-origin padding-box
background-position-x 0%
background-position-y 0%
background-repeat-x 
background-repeat-y 
background-size auto
bottom 0px
content ""
display block
height 320.938px
left 0px
position absolute
right 0px
width 320.938px
z-index 10
.thumbnail__picture-wrapper {
    position: relative;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.thumbnail__picture {
    transition: max-height .2s ease-in;
    background-color: #efefef;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
svg:not(:root) {
    overflow: hidden;
}
.thumbnail__default {
    width: 20%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    fill-opacity: .3;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
*{
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 173.29 341.43 s -12.065 -8.947 -22.964 -19.124 c -71.282 -2.954 -130.27 -42.933 -125.76 -127.61 c 0.266 -2.234 0.043 -2.085 0.429 -5.894 c -4.088 -4.326 -10.853 -11.383 -14.422 -14.948 c 25.568 -26.533 55.405 -87.228 13.991 -142.26 c 2.726 -4.379 4.695 -5.83 8.748 -11.596 c 8.279 2.859 17.482 4.674 26.732 4.674 c 23.748 0 39.963 -2.357 59.9 -15.558 c 15.759 10.941 32.854 17.787 53.319 17.787 c 20.466 0 37.554 -6.846 53.314 -17.787 c 19.937 13.2 36.152 15.558 59.903 15.558 c 9.247 0 18.45 -1.815 26.729 -4.674 c 4.052 5.765 6.022 7.216 8.748 11.596 c -41.411 55.038 -11.579 115.73 13.994 142.26 c -3.575 3.565 -10.337 10.622 -14.422 14.948 c 0.388 3.81 0.16 3.661 0.426 5.894 c 4.508 84.674 -54.483 124.65 -125.76 127.61 c -10.898 10.177 -22.898 19.124 -22.898 19.124 Z");
    fill: rgb(235, 189, 0);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.thumbnail__default {
    width: 20%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    fill-opacity: .3;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 346.52 173.96 l -5.143 -5.338 c -21.969 -22.79 -53.04 -79.814 -13.397 -132.5 l 3.106 -4.131 l -2.731 -4.387 c -1.706 -2.742 -3.157 -4.508 -4.695 -6.378 c -1.25 -1.52 -2.544 -3.092 -4.286 -5.569 l -3.263 -4.645 l -5.368 1.853 c -8.07 2.787 -16.462 4.261 -24.266 4.261 c -22.641 0 -37.476 -2.212 -55.739 -14.304 l -4.265 -2.824 l -4.199 2.916 c -16.158 11.216 -31.733 16.44 -49.015 16.44 c -17.287 0 -32.862 -5.224 -49.02 -16.44 L 120.04 -0.002 l -4.264 2.822 C 97.513 14.913 82.678 17.125 60.04 17.125 c -7.806 0 -16.199 -1.474 -24.269 -4.261 l -5.368 -1.853 l -3.263 4.645 c -1.742 2.476 -3.035 4.048 -4.286 5.569 c -1.538 1.87 -2.989 3.636 -4.695 6.378 l -2.731 4.387 l 3.108 4.131 c 39.638 52.678 8.569 109.7 -13.397 132.5 l -5.14 5.333 l 5.24 5.235 c 2.96 2.955 8.138 8.341 11.976 12.373 l -0.024 0.669 c -0.016 0.46 -0.027 0.834 -0.117 1.575 l -0.041 0.489 c -2.023 37.989 7.877 69.264 29.428 92.955 c 22.845 25.115 58.547 40.136 100.77 42.456 c 10.467 9.526 21.095 17.428 21.57 17.78 l 4.503 3.34 l 4.497 -3.351 c 0.472 -0.353 11.035 -8.25 21.486 -17.771 c 42.217 -2.319 77.924 -17.342 100.77 -42.456 c 21.551 -23.691 31.451 -54.965 29.428 -92.953 l -0.041 -0.489 c -0.087 -0.731 -0.098 -1.101 -0.114 -1.554 c -0.008 -0.213 -0.013 -0.438 -0.024 -0.69 c 4.134 -4.348 9.144 -9.547 11.97 -12.368 l 5.248 -5.236 Z m -24.996 14.844 c 0.388 3.81 0.16 3.661 0.426 5.894 c 4.508 84.674 -54.483 124.65 -125.76 127.61 c -10.896 10.177 -22.896 19.124 -22.896 19.124 s -12.065 -8.947 -22.964 -19.124 c -71.282 -2.954 -130.27 -42.933 -125.76 -127.61 c 0.266 -2.234 0.043 -2.085 0.429 -5.894 c -4.088 -4.326 -10.853 -11.383 -14.422 -14.948 c 25.568 -26.533 55.405 -87.228 13.991 -142.26 c 2.726 -4.379 4.695 -5.83 8.748 -11.596 c 8.279 2.859 17.482 4.674 26.732 4.674 c 23.748 0 39.963 -2.357 59.9 -15.558 c 15.759 10.941 32.854 17.787 53.319 17.787 c 20.466 0 37.554 -6.846 53.314 -17.787 c 19.937 13.2 36.152 15.558 59.903 15.558 c 9.247 0 18.45 -1.815 26.729 -4.674 c 4.052 5.765 6.022 7.216 8.748 11.596 c -41.411 55.038 -11.579 115.73 13.994 142.26 c -3.577 3.565 -10.339 10.621 -14.424 14.948 Z");
    fill: rgb(29, 29, 27);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.thumbnail__default {
    width: 20%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    fill-opacity: .3;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 38.089 190.78 h 270.34 c 0.193 2.422 0.369 2.563 0.619 4.975 c 3.982 78.081 -49.237 110.96 -118.19 113.82 c -10.267 0.137 -22.126 0.071 -35.2 0 c -68.949 -2.856 -122.17 -35.74 -118.19 -113.82 c 0.249 -2.411 0.423 -2.552 0.618 -4.975 Z");
    fill: none;
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.thumbnail__default {
    width: 20%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    fill-opacity: .3;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 47.073 141.42 c 12.987 -29.771 17.815 -68.005 -4.014 -105.38 c 5.452 0.963 11.181 1.565 16.983 1.565 c 22.348 0 39.944 -2.032 59.705 -13.202 c 15.581 9.427 33.036 15.418 53.474 15.431 c 20.517 -0.013 37.969 -6.005 53.55 -15.431 c 19.763 11.17 37.356 13.202 59.707 13.202 c 5.799 0 11.528 -0.602 17.037 -1.659 c -21.887 37.458 -17.056 75.698 -4.071 105.47 H 47.074 v 0.001 Z");
    fill: rgb(255, 255, 255);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.thumbnail__default {
    width: 20%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    fill-opacity: .3;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 198.46 141.42 h 13.489 V 31.95 a 100.57 100.57 0 0 1 -13.489 4.598 v 104.87 Z M 301.83 36.24 c -4.991 0.865 -10.137 1.372 -15.347 1.372 c -2.414 0 -4.763 -0.03 -7.077 -0.087 v 103.9 h 20.043 c -12.624 -28.942 -17.466 -65.888 2.382 -102.34 v -2.844 Z m -49.405 105.18 h 13.492 V 36.71 c -4.601 -0.477 -9.073 -1.184 -13.492 -2.211 v 106.92 Z m -79.883 -101.6 v 101.61 h 12.429 V 39.1 c -3.814 0.447 -7.703 0.745 -11.745 0.747 c -0.234 0 -0.453 -0.023 -0.684 -0.025 Z m 52.902 -14.649 v 116.26 h 13.492 V 30.271 a 100.267 100.267 0 0 1 -12.16 -5.847 c -0.437 0.264 -0.893 0.498 -1.332 0.757 Z");
    fill: rgb(255, 220, 0);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.thumbnail__default {
    width: 20%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    fill-opacity: .3;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 225.44 25.164 a 113.661 113.661 0 0 1 -13.492 6.783 v 109.47 h 13.492 V 25.157 Z M 184.96 141.42 h 13.492 V 36.55 a 97.434 97.434 0 0 1 -13.492 2.547 v 102.33 Z m 53.97 0 h 13.489 V 34.5 a 92.24 92.24 0 0 1 -13.489 -4.242 v 111.16 Z M 279.4 37.522 c -4.663 -0.114 -9.138 -0.362 -13.492 -0.815 v 104.71 H 279.4 v -103.9 Z M 95.214 106.97 v 34.445 h 37.557 V 106.97 h 40.015 V 69.41 h -40.015 V 31.194 a 115.964 115.964 0 0 1 -13.026 -6.791 c -8.39 4.743 -16.391 7.827 -24.532 9.818 V 69.41 h -39.3 c 2.639 12.885 2.731 25.53 1.034 37.56 h 38.267 Z");
    fill: rgb(220, 5, 43);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.thumbnail__default {
    width: 20%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    fill-opacity: .3;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 301.13 142.52 H 45.39 l 0.673 -1.545 c 11.121 -25.49 19.462 -64.292 -3.955 -104.38 l -1.202 -2.057 l 2.346 0.415 c 5.815 1.027 11.466 1.547 16.79 1.547 c 22.839 0 39.841 -2.136 59.162 -13.058 l 0.562 -0.317 l 0.553 0.334 c 16.961 10.264 34.267 15.259 52.902 15.271 c 18.684 -0.012 36.014 -5.007 52.978 -15.271 l 0.554 -0.334 l 0.561 0.317 C 246.638 34.364 263.642 36.5 286.479 36.5 c 5.495 0 11.159 -0.551 16.828 -1.638 l 2.387 -0.457 l -1.226 2.097 c -23.463 40.156 -15.133 78.975 -4.012 104.47 l 0.673 1.544 Z m -127.24 -2.208 h 123.88 c -10.793 -25.527 -18.402 -63.448 3.616 -102.86 c -5.024 0.836 -10.028 1.26 -14.908 1.26 c -22.986 0 -40.175 -2.144 -59.688 -13.03 c -16.942 10.134 -34.264 15.129 -52.904 15.256 v 99.376 Z m -125.14 0 h 122.93 V 40.928 c -18.26 -0.278 -35.276 -5.273 -51.95 -15.247 c -19.511 10.887 -36.7 13.03 -59.686 13.03 c -4.747 0 -9.738 -0.404 -14.873 -1.2 c 21.997 39.359 14.378 77.273 3.579 102.8 Z m 66.87 43.468 h 7.682 v -14.471 h 10.351 v -7.482 h -10.351 v -5.665 h 17.707 v -7.531 H 115.62 v 35.149 Z m 55.009 -28.059 c 2.753 0 4.69 1.149 5.921 3.51 l 0.179 0.343 l 7.101 -3.278 l -0.179 -0.371 c -2.479 -5.125 -6.95 -7.834 -12.925 -7.834 c -9.22 0 -15.662 7.449 -15.662 18.114 c 0 11.006 6.052 18.117 15.418 18.117 c 6.106 0 10.503 -2.685 13.071 -7.981 l 0.163 -0.335 l -6.458 -3.83 l -0.206 0.347 c -1.817 3.04 -3.545 4.169 -6.374 4.169 c -4.627 0 -7.736 -4.214 -7.736 -10.487 c 0 -6.467 2.946 -10.484 7.687 -10.484 Z m 55.606 9.008 c 2.059 -1.518 3.228 -3.89 3.228 -6.617 c 0 -5.938 -4.223 -9.482 -11.297 -9.482 h -16.153 v 35.15 h 16.006 c 7.901 0 12.621 -4.295 12.621 -11.491 c 0.001 -3.327 -1.594 -6.045 -4.405 -7.56 Z m -16.687 -8.959 h 8.322 c 3.361 0 3.814 1.457 3.814 2.881 c 0 1.933 -1.101 2.833 -3.467 2.833 h -8.669 v -5.714 Z m 8.716 20.676 h -8.715 v -8.068 h 8.715 c 3.071 0 4.5 1.273 4.5 4.009 c -0.001 2.655 -1.555 4.059 -4.5 4.059 Z");
    fill: rgb(29, 29, 27);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.thumbnail__default {
    width: 20%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    fill-opacity: .3;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 309.04 195.75 c -0.25 -2.411 -0.426 -2.552 -0.619 -4.975 h -36.033 v 93.986 c 24.424 -18.211 38.789 -47.088 36.652 -89.011 Z m -271.58 0 c -2.178 42.761 12.822 71.941 38.143 90.082 v -95.057 H 38.079 c -0.195 2.423 -0.369 2.564 -0.619 4.975 Z m 156.21 113.66 c 13.907 -0.749 27.149 -2.726 39.367 -6.092 v -112.55 H 193.67 v 118.64 Z m -78.711 -5.708 c 12.242 3.241 25.473 5.135 39.364 5.791 v -118.72 h -39.364 v 112.93 Z");
    fill: rgb(0, 74, 153);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.thumbnail__default {
    width: 20%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    fill-opacity: .3;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 176.92 310.76 c -6.497 0 -13.446 -0.037 -20.778 -0.076 l -0.494 -0.003 c -41.949 -1.737 -74.83 -14.421 -95.122 -36.679 c -17.694 -19.406 -25.823 -45.75 -24.163 -78.3 c 0.119 -1.18 0.22 -1.823 0.312 -2.422 a 29.97 29.97 0 0 0 0.309 -2.585 l 0.081 -1.016 h 272.38 l 0.081 1.017 c 0.1 1.283 0.198 1.905 0.304 2.589 c 0.095 0.598 0.195 1.24 0.312 2.358 c 1.663 32.608 -6.466 58.952 -24.158 78.357 c -20.292 22.26 -53.17 34.943 -95.081 36.679 c -4.4 0.059 -9.06 0.081 -13.978 0.081 Z M 39.09 191.89 a 30.084 30.084 0 0 1 -0.233 1.733 c -0.087 0.571 -0.184 1.183 -0.293 2.252 c -1.625 31.883 6.312 57.688 23.593 76.643 c 19.888 21.815 52.235 34.249 93.543 35.961 l 0.453 0.001 c 12.868 0.071 24.551 0.129 34.687 -0.001 c 41.276 -1.712 73.623 -14.146 93.51 -35.961 c 17.281 -18.955 25.215 -44.76 23.588 -76.701 c -0.106 -1.008 -0.203 -1.618 -0.29 -2.188 c -0.081 -0.519 -0.157 -1.005 -0.236 -1.739 H 39.092 Z");
    fill: rgb(29, 29, 27);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.thumbnail__default {
    width: 20%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    fill-opacity: .3;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 136.34 248.71 c 0 -20.418 16.552 -36.97 36.966 -36.97 c 20.42 0 36.971 16.552 36.971 36.97 s -16.551 36.97 -36.971 36.97 c -20.414 0 -36.966 -16.552 -36.966 -36.97 Z");
    fill: rgb(235, 189, 0);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.thumbnail__default {
    width: 20%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    fill-opacity: .3;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 173.11 210.83 c 20.843 0 37.736 16.895 37.736 37.737 c 0 20.841 -16.893 37.736 -37.736 37.736 c -20.84 0 -37.734 -16.895 -37.734 -37.736 c 0 -20.842 16.894 -37.737 37.734 -37.737 Z m -19.256 44.584 c -6.83 -6.218 -6.852 -18.855 -5.018 -27.25 c 0.51 -2.335 1.156 -4.625 1.815 -7.241 c -8.026 6.53 -13.153 16.488 -13.153 27.644 c 0 4.722 0.917 9.229 2.588 13.352 c 0.602 0.081 1.22 0.124 1.847 0.124 c 5.272 0 9.583 -2.437 11.921 -6.629 Z m 36.662 2.726 c -1.166 5.97 -7.551 10.443 -13.562 14.03 c -6.201 3.697 -16.194 5.608 -23.718 5.955 a 35.437 35.437 0 0 0 19.874 6.059 c 13.432 0 25.126 -7.435 31.194 -18.412 c -1.066 -8.791 -9.421 -9.819 -13.788 -7.632 Z m -40.042 17.924 c 7.427 0.058 18.846 -1.812 25.394 -5.715 c 8.457 -5.045 15.03 -10.432 11.908 -17.902 c -1.579 -3.772 -6.825 -8.139 -13.628 -3.326 c -0.434 5.577 -7.316 10.495 -12.255 9.861 c -2.503 -0.321 -4.603 -1.112 -6.347 -2.255 c -2.778 4.743 -7.747 7.436 -13.614 7.436 c -0.287 0 -0.575 -0.008 -0.86 -0.023 a 35.714 35.714 0 0 0 9.402 11.924 Z m 22.546 -49.693 c 5.889 -2.441 14.053 0.732 20.273 4.207 c 5.875 3.281 12.008 9.405 15.369 15.834 c -1.109 -18.565 -16.438 -33.302 -35.243 -33.461 c -5.62 3.689 -4.852 10.649 -0.399 13.42 Z m -0.998 22.726 c -7.291 -5.319 -6.844 -13.693 -3.705 -18.662 c 0.768 -1.219 1.665 -2.178 2.664 -2.913 c -4.242 -3.384 -5.091 -9.951 -0.982 -14.437 a 35.402 35.402 0 0 0 -16.687 5.871 c -1.554 6.688 -3.534 12.799 -3.434 19.782 c 0.133 9.419 4.031 17.081 12.288 18.138 c 3.851 0.496 9.411 -3.607 9.856 -7.779 Z m 36.556 2.746 c -2.034 -7.367 -9.339 -15.514 -16.316 -19.413 c -8.604 -4.805 -18.016 -7.42 -22.155 -0.863 c -2.658 4.211 -3.027 11.165 3 15.696 c 8.192 -5.658 14.734 -0.156 16.622 4.367 c 0.608 1.45 0.914 2.828 0.968 4.139 c 4.836 -1.701 12.692 -0.605 15.111 6.938 a 35.354 35.354 0 0 0 2.77 -10.864 Z");
    fill: rgb(29, 29, 27);
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.thumbnail__default {
    width: 20%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    fill-opacity: .3;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (min-width: 641px)
.thumbnail--featured-wide .thumbnail__picture-element {
    padding-top: 0;
}
.thumbnail--featured .thumbnail__picture-element {
    padding-top: 100%;
}
.thumbnail__picture-element.loaded {
    opacity: 1;
}
.thumbnail__picture-element.lazy-load {
    opacity: 0;
}
.thumbnail__picture-element {
    width: 100%;
    position: relative;
    display: block;
    padding-top: 56.25%;
    transition: opacity .3s ease-out,padding-top .3s ease-out;
    overflow: hidden;
}
* {
    box-sizing: border-box;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (min-width: 641px)
.thumbnail--featured-wide .thumbnail__image {
    position: relative;
}
.thumbnail__image {
    position: absolute;
    top: 0;
    display: block;
    width: 100%;
    -webkit-transform: translateZ(0) translateY(0);
    transform: translateZ(0) translateY(0);
    transition: -webkit-transform .3s ease-out;
    transition: transform .3s ease-out;
    transition: transform .3s ease-out, -webkit-transform .3s ease-out;
}
img {
    border: 0;
}
* {
    box-sizing: border-box;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (min-width: 641px)
.thumbnail--featured-wide .thumbnail__caption {
    width: 100%;
    padding: 0 3.6rem;
}
.thumbnail--featured .thumbnail__caption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 0;
    z-index: 20;
}
.thumbnail__caption {
    padding: 0 .8rem;
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
figcaption {
    display: block;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.thumbnail--featured .thumbnail__text {
    padding: 0 .8rem;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (min-width: 980px)
.news-latest-features--3-items .thumbnail__title {
    font-size: 2rem;
}
@media (min-width: 641px)
.thumbnail--featured-wide .thumbnail__title {
    max-height: none;
    line-height: 1.2;
    font-size: 3rem;
}
.thumbnail--featured .thumbnail__title {
    margin: 0;
    color: #fdc52c;
}
.thumbnail--news .thumbnail__title {
    margin: 1.3rem 0 1.8rem;
}
.thumbnail__title {
    white-space: normal;
    font-size: 1.8rem;
    line-height: 2.3rem;
    color: #222;
    text-align: center;
    margin: 3.2rem 0 1.8rem;
    font-family: fcb-extra-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    max-height: 4.8rem;
    overflow: hidden;
    transition: margin .3s ease-out;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (min-width: 641px)
.thumbnail--featured-wide .thumbnail__desc {
    margin-bottom: 1rem;
}
.thumbnail--featured .thumbnail__desc {
    color: #fff;
    height: 0;
    transition: opacity .25s ease,height .25s ease;
}
.thumbnail__desc {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
.thumbnail__desc {
    max-height: 3.6rem;
    overflow: hidden;
    margin-bottom: 1.8rem;
    color: #727272;
    font-size: 1.2rem;
    line-height: 1.8rem;
    text-align: center;
    opacity: 0;
    height: 4rem;
    max-height: none;
    transition: height .25s ease,opacity .25s ease;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (min-width: 641px)
.thumbnail--featured-wide .thumbnail__meta {
    text-align: center;
    display: block;
    margin-bottom: 1.6rem;
}
.thumbnail--featured .thumbnail__meta {
    position: static;
    width: 100%;
    padding-right: .8rem;
}
.thumbnail--news .thumbnail__meta {
    left: 0;
    right: 1.5rem;
    width: auto;
}
.thumbnail__meta {
    position: absolute;
    display: flex;
    align-items: center;
    font-size: 1.2rem;
    bottom: 0;
    margin-bottom: 1.6rem;
    width: calc(100% - 3.2rem);
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (min-width: 641px)
.thumbnail--featured-wide .content-tag {
    display: inline-block;
    flex: 0;
}
.thumbnail--featured-wide .content-tag {
    color: #fdc52c;
}
.content-tag--left {
    flex: 1;
    text-align: left;
}
.content-tag {
    color: #cd122d;
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    text-transform: uppercase;
    text-align: right;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
@media (min-width: 641px)
.thumbnail--featured-wide .thumbnail__meta {
    text-align: center;
    display: block;
    margin-bottom: 1.6rem;
}
.thumbnail__meta {
    position: absolute;
    display: flex;
    align-items: center;
    font-size: 1.2rem;
    bottom: 0;
    margin-bottom: 1.6rem;
    width: calc(100% - 3.2rem);
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
html {
    font-size: 10px;
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
@media (min-width: 641px)
.thumbnail--featured-wide .content-tag:before {
    margin-right: .5rem;
}
.thumbnail--featured-wide .content-tag:before {
    background-color: #fdc52c;
}
.content-tag--left:before {
    content: "";
    display: inline-block;
    margin-right: .8rem;
    width: .8rem;
    height: .8rem;
    background-color: #cd122d;
}
.thumbnail--featured-wide .content-tag:before {
    background-color: #fdc52c;
}
.content-tag--left:before {
    content: "";
    display: inline-block;
    margin-right: .8rem;
    width: .8rem;
    height: .8rem;
    background-color: #cd122d;
}
.content-tag span {
    vertical-align: middle;
}
* {
    box-sizing: border-box;
}
.thumbnail--featured-wide .content-tag {
    color: #fdc52c;
}
.content-tag--left {
    flex: 1;
    text-align: left;
}
.content-tag {
    color: #cd122d;
    font-family: fcb-bold,Arial,Helvetica Neue,Helvetica,sans-serif;
    font-weight: 400;
    text-transform: uppercase;
    text-align: right;
}
@media (min-width: 641px)
.thumbnail--featured-wide .thumbnail__meta {
    text-align: center;
    display: block;
    margin-bottom: 1.6rem;
}
.thumbnail__meta {
    position: absolute;
    display: flex;
    align-items: center;
    font-size: 1.2rem;
    bottom: 0;
    margin-bottom: 1.6rem;
    width: calc(100% - 3.2rem);
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (min-width: 641px)
.thumbnail--featured-wide .thumbnail__time {
    flex: none;
    display: inline-block;
}
.thumbnail--featured .thumbnail__time {
    color: #fff;
}
.thumbnail--news .thumbnail__time {
    margin-left: .5rem;
}
.thumbnail__time {
    color: #727272;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}
* {
    box-sizing: border-box;
}
@media (min-width: 641px)
.thumbnail--featured-wide .thumbnail__meta {
    text-align: center;
    display: block;
    margin-bottom: 1.6rem;
}
.thumbnail__meta {
    position: absolute;
    display: flex;
    align-items: center;
    font-size: 1.2rem;
    bottom: 0;
    margin-bottom: 1.6rem;
    width: calc(100% - 3.2rem);
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
.thumbnail--featured .thumbnail__time .icon {
    fill: #fff;
}
@media (min-width: 641px)
.thumbnail--featured-wide .thumbnail__time-icon {
    margin-right: .2rem;
    vertical-align: baseline;
}
.thumbnail__time .icon {
    width: .8rem;
    height: .8rem;
    margin-right: .5rem;
}
svg:not(:root) {
    overflow: hidden;
}
.icon {
    display: inline-block;
    width: 1.6rem;
    height: 1.6rem;
    vertical-align: middle;
}
* {
    box-sizing: border-box;
}
user agent stylesheet
svg:not(:root) {
    overflow: hidden;
}
.thumbnail--featured .thumbnail__time {
    color: #fff;
}
.thumbnail__time {
    color: #727272;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}
@media (min-width: 641px)
.thumbnail--featured-wide .thumbnail__meta {
    text-align: center;
    display: block;
    margin-bottom: 1.6rem;
}
.thumbnail__meta {
    position: absolute;
    display: flex;
    align-items: center;
    font-size: 1.2rem;
    bottom: 0;
    margin-bottom: 1.6rem;
    width: calc(100% - 3.2rem);
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
* {
    box-sizing: border-box;
}
path[Attributes Style] {
    d: path("M 44 12.74 a 3.47 3.47 0 0 0 -3.47 3.47 V 44 a 3.48 3.48 0 0 0 1.73 3 l 22.07 12.74 a 3.47 3.47 0 1 0 3.48 -6 L 47.47 42 V 16.21 A 3.47 3.47 0 0 0 44 12.74 Z M 44 7 A 37.05 37.05 0 1 1 7 44 A 37 37 0 0 1 44 7 Z m 0 -7 a 44 44 0 1 0 44 44 A 44.05 44.05 0 0 0 44 0 Z");
    fill-rule: evenodd;
}
user agent stylesheet
:not(svg) {
    transform-origin: 0px 0px;
}
.thumbnail--featured .thumbnail__time .icon {
    fill: #fff;
}
.thumbnail--featured .thumbnail__time {
    color: #fff;
}
.thumbnail__time {
    color: #727272;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}
@media (min-width: 641px)
.thumbnail--featured-wide .thumbnail__meta {
    text-align: center;
    display: block;
    margin-bottom: 1.6rem;
}
.thumbnail__meta {
    position: absolute;
    display: flex;
    align-items: center;
    font-size: 1.2rem;
    bottom: 0;
    margin-bottom: 1.6rem;
    width: calc(100% - 3.2rem);
}
.thumbnail {
    width: 100%;
    height: 30.2rem;
    position: relative;
    display: block;
    margin: 0 .4rem .8rem;
    border: .1rem solid #efefef;
    white-space: normal;
    text-decoration: none;
    transition: box-shadow .25s ease;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
}
body, h1 {
    font-weight: 400;
}
body {
    font-family: fcb-regular,Arial,Helvetica Neue,Helvetica,sans-serif;
}
body {
    direction: ltr;
    min-height: 100vh;
    background: #181733;
    color: #222;
    font-size: 1.4rem;
    overflow-y: auto;
    transition: background .4s ease-in;
    -moz-osx-font-smoothing: auto;
    -webkit-font-smoothing: antialiased;
}
@media (min-width: 641px)
.thumbnail--featured-wide:after {
    width: 2.2rem;
    height: 14.4rem;
    top: 5.5rem;
}
.thumbnail--featured:after {
    top: 4rem;
    right: 0;
    height: 7.2rem;
    background: #cd122d;
}
.thumbnail--featured:after, .thumbnail--featured:before {
    position: absolute;
    content: "";
    width: 1.5%;
    min-width: .8rem;
    max-width: 3.6rem;
    z-index: 20;
}
.page-wrapper a:hover{
	color: #006669;
}
/* POST SLIDER */
.post-slider {
	position: relative;
}
.post-slider .post-wrapper{
	width: 84%;
	height: 350px;
	margin: 0px auto;
	overflow: hidden;
	padding: 10px 0px 10px 0px;
}

.post-slider .post-wrapper .post{
	width: 300px;
	height: 330px;
	margin: 0px 10px;
	display: inline-block;
	background: #white;
	border-radius: 5px;
	box-shadow: 1rem 1rem 1rem -1rem #a0a0a033;
}
.post-slider .slider-tittle {
	text-align: center;
	margin: 30px auto;
}
.post-slider .next{
	position: absolute;
	top: 50%;
	right: 30px;
	font-size: 2em;
	color: #006669;
	cursor: pointer;
}
.post-slider .prev{
	position: absolute;
	top: 50%;
	left: 30px;
	font-size: 2em;
	color: #006669;
	cursor: pointer;
}
.post-slider .post-wrapper .post .post-info{
	height: 130px;
	padding: 0px 5px;
}	

a{
	text-decoration: none;
	color: inherit;
}
.post-slider .post-wrapper .post .slider-image{
	width: 100%;
	height: 200px;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
}
//footer for the website
.footer {
    font-size: 0.85rem;
    padding: 20px 0;
    line-height: 1.6;
}

.footer__text,
.footer__link,
.footer__title {
    color: #aaaaaa;
    padding: 3px 15px;
    display: block;
}

.footer__hr {
    height: 1px;
    border: none;
    background: #444444;
}

.footer__sections {
    display: flex;
    flex-wrap: wrap;
    padding: 0;
}

.footer__section {
    box-sizing: border-box;
    width: 25%;
    padding: 15px 0;
    flex-shrink: 0;
}

.footer__title {
    font-weight: bold;
    margin-bottom: 10px;
}

.footer__link {
    text-decoration: none;
}

.footer__link:hover {
    color: #cccccc;
    background: rgba(255, 255, 255, 0.15);
}

@media screen and (max-width: 768px) {
    .footer__section { width: 50%; }
}

@media screen and (max-width: 480px) {
    .footer__section { width: 100%; }
}
</style>
</head>
<body style="background-color: navy;">
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

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="antoine-griezmann-barcelona-2019-b.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div> 

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="efsisfhids.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="jdzkchdksafo.jpeg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<div class="marketing-partners">
    <h4 class="marketing-partners__title">    Main Partners
</h4>
        <a class="marketing-partners__logo-link" href="https://www.nike.com/gb/en_gb/c/fcbarcelona">
            <svg class="marketing-partners__logo marketing-partners__logo--nike" viewBox="0 0 200 71.98">
                
            <path fill="#fff" d="M0 51.6c0 5.32 1.65 10 5.74 13.51A27.82 27.82 0 0024.52 72c9.41 0 18.76-3.78 26.08-6.71C62.92 60.34 199.16 1.18 199.16 1.18c1.31-.66 1.06-1.48-.58-1.07L50.27 40.29a32.78 32.78 0 01-8.6 1.23c-11.34.07-21.44-6.23-21.36-19.52 0-5.19 1.63-11.45 5.31-18.82C12.61 18.48.13 37.43 0 51.6z"></path></svg>
        </a>
        <a class="marketing-partners__logo-link" href="https://global.rakuten.com/corp/about/">
            <svg class="marketing-partners__logo marketing-partners__logo--rakuten" viewBox="0 0 322 95.8">
                
            <path d="M79.9 95.8l179.3-15.5H64.4l15.5 15.5zm2.5-27.7v2.3h12V17.5h-12v2.3c-3.6-2.3-6.9-3.6-11.3-3.6-13.6 0-24 12.4-24 27.7 0 15.3 10.4 27.7 24 27.7 4.5.1 7.7-1.2 11.3-3.5zM59.5 44c0-8.4 4.9-15 11.7-15 6.7 0 11.5 6.6 11.5 15S78 59 71.2 59s-11.7-6.7-11.7-15zm108.9 27.7c5.9 0 10.2-3.3 10.2-3.3v2h12V17.5h-12v31.1c0 5.8-4 10.7-9.8 10.7-5.8 0-9.8-4.9-9.8-10.7V17.5h-12v31.1c-.1 12.7 8.6 23.1 21.4 23.1zm132.1-55.5c-5.9 0-10.2 3.3-10.2 3.3v-2h-12v52.9h12V39.3c0-5.8 4-10.7 9.8-10.7 5.8 0 9.8 4.9 9.8 10.7v31.1h12V39.3c.1-12.7-8.6-23.1-21.4-23.1zm-257 10.9c0-12.6-10.2-22.8-22.8-22.8H0v66h12.5V49.9h8.9l15.4 20.5h15.7L33.9 45.7c5.8-4.2 9.6-10.9 9.6-18.6zM20.7 37.4h-8.2V16.9h8.2c5.6 0 10.2 4.6 10.2 10.2.1 5.7-4.5 10.3-10.2 10.3zm180.5 15.5c0 11.8 8.9 18.9 17.8 18.9 3.3 0 8-1.1 11.7-3.3L222.8 58c-1.1.7-2.4 1.3-4 1.3-2 0-5.7-1.5-5.7-6.5V30.1h10.3V17.5h-10.3V4.4h-12v13.2h-6.3v12.5h6.3v22.8zm-87.6-4.2l17.7 21.7h16.8l-23.9-28.1 20.6-24.8H128L113.6 36V0h-12.4v70.4h12.4V48.7zm137-32.5c-13.9 0-23.8 12.2-23.8 27.8 0 16.4 12.5 27.8 25 27.8 6.3 0 14.4-2.2 21.2-11.8l-10.6-6.1c-8.2 12.1-21.9 6-23.4-6.1h34.6c2.9-19.1-9.4-31.6-23-31.6zm-11.1 20.9c2.5-12.4 19.3-13.1 21.6 0h-21.6z" fill="#fff"></path></svg>
        </a>
        <a class="marketing-partners__logo-link" href="http://www.beko.com/en/">
            <svg class="marketing-partners__logo marketing-partners__logo--beko" viewBox="0 0 256.4 128.3">
                
            <path xmlns="http://www.w3.org/2000/svg" d="M43.9 45.6c0-8.9-4.8-17.2-12.7-17.2-7.5 0-12.7 7.7-12.7 17.2 0 8.9 4.7 16.3 12.7 16.3 7.9 0 12.7-7.4 12.7-16.3m18.5 0c0 17.7-13.9 28.7-31.3 28.7C13.8 74.3 0 63.3 0 45.6V0h18.5v18.9c3.6-1.8 8-2.8 12.6-2.8 19.3 0 31.3 11.7 31.3 29.5m175.5 0c0-8.9-4.8-17.2-12.7-17.2-8 0-12.7 8.3-12.7 17.2 0 8.9 4.7 16.3 12.7 16.3 7.9 0 12.7-7.4 12.7-16.3m-12.8 28.7c-17.3 0-31.2-11-31.2-28.7 0-17.8 11.9-29.5 31.2-29.5 19.2 0 31.3 11.8 31.3 29.5s-13.9 28.7-31.3 28.7M108.4 38.9c0-4.2-3.9-10.5-10.7-10.5-6.8 0-11.7 5.5-11.7 10.5h22.4zm17.6 5c0 3-.4 5.6-.6 6.8H86.2c.6 7.2 7.4 10.6 16.9 10.6 6.2 0 12.1-.9 17-2.4l2.4 11.7c-6 2.3-13.5 3.6-22 3.6-21.6 0-32.9-13.5-32.9-28.4s9.8-29.7 30.8-29.7c19.3 0 27.6 14 27.6 27.8m70.3-26.6h-24.5l-20.4 23.6V0h-18.5v73.1h18.5V46.7L174.3 73h24.5L171 43.9l25.3-26.6zM250 80v17.5L0 128.3v-17.5L250 80z" fill="#fff"></path></svg>
        </a>
</div>
<div class="u-main-background">
    <div class="wrapper">
        <div class="col-12">
            



    <section class="teams-playlist">

        <header class="widget__header">
            <h3 class="widget__title">Only For Culers</h3>
        </header>
        <ul class="teams-playlist__container">
                    <li class="teams-playlist__card teams-playlist__card--7">
                        <a class="teams-playlist__link" href="">
                            <picture class="teams-playlist__photo-container js-lazy-picture lazy-load loaded">
                                <img class="teams-playlist__photo" alt="Best Match Ever" data-image-src="https://www.fcbarcelona.com/photo-resources/2020/11/10/9d75e548-552e-43f6-addf-b44e9aca2216/best_match_ever02.jpg?width=400&amp;height=239" src="https://www.fcbarcelona.com/photo-resources/2020/11/10/9d75e548-552e-43f6-addf-b44e9aca2216/best_match_ever02.jpg?width=400&amp;height=239">
                            </picture>
                        </a>
                    </li>
                    <li class="teams-playlist__card teams-playlist__card--7">
                        <a class="teams-playlist__link" href="Barca tv.php">
                            <picture class="teams-playlist__photo-container js-lazy-picture lazy-load loaded">
                                <img class="teams-playlist__photo" alt="Live TV" data-image-src="https://www.fcbarcelona.com/photo-resources/2020/10/01/128b6fa9-4a64-44c5-80ee-9c4712989a7a/eng_live_tv.jpg?width=400&amp;height=239" src="https://www.fcbarcelona.com/photo-resources/2020/10/01/128b6fa9-4a64-44c5-80ee-9c4712989a7a/eng_live_tv.jpg?width=400&amp;height=239">
                            </picture>
                        </a>
                    </li>
                    <li class="teams-playlist__card teams-playlist__card--7">
                        <a class="teams-playlist__link" href="">
                            <picture class="teams-playlist__photo-container js-lazy-picture lazy-load loaded">
                                <img class="teams-playlist__photo" alt="Culers" data-image-src="https://www.fcbarcelona.com/photo-resources/2020/10/01/094aa33e-d3fa-4c07-8821-11df8316546e/cat_culers.jpg?width=400&amp;height=239" src="https://www.fcbarcelona.com/photo-resources/2020/10/01/094aa33e-d3fa-4c07-8821-11df8316546e/cat_culers.jpg?width=400&amp;height=239">
                            </picture>
                        </a>
                    </li>
                    <li class="teams-playlist__card teams-playlist__card--7">
                        <a class="teams-playlist__link" href="">
                            <picture class="teams-playlist__photo-container js-lazy-picture lazy-load loaded">
                                <img class="teams-playlist__photo" alt="Full Matches" data-image-src="https://www.fcbarcelona.com/photo-resources/2020/10/01/e6672772-c140-4b18-aea4-b201e0302c08/eng_full_matches.jpg?width=400&amp;height=239" src="https://www.fcbarcelona.com/photo-resources/2020/10/01/e6672772-c140-4b18-aea4-b201e0302c08/eng_full_matches.jpg?width=400&amp;height=239">
                            </picture>
                        </a>
                    </li>
                    <li class="teams-playlist__card teams-playlist__card--7">
                        <a class="teams-playlist__link" href="home.php">
                            <picture class="teams-playlist__photo-container js-lazy-picture lazy-load loaded">
                                <img class="teams-playlist__photo" alt="The Culers Wall" data-image-src="https://www.fcbarcelona.com/photo-resources/2020/10/01/cfae6b7f-cae3-4a52-b1bd-c70ebcf29f26/eng_cuers_wall.jpg?width=400&amp;height=239" src="https://www.fcbarcelona.com/photo-resources/2020/10/01/cfae6b7f-cae3-4a52-b1bd-c70ebcf29f26/eng_cuers_wall.jpg?width=400&amp;height=239">
                            </picture>
                        </a>
                    </li>
                    <li class="teams-playlist__card teams-playlist__card--7">
                        <a class="teams-playlist__link" href="">
                            <picture class="teams-playlist__photo-container js-lazy-picture lazy-load loaded">
                                <img class="teams-playlist__photo" alt="Barça Fun" data-image-src="https://www.fcbarcelona.com/photo-resources/2020/10/01/bf7bb427-5379-466c-a392-78f846937383/cat_barca_fun.jpg?width=400&amp;height=239" src="https://www.fcbarcelona.com/photo-resources/2020/10/01/bf7bb427-5379-466c-a392-78f846937383/cat_barca_fun.jpg?width=400&amp;height=239">
                            </picture>
                        </a>
                    </li>
                    <li class="teams-playlist__card teams-playlist__card--7">
                        <a class="teams-playlist__link" href="">
                            <picture class="teams-playlist__photo-container js-lazy-picture lazy-load loaded">
                                <img class="teams-playlist__photo" alt="Personalise your kit" data-image-src="https://www.fcbarcelona.com/photo-resources/2020/10/01/f9ba981f-2450-4d74-9f0f-5d7b4d9c4151/eng_kit_vermell.jpg?width=400&amp;height=239" src="https://www.fcbarcelona.com/photo-resources/2020/10/01/f9ba981f-2450-4d74-9f0f-5d7b4d9c4151/eng_kit_vermell.jpg?width=400&amp;height=239">
                            </picture>
                        </a>
                    </li>
        </ul>
    </section>

<section class="js-slider matches-scroller" data-widget="matches-scroller" data-script="fcb_fixtures-and-results" data-slide="3">

<center><div id="clockdiv"> 
<div> 
	<span class="days" id="day"></span> 
	<div class="smalltext">Days</div> 
</div> 
<div> 
	<span class="hours" id="hour"></span> 
	<div class="smalltext">Hours</div> 
</div> 
<div> 
	<span class="minutes" id="minute"></span> 
	<div class="smalltext">Minutes</div> 
</div> 
<div> 
	<span class="seconds" id="second"></span> 
	<div class="smalltext">Seconds</div> 
</div> 
</div> 

<!-- Page Wrapper -->
<div class="page-wrapper">

<!-- Post Slider -->
<div class="post-slider">
<h1 class="slider-tittle">Barca News</h1>
<i class="fas fa-chevron-left prev"></i>
<i class="fas fa-chevron-right next"></i>

<div class="post-wrapper">

	<div class="post">
	<img src="mini_3200x2000-MESSI_768-eng.jpg" alt="" class="slider-image">
		<div class="post-info">
		<h4><a href="single.html">Messi surpasses Xavi hernandez record</a></h4>
		<i class="far fa-user"> Barca</i>
		&nbsp;
		<i class="far fa-calendar"> Mar 22, 2021</i>
	</div>

</div>

	<div class="post">
	<img src="mini_MESSI-E-INIESTA-COPA-01.jpg" alt="" class="slider-image">
		<div class="post-info">
		<h4><a href="single.html">The best photos from the great win at Real Sciedad</a></h4>
		<i class="far fa-user"> Barca</i>
		&nbsp;
		<i class="far fa-calendar"> Mar 22, 2021</i>
	</div>

</div>

	<div class="post">
	<img src="mini_2020-01-15_FCBBvsBADALONA_38.jpg" alt="" class="slider-image">
		<div class="post-info">
		<h4><a href="single.html">Barcelona B 0-0 cordella out of luck!</a></h4>
		<i class="far fa-user"> Barca</i>
		&nbsp;
		<i class="far fa-calendar"> Mar 22, 2021</i>
	</div>

</div>

	<div class="post">
	<img src="bmAyWDTB.jpg" alt="" class="slider-image">
		<div class="post-info">
		<h4><a href="single.html">Valencia 64-80: Barcelona perfect week!</a></h4>
		<i class="far fa-user"> Barca</i>
		&nbsp;
		<i class="far fa-calendar"> Mar 22, 2021</i>
	</div>

</div>

</div>
<!-- // Post Slider -->

</div>
<!-- // Page Wrapper -->

   </section>
 <div id="culers-wall"></div>
 <section class="fan-comments fan-comments--has-answers" data-script="fcb_fan-comments" data-widget="fan-comments" data-form-id="192">

        <div class="fan-comments__title-container">
            <h2 class="fan-comments__title">    
        The <span class="fan-comments__title--yellow">Culers Wall</span>
</h2>
        </div>

        <div class="fan-comments__splitter">
            <h4 class="fan-comments__splitter-text"><span class="fan-comments__splitter-topic-text">Topic of the day...</span> <span class="js-splitter-question ">Culers, define Messi's STUNNING free-kick goal against Athletic Club with emojis! 🤯🔥</span> </h4>
        </div>
    <div class="container">
       <br><br>
        <div class="row">
            <div class="col-md-offset-2 col-md-8 ">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <p class="description">
                            Well done Messi!
                        </p>
                        <h3 class="title">Micheal</h3>
                        <span class="post">Fan</span>
                    </div>
 
                    <div class="testimonial">
                        <p class="description">
                            What a win!
                        </p>
                        <h3 class="title">jack</h3>
                        <span class="post">Fan</span>
                    </div>
 
                    <div class="testimonial">
                        <p class="description">
                            nice win
                        </p>
                        <h3 class="title">jackson</h3>
                        <span class="post">Fan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>d
    </section>
<section class="news-latest-features news-latest-features--3-items">


        <header class="widget__header">
            <h3 class="widget__title">Games &amp; Features</h3>
        </header>

    <div class="news-latest-features__list">

            <a href="/en/club/news/1988367/introducing-the-new-alert-center-for-culers/featured" class="thumbnail thumbnail--news  thumbnail--featured thumbnail--featured-wide  js-thumbnail  js-article-expand" data-article-id="1988367" data-is-featured="" data-is-initialised="true">

    <figure class="thumbnail__figure">

        <div class="thumbnail__picture-wrapper">
            
            <div class="thumbnail__picture">
                <svg class="thumbnail__default" viewBox="0 0 346.521 350.827">
                    
                <path d="M173.29 341.43s-12.065-8.947-22.964-19.124c-71.282-2.954-130.27-42.933-125.76-127.61.266-2.234.043-2.085.429-5.894-4.088-4.326-10.853-11.383-14.422-14.948 25.568-26.533 55.405-87.228 13.991-142.26 2.726-4.379 4.695-5.83 8.748-11.596 8.279 2.859 17.482 4.674 26.732 4.674 23.748 0 39.963-2.357 59.9-15.558 15.759 10.941 32.854 17.787 53.319 17.787 20.466 0 37.554-6.846 53.314-17.787 19.937 13.2 36.152 15.558 59.903 15.558 9.247 0 18.45-1.815 26.729-4.674 4.052 5.765 6.022 7.216 8.748 11.596-41.411 55.038-11.579 115.73 13.994 142.26-3.575 3.565-10.337 10.622-14.422 14.948.388 3.81.16 3.661.426 5.894 4.508 84.674-54.483 124.65-125.76 127.61-10.898 10.177-22.898 19.124-22.898 19.124z" fill="#EBBD00"></path><path d="M346.52 173.96l-5.143-5.338c-21.969-22.79-53.04-79.814-13.397-132.5l3.106-4.131-2.731-4.387c-1.706-2.742-3.157-4.508-4.695-6.378-1.25-1.52-2.544-3.092-4.286-5.569l-3.263-4.645-5.368 1.853c-8.07 2.787-16.462 4.261-24.266 4.261-22.641 0-37.476-2.212-55.739-14.304l-4.265-2.824-4.199 2.916c-16.158 11.216-31.733 16.44-49.015 16.44-17.287 0-32.862-5.224-49.02-16.44L120.04-.002l-4.264 2.822C97.513 14.913 82.678 17.125 60.04 17.125c-7.806 0-16.199-1.474-24.269-4.261l-5.368-1.853-3.263 4.645c-1.742 2.476-3.035 4.048-4.286 5.569-1.538 1.87-2.989 3.636-4.695 6.378l-2.731 4.387 3.108 4.131c39.638 52.678 8.569 109.7-13.397 132.5l-5.14 5.333 5.24 5.235c2.96 2.955 8.138 8.341 11.976 12.373l-.024.669c-.016.46-.027.834-.117 1.575l-.041.489c-2.023 37.989 7.877 69.264 29.428 92.955 22.845 25.115 58.547 40.136 100.77 42.456 10.467 9.526 21.095 17.428 21.57 17.78l4.503 3.34 4.497-3.351c.472-.353 11.035-8.25 21.486-17.771 42.217-2.319 77.924-17.342 100.77-42.456 21.551-23.691 31.451-54.965 29.428-92.953l-.041-.489c-.087-.731-.098-1.101-.114-1.554-.008-.213-.013-.438-.024-.69 4.134-4.348 9.144-9.547 11.97-12.368l5.248-5.236zm-24.996 14.844c.388 3.81.16 3.661.426 5.894 4.508 84.674-54.483 124.65-125.76 127.61-10.896 10.177-22.896 19.124-22.896 19.124s-12.065-8.947-22.964-19.124c-71.282-2.954-130.27-42.933-125.76-127.61.266-2.234.043-2.085.429-5.894-4.088-4.326-10.853-11.383-14.422-14.948 25.568-26.533 55.405-87.228 13.991-142.26 2.726-4.379 4.695-5.83 8.748-11.596 8.279 2.859 17.482 4.674 26.732 4.674 23.748 0 39.963-2.357 59.9-15.558 15.759 10.941 32.854 17.787 53.319 17.787 20.466 0 37.554-6.846 53.314-17.787 19.937 13.2 36.152 15.558 59.903 15.558 9.247 0 18.45-1.815 26.729-4.674 4.052 5.765 6.022 7.216 8.748 11.596-41.411 55.038-11.579 115.73 13.994 142.26-3.577 3.565-10.339 10.621-14.424 14.948z" fill="#1D1D1B"></path><path d="M154.32 309.5c.447.022.887.056 1.337.075 13.074.071 24.933.137 35.2 0 .949-.039 1.885-.106 2.829-.158v-118.64H154.32v118.72zm-78.714-23.668c11.273 8.079 24.589 13.969 39.364 17.881v-112.93H75.606v95.053zm157.43-95.053v112.55c14.835-4.086 28.158-10.207 39.369-18.57v-93.978h-39.369z" fill="#A40344"></path><path d="M38.089 190.78h270.34c.193 2.422.369 2.563.619 4.975 3.982 78.081-49.237 110.96-118.19 113.82-10.267.137-22.126.071-35.2 0-68.949-2.856-122.17-35.74-118.19-113.82.249-2.411.423-2.552.618-4.975z" fill="none"></path><path d="M47.073 141.42c12.987-29.771 17.815-68.005-4.014-105.38 5.452.963 11.181 1.565 16.983 1.565 22.348 0 39.944-2.032 59.705-13.202 15.581 9.427 33.036 15.418 53.474 15.431 20.517-.013 37.969-6.005 53.55-15.431 19.763 11.17 37.356 13.202 59.707 13.202 5.799 0 11.528-.602 17.037-1.659-21.887 37.458-17.056 75.698-4.071 105.47H47.074v.001z" fill="#fff"></path><path d="M198.46 141.42h13.489V31.95a100.57 100.57 0 01-13.489 4.598v104.87zM301.83 36.24c-4.991.865-10.137 1.372-15.347 1.372-2.414 0-4.763-.03-7.077-.087v103.9h20.043c-12.624-28.942-17.466-65.888 2.382-102.34v-2.844zm-49.405 105.18h13.492V36.71c-4.601-.477-9.073-1.184-13.492-2.211v106.92zm-79.883-101.6v101.61h12.429V39.1c-3.814.447-7.703.745-11.745.747-.234 0-.453-.023-.684-.025zm52.902-14.649v116.26h13.492V30.271a100.267 100.267 0 01-12.16-5.847c-.437.264-.893.498-1.332.757z" fill="#FFDC00"></path><path d="M225.44 25.164a113.661 113.661 0 01-13.492 6.783v109.47h13.492V25.157zM184.96 141.42h13.492V36.55a97.434 97.434 0 01-13.492 2.547v102.33zm53.97 0h13.489V34.5a92.24 92.24 0 01-13.489-4.242v111.16zM279.4 37.522c-4.663-.114-9.138-.362-13.492-.815v104.71H279.4v-103.9zM95.214 106.97v34.445h37.557V106.97h40.015V69.41h-40.015V31.194a115.964 115.964 0 01-13.026-6.791c-8.39 4.743-16.391 7.827-24.532 9.818V69.41h-39.3c2.639 12.885 2.731 25.53 1.034 37.56h38.267z" fill="#DC052B"></path><path d="M301.13 142.52H45.39l.673-1.545c11.121-25.49 19.462-64.292-3.955-104.38l-1.202-2.057 2.346.415c5.815 1.027 11.466 1.547 16.79 1.547 22.839 0 39.841-2.136 59.162-13.058l.562-.317.553.334c16.961 10.264 34.267 15.259 52.902 15.271 18.684-.012 36.014-5.007 52.978-15.271l.554-.334.561.317C246.638 34.364 263.642 36.5 286.479 36.5c5.495 0 11.159-.551 16.828-1.638l2.387-.457-1.226 2.097c-23.463 40.156-15.133 78.975-4.012 104.47l.673 1.544zm-127.24-2.208h123.88c-10.793-25.527-18.402-63.448 3.616-102.86-5.024.836-10.028 1.26-14.908 1.26-22.986 0-40.175-2.144-59.688-13.03-16.942 10.134-34.264 15.129-52.904 15.256v99.376zm-125.14 0h122.93V40.928c-18.26-.278-35.276-5.273-51.95-15.247-19.511 10.887-36.7 13.03-59.686 13.03-4.747 0-9.738-.404-14.873-1.2 21.997 39.359 14.378 77.273 3.579 102.8zm66.87 43.468h7.682v-14.471h10.351v-7.482h-10.351v-5.665h17.707v-7.531H115.62v35.149zm55.009-28.059c2.753 0 4.69 1.149 5.921 3.51l.179.343 7.101-3.278-.179-.371c-2.479-5.125-6.95-7.834-12.925-7.834-9.22 0-15.662 7.449-15.662 18.114 0 11.006 6.052 18.117 15.418 18.117 6.106 0 10.503-2.685 13.071-7.981l.163-.335-6.458-3.83-.206.347c-1.817 3.04-3.545 4.169-6.374 4.169-4.627 0-7.736-4.214-7.736-10.487 0-6.467 2.946-10.484 7.687-10.484zm55.606 9.008c2.059-1.518 3.228-3.89 3.228-6.617 0-5.938-4.223-9.482-11.297-9.482h-16.153v35.15h16.006c7.901 0 12.621-4.295 12.621-11.491.001-3.327-1.594-6.045-4.405-7.56zm-16.687-8.959h8.322c3.361 0 3.814 1.457 3.814 2.881 0 1.933-1.101 2.833-3.467 2.833h-8.669v-5.714zm8.716 20.676h-8.715v-8.068h8.715c3.071 0 4.5 1.273 4.5 4.009-.001 2.655-1.555 4.059-4.5 4.059z" fill="#1D1D1B"></path><path d="M309.04 195.75c-.25-2.411-.426-2.552-.619-4.975h-36.033v93.986c24.424-18.211 38.789-47.088 36.652-89.011zm-271.58 0c-2.178 42.761 12.822 71.941 38.143 90.082v-95.057H38.079c-.195 2.423-.369 2.564-.619 4.975zm156.21 113.66c13.907-.749 27.149-2.726 39.367-6.092v-112.55H193.67v118.64zm-78.711-5.708c12.242 3.241 25.473 5.135 39.364 5.791v-118.72h-39.364v112.93z" fill="#004A99"></path><path d="M176.92 310.76c-6.497 0-13.446-.037-20.778-.076l-.494-.003c-41.949-1.737-74.83-14.421-95.122-36.679-17.694-19.406-25.823-45.75-24.163-78.3.119-1.18.22-1.823.312-2.422a29.97 29.97 0 00.309-2.585l.081-1.016h272.38l.081 1.017c.1 1.283.198 1.905.304 2.589.095.598.195 1.24.312 2.358 1.663 32.608-6.466 58.952-24.158 78.357-20.292 22.26-53.17 34.943-95.081 36.679-4.4.059-9.06.081-13.978.081zM39.09 191.89a30.084 30.084 0 01-.233 1.733c-.087.571-.184 1.183-.293 2.252-1.625 31.883 6.312 57.688 23.593 76.643 19.888 21.815 52.235 34.249 93.543 35.961l.453.001c12.868.071 24.551.129 34.687-.001 41.276-1.712 73.623-14.146 93.51-35.961 17.281-18.955 25.215-44.76 23.588-76.701-.106-1.008-.203-1.618-.29-2.188-.081-.519-.157-1.005-.236-1.739H39.092z" fill="#1D1D1B"></path><path d="M136.34 248.71c0-20.418 16.552-36.97 36.966-36.97 20.42 0 36.971 16.552 36.971 36.97s-16.551 36.97-36.971 36.97c-20.414 0-36.966-16.552-36.966-36.97z" fill="#EBBD00"></path><path d="M173.11 210.83c20.843 0 37.736 16.895 37.736 37.737 0 20.841-16.893 37.736-37.736 37.736-20.84 0-37.734-16.895-37.734-37.736 0-20.842 16.894-37.737 37.734-37.737zm-19.256 44.584c-6.83-6.218-6.852-18.855-5.018-27.25.51-2.335 1.156-4.625 1.815-7.241-8.026 6.53-13.153 16.488-13.153 27.644 0 4.722.917 9.229 2.588 13.352.602.081 1.22.124 1.847.124 5.272 0 9.583-2.437 11.921-6.629zm36.662 2.726c-1.166 5.97-7.551 10.443-13.562 14.03-6.201 3.697-16.194 5.608-23.718 5.955a35.437 35.437 0 0019.874 6.059c13.432 0 25.126-7.435 31.194-18.412-1.066-8.791-9.421-9.819-13.788-7.632zm-40.042 17.924c7.427.058 18.846-1.812 25.394-5.715 8.457-5.045 15.03-10.432 11.908-17.902-1.579-3.772-6.825-8.139-13.628-3.326-.434 5.577-7.316 10.495-12.255 9.861-2.503-.321-4.603-1.112-6.347-2.255-2.778 4.743-7.747 7.436-13.614 7.436-.287 0-.575-.008-.86-.023a35.714 35.714 0 009.402 11.924zm22.546-49.693c5.889-2.441 14.053.732 20.273 4.207 5.875 3.281 12.008 9.405 15.369 15.834-1.109-18.565-16.438-33.302-35.243-33.461-5.62 3.689-4.852 10.649-.399 13.42zm-.998 22.726c-7.291-5.319-6.844-13.693-3.705-18.662.768-1.219 1.665-2.178 2.664-2.913-4.242-3.384-5.091-9.951-.982-14.437a35.402 35.402 0 00-16.687 5.871c-1.554 6.688-3.534 12.799-3.434 19.782.133 9.419 4.031 17.081 12.288 18.138 3.851.496 9.411-3.607 9.856-7.779zm36.556 2.746c-2.034-7.367-9.339-15.514-16.316-19.413-8.604-4.805-18.016-7.42-22.155-.863-2.658 4.211-3.027 11.165 3 15.696 8.192-5.658 14.734-.156 16.622 4.367.608 1.45.914 2.828.968 4.139 4.836-1.701 12.692-.605 15.111 6.938a35.354 35.354 0 002.77-10.864z" fill="#1D1D1B"></path></svg>
                    <picture class="js-lazy-picture thumbnail__picture-element lazy-load loaded">

                        


                                <source srcset="https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=640&amp;height=400
,             https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=1280&amp;height=800
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=640&amp;height=400
,             https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=1280&amp;height=800
 2x" media="(max-width: 640px)">
                                <source srcset="https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=312&amp;height=184
,             https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=624&amp;height=368
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=312&amp;height=184
,             https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=624&amp;height=368
 2x" media="(max-width: 1025px)">
                                <source srcset="https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=480&amp;height=480
,             https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=960&amp;height=960
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=480&amp;height=480
,             https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=960&amp;height=960
 2x" media="(min-width: 1026px)">


                            <source srcset="https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=312&amp;height=184
,             https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=624&amp;height=368
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=312&amp;height=184
,             https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=624&amp;height=368
 2x" media="(max-width: 380px)">
                            <source srcset="https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=640&amp;height=400
,             https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=1280&amp;height=800
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=640&amp;height=400
,             https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=1280&amp;height=800
 2x" media="(max-width: 640px)">


                        <source srcset="https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=640&amp;height=400, https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=1280&amp;height=800 2x" data-image-src="https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=640&amp;height=400, https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=1280&amp;height=800 2x">
                        <img src="https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=640&amp;height=400" data-image-src="https://www.fcbarcelona.com/photo-resources/2021/02/03/22fc4c8c-2fba-47a7-b680-d38bce12a334/stegen-notificacions7.jpg?width=640&amp;height=400" alt="stegen-notificacions7" class="thumbnail__image">

                    </picture>
            </div>


        </div>

          <figcaption class="thumbnail__caption">

                <div class="thumbnail__text">
                        <div class="thumbnail__title">New Alert Center for Culers</div>
                        <div class="thumbnail__desc">Do you want to get as close to Barça as possible? Download the official app and start enjoying the new Alert Center: get the news before anyone else and learn about new exclusive Barça TV+ content!</div>
                </div>
                <div class="thumbnail__meta">
                        <div class="content-tag content-tag--left"><span>Feature</span></div>

                        <time class="thumbnail__time">
                            <svg class="thumbnail__time-icon icon" viewBox="0 0 88 88"><path d="M44 12.74a3.47 3.47 0 00-3.47 3.47V44a3.48 3.48 0 001.73 3l22.07 12.74a3.47 3.47 0 103.48-6L47.47 42V16.21A3.47 3.47 0 0044 12.74zM44 7A37.05 37.05 0 117 44 37 37 0 0144 7zm0-7a44 44 0 1044 44A44.05 44.05 0 0044 0z" fill-rule="evenodd"></path></svg>



        02 Feb 21

                        </time>
                </div>
        </figcaption>

    </figure>
</a>


            <a href="/en/club/news/1986038/barca-combine-blaugrana-colours-with-senyera-flag-in-a-special-edition-el-clasico-jersey/featured" class="thumbnail thumbnail--news  thumbnail--featured thumbnail--featured-wide  js-thumbnail  js-article-expand" data-article-id="1986038" data-is-featured="" data-is-initialised="true">

    <figure class="thumbnail__figure">

        <div class="thumbnail__picture-wrapper">
            
            <div class="thumbnail__picture">
                <svg class="thumbnail__default" viewBox="0 0 346.521 350.827">
                    
                <path d="M173.29 341.43s-12.065-8.947-22.964-19.124c-71.282-2.954-130.27-42.933-125.76-127.61.266-2.234.043-2.085.429-5.894-4.088-4.326-10.853-11.383-14.422-14.948 25.568-26.533 55.405-87.228 13.991-142.26 2.726-4.379 4.695-5.83 8.748-11.596 8.279 2.859 17.482 4.674 26.732 4.674 23.748 0 39.963-2.357 59.9-15.558 15.759 10.941 32.854 17.787 53.319 17.787 20.466 0 37.554-6.846 53.314-17.787 19.937 13.2 36.152 15.558 59.903 15.558 9.247 0 18.45-1.815 26.729-4.674 4.052 5.765 6.022 7.216 8.748 11.596-41.411 55.038-11.579 115.73 13.994 142.26-3.575 3.565-10.337 10.622-14.422 14.948.388 3.81.16 3.661.426 5.894 4.508 84.674-54.483 124.65-125.76 127.61-10.898 10.177-22.898 19.124-22.898 19.124z" fill="#EBBD00"></path><path d="M346.52 173.96l-5.143-5.338c-21.969-22.79-53.04-79.814-13.397-132.5l3.106-4.131-2.731-4.387c-1.706-2.742-3.157-4.508-4.695-6.378-1.25-1.52-2.544-3.092-4.286-5.569l-3.263-4.645-5.368 1.853c-8.07 2.787-16.462 4.261-24.266 4.261-22.641 0-37.476-2.212-55.739-14.304l-4.265-2.824-4.199 2.916c-16.158 11.216-31.733 16.44-49.015 16.44-17.287 0-32.862-5.224-49.02-16.44L120.04-.002l-4.264 2.822C97.513 14.913 82.678 17.125 60.04 17.125c-7.806 0-16.199-1.474-24.269-4.261l-5.368-1.853-3.263 4.645c-1.742 2.476-3.035 4.048-4.286 5.569-1.538 1.87-2.989 3.636-4.695 6.378l-2.731 4.387 3.108 4.131c39.638 52.678 8.569 109.7-13.397 132.5l-5.14 5.333 5.24 5.235c2.96 2.955 8.138 8.341 11.976 12.373l-.024.669c-.016.46-.027.834-.117 1.575l-.041.489c-2.023 37.989 7.877 69.264 29.428 92.955 22.845 25.115 58.547 40.136 100.77 42.456 10.467 9.526 21.095 17.428 21.57 17.78l4.503 3.34 4.497-3.351c.472-.353 11.035-8.25 21.486-17.771 42.217-2.319 77.924-17.342 100.77-42.456 21.551-23.691 31.451-54.965 29.428-92.953l-.041-.489c-.087-.731-.098-1.101-.114-1.554-.008-.213-.013-.438-.024-.69 4.134-4.348 9.144-9.547 11.97-12.368l5.248-5.236zm-24.996 14.844c.388 3.81.16 3.661.426 5.894 4.508 84.674-54.483 124.65-125.76 127.61-10.896 10.177-22.896 19.124-22.896 19.124s-12.065-8.947-22.964-19.124c-71.282-2.954-130.27-42.933-125.76-127.61.266-2.234.043-2.085.429-5.894-4.088-4.326-10.853-11.383-14.422-14.948 25.568-26.533 55.405-87.228 13.991-142.26 2.726-4.379 4.695-5.83 8.748-11.596 8.279 2.859 17.482 4.674 26.732 4.674 23.748 0 39.963-2.357 59.9-15.558 15.759 10.941 32.854 17.787 53.319 17.787 20.466 0 37.554-6.846 53.314-17.787 19.937 13.2 36.152 15.558 59.903 15.558 9.247 0 18.45-1.815 26.729-4.674 4.052 5.765 6.022 7.216 8.748 11.596-41.411 55.038-11.579 115.73 13.994 142.26-3.577 3.565-10.339 10.621-14.424 14.948z" fill="#1D1D1B"></path><path d="M154.32 309.5c.447.022.887.056 1.337.075 13.074.071 24.933.137 35.2 0 .949-.039 1.885-.106 2.829-.158v-118.64H154.32v118.72zm-78.714-23.668c11.273 8.079 24.589 13.969 39.364 17.881v-112.93H75.606v95.053zm157.43-95.053v112.55c14.835-4.086 28.158-10.207 39.369-18.57v-93.978h-39.369z" fill="#A40344"></path><path d="M38.089 190.78h270.34c.193 2.422.369 2.563.619 4.975 3.982 78.081-49.237 110.96-118.19 113.82-10.267.137-22.126.071-35.2 0-68.949-2.856-122.17-35.74-118.19-113.82.249-2.411.423-2.552.618-4.975z" fill="none"></path><path d="M47.073 141.42c12.987-29.771 17.815-68.005-4.014-105.38 5.452.963 11.181 1.565 16.983 1.565 22.348 0 39.944-2.032 59.705-13.202 15.581 9.427 33.036 15.418 53.474 15.431 20.517-.013 37.969-6.005 53.55-15.431 19.763 11.17 37.356 13.202 59.707 13.202 5.799 0 11.528-.602 17.037-1.659-21.887 37.458-17.056 75.698-4.071 105.47H47.074v.001z" fill="#fff"></path><path d="M198.46 141.42h13.489V31.95a100.57 100.57 0 01-13.489 4.598v104.87zM301.83 36.24c-4.991.865-10.137 1.372-15.347 1.372-2.414 0-4.763-.03-7.077-.087v103.9h20.043c-12.624-28.942-17.466-65.888 2.382-102.34v-2.844zm-49.405 105.18h13.492V36.71c-4.601-.477-9.073-1.184-13.492-2.211v106.92zm-79.883-101.6v101.61h12.429V39.1c-3.814.447-7.703.745-11.745.747-.234 0-.453-.023-.684-.025zm52.902-14.649v116.26h13.492V30.271a100.267 100.267 0 01-12.16-5.847c-.437.264-.893.498-1.332.757z" fill="#FFDC00"></path><path d="M225.44 25.164a113.661 113.661 0 01-13.492 6.783v109.47h13.492V25.157zM184.96 141.42h13.492V36.55a97.434 97.434 0 01-13.492 2.547v102.33zm53.97 0h13.489V34.5a92.24 92.24 0 01-13.489-4.242v111.16zM279.4 37.522c-4.663-.114-9.138-.362-13.492-.815v104.71H279.4v-103.9zM95.214 106.97v34.445h37.557V106.97h40.015V69.41h-40.015V31.194a115.964 115.964 0 01-13.026-6.791c-8.39 4.743-16.391 7.827-24.532 9.818V69.41h-39.3c2.639 12.885 2.731 25.53 1.034 37.56h38.267z" fill="#DC052B"></path><path d="M301.13 142.52H45.39l.673-1.545c11.121-25.49 19.462-64.292-3.955-104.38l-1.202-2.057 2.346.415c5.815 1.027 11.466 1.547 16.79 1.547 22.839 0 39.841-2.136 59.162-13.058l.562-.317.553.334c16.961 10.264 34.267 15.259 52.902 15.271 18.684-.012 36.014-5.007 52.978-15.271l.554-.334.561.317C246.638 34.364 263.642 36.5 286.479 36.5c5.495 0 11.159-.551 16.828-1.638l2.387-.457-1.226 2.097c-23.463 40.156-15.133 78.975-4.012 104.47l.673 1.544zm-127.24-2.208h123.88c-10.793-25.527-18.402-63.448 3.616-102.86-5.024.836-10.028 1.26-14.908 1.26-22.986 0-40.175-2.144-59.688-13.03-16.942 10.134-34.264 15.129-52.904 15.256v99.376zm-125.14 0h122.93V40.928c-18.26-.278-35.276-5.273-51.95-15.247-19.511 10.887-36.7 13.03-59.686 13.03-4.747 0-9.738-.404-14.873-1.2 21.997 39.359 14.378 77.273 3.579 102.8zm66.87 43.468h7.682v-14.471h10.351v-7.482h-10.351v-5.665h17.707v-7.531H115.62v35.149zm55.009-28.059c2.753 0 4.69 1.149 5.921 3.51l.179.343 7.101-3.278-.179-.371c-2.479-5.125-6.95-7.834-12.925-7.834-9.22 0-15.662 7.449-15.662 18.114 0 11.006 6.052 18.117 15.418 18.117 6.106 0 10.503-2.685 13.071-7.981l.163-.335-6.458-3.83-.206.347c-1.817 3.04-3.545 4.169-6.374 4.169-4.627 0-7.736-4.214-7.736-10.487 0-6.467 2.946-10.484 7.687-10.484zm55.606 9.008c2.059-1.518 3.228-3.89 3.228-6.617 0-5.938-4.223-9.482-11.297-9.482h-16.153v35.15h16.006c7.901 0 12.621-4.295 12.621-11.491.001-3.327-1.594-6.045-4.405-7.56zm-16.687-8.959h8.322c3.361 0 3.814 1.457 3.814 2.881 0 1.933-1.101 2.833-3.467 2.833h-8.669v-5.714zm8.716 20.676h-8.715v-8.068h8.715c3.071 0 4.5 1.273 4.5 4.009-.001 2.655-1.555 4.059-4.5 4.059z" fill="#1D1D1B"></path><path d="M309.04 195.75c-.25-2.411-.426-2.552-.619-4.975h-36.033v93.986c24.424-18.211 38.789-47.088 36.652-89.011zm-271.58 0c-2.178 42.761 12.822 71.941 38.143 90.082v-95.057H38.079c-.195 2.423-.369 2.564-.619 4.975zm156.21 113.66c13.907-.749 27.149-2.726 39.367-6.092v-112.55H193.67v118.64zm-78.711-5.708c12.242 3.241 25.473 5.135 39.364 5.791v-118.72h-39.364v112.93z" fill="#004A99"></path><path d="M176.92 310.76c-6.497 0-13.446-.037-20.778-.076l-.494-.003c-41.949-1.737-74.83-14.421-95.122-36.679-17.694-19.406-25.823-45.75-24.163-78.3.119-1.18.22-1.823.312-2.422a29.97 29.97 0 00.309-2.585l.081-1.016h272.38l.081 1.017c.1 1.283.198 1.905.304 2.589.095.598.195 1.24.312 2.358 1.663 32.608-6.466 58.952-24.158 78.357-20.292 22.26-53.17 34.943-95.081 36.679-4.4.059-9.06.081-13.978.081zM39.09 191.89a30.084 30.084 0 01-.233 1.733c-.087.571-.184 1.183-.293 2.252-1.625 31.883 6.312 57.688 23.593 76.643 19.888 21.815 52.235 34.249 93.543 35.961l.453.001c12.868.071 24.551.129 34.687-.001 41.276-1.712 73.623-14.146 93.51-35.961 17.281-18.955 25.215-44.76 23.588-76.701-.106-1.008-.203-1.618-.29-2.188-.081-.519-.157-1.005-.236-1.739H39.092z" fill="#1D1D1B"></path><path d="M136.34 248.71c0-20.418 16.552-36.97 36.966-36.97 20.42 0 36.971 16.552 36.971 36.97s-16.551 36.97-36.971 36.97c-20.414 0-36.966-16.552-36.966-36.97z" fill="#EBBD00"></path><path d="M173.11 210.83c20.843 0 37.736 16.895 37.736 37.737 0 20.841-16.893 37.736-37.736 37.736-20.84 0-37.734-16.895-37.734-37.736 0-20.842 16.894-37.737 37.734-37.737zm-19.256 44.584c-6.83-6.218-6.852-18.855-5.018-27.25.51-2.335 1.156-4.625 1.815-7.241-8.026 6.53-13.153 16.488-13.153 27.644 0 4.722.917 9.229 2.588 13.352.602.081 1.22.124 1.847.124 5.272 0 9.583-2.437 11.921-6.629zm36.662 2.726c-1.166 5.97-7.551 10.443-13.562 14.03-6.201 3.697-16.194 5.608-23.718 5.955a35.437 35.437 0 0019.874 6.059c13.432 0 25.126-7.435 31.194-18.412-1.066-8.791-9.421-9.819-13.788-7.632zm-40.042 17.924c7.427.058 18.846-1.812 25.394-5.715 8.457-5.045 15.03-10.432 11.908-17.902-1.579-3.772-6.825-8.139-13.628-3.326-.434 5.577-7.316 10.495-12.255 9.861-2.503-.321-4.603-1.112-6.347-2.255-2.778 4.743-7.747 7.436-13.614 7.436-.287 0-.575-.008-.86-.023a35.714 35.714 0 009.402 11.924zm22.546-49.693c5.889-2.441 14.053.732 20.273 4.207 5.875 3.281 12.008 9.405 15.369 15.834-1.109-18.565-16.438-33.302-35.243-33.461-5.62 3.689-4.852 10.649-.399 13.42zm-.998 22.726c-7.291-5.319-6.844-13.693-3.705-18.662.768-1.219 1.665-2.178 2.664-2.913-4.242-3.384-5.091-9.951-.982-14.437a35.402 35.402 0 00-16.687 5.871c-1.554 6.688-3.534 12.799-3.434 19.782.133 9.419 4.031 17.081 12.288 18.138 3.851.496 9.411-3.607 9.856-7.779zm36.556 2.746c-2.034-7.367-9.339-15.514-16.316-19.413-8.604-4.805-18.016-7.42-22.155-.863-2.658 4.211-3.027 11.165 3 15.696 8.192-5.658 14.734-.156 16.622 4.367.608 1.45.914 2.828.968 4.139 4.836-1.701 12.692-.605 15.111 6.938a35.354 35.354 0 002.77-10.864z" fill="#1D1D1B"></path></svg>
                    <picture class="js-lazy-picture thumbnail__picture-element lazy-load loaded">

                        


                                <source srcset="https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=640&amp;height=400
,             https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=1280&amp;height=800
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=640&amp;height=400
,             https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=1280&amp;height=800
 2x" media="(max-width: 640px)">
                                <source srcset="https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=312&amp;height=184
,             https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=624&amp;height=368
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=312&amp;height=184
,             https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=624&amp;height=368
 2x" media="(max-width: 1025px)">
                                <source srcset="https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=480&amp;height=480
,             https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=960&amp;height=960
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=480&amp;height=480
,             https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=960&amp;height=960
 2x" media="(min-width: 1026px)">


                            <source srcset="https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=312&amp;height=184
,             https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=624&amp;height=368
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=312&amp;height=184
,             https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=624&amp;height=368
 2x" media="(max-width: 380px)">
                            <source srcset="https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=640&amp;height=400
,             https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=1280&amp;height=800
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=640&amp;height=400
,             https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=1280&amp;height=800
 2x" media="(max-width: 640px)">


                        <source srcset="https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=640&amp;height=400, https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=1280&amp;height=800 2x" data-image-src="https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=640&amp;height=400, https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=1280&amp;height=800 2x">
                        <img src="https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=640&amp;height=400" data-image-src="https://www.fcbarcelona.com/photo-resources/2021/01/25/f2a103f9-102e-445f-ad34-088ada56bcfd/5a-equipaci-ENG_AP2.jpg?width=640&amp;height=400" alt="5a equipació - ENG_AP2" class="thumbnail__image">

                    </picture>
            </div>


        </div>

          <figcaption class="thumbnail__caption">

                <div class="thumbnail__text">
                        <div class="thumbnail__title">Barça combine blaugrana colours with Senyera flag in a special edition ‘El Clásico’ jersey</div>
                        <div class="thumbnail__desc">The jersey is available from today, exclusively at Barça Stores and the club’s e-Commerce platform, and from February 1 will go on sale at other habitual channels</div>
                </div>
                <div class="thumbnail__meta">
                        <div class="content-tag content-tag--left"><span>Feature</span></div>

                        <time class="thumbnail__time">
                            <svg class="thumbnail__time-icon icon" viewBox="0 0 88 88"><path d="M44 12.74a3.47 3.47 0 00-3.47 3.47V44a3.48 3.48 0 001.73 3l22.07 12.74a3.47 3.47 0 103.48-6L47.47 42V16.21A3.47 3.47 0 0044 12.74zM44 7A37.05 37.05 0 117 44 37 37 0 0144 7zm0-7a44 44 0 1044 44A44.05 44.05 0 0044 0z" fill-rule="evenodd"></path></svg>



        26 Jan 21

                        </time>
                </div>
        </figcaption>

    </figure>
</a>


            <a href="/en/club/news/1880404/introducing-new-barca-features-designed-just-for-you/featured" class="thumbnail thumbnail--news  thumbnail--featured thumbnail--featured-wide  js-thumbnail  js-article-expand" data-article-id="1880404" data-is-featured="" data-is-initialised="true">

    <figure class="thumbnail__figure">

        <div class="thumbnail__picture-wrapper">
            
            <div class="thumbnail__picture">
                <svg class="thumbnail__default" viewBox="0 0 346.521 350.827">
                    
                <path d="M173.29 341.43s-12.065-8.947-22.964-19.124c-71.282-2.954-130.27-42.933-125.76-127.61.266-2.234.043-2.085.429-5.894-4.088-4.326-10.853-11.383-14.422-14.948 25.568-26.533 55.405-87.228 13.991-142.26 2.726-4.379 4.695-5.83 8.748-11.596 8.279 2.859 17.482 4.674 26.732 4.674 23.748 0 39.963-2.357 59.9-15.558 15.759 10.941 32.854 17.787 53.319 17.787 20.466 0 37.554-6.846 53.314-17.787 19.937 13.2 36.152 15.558 59.903 15.558 9.247 0 18.45-1.815 26.729-4.674 4.052 5.765 6.022 7.216 8.748 11.596-41.411 55.038-11.579 115.73 13.994 142.26-3.575 3.565-10.337 10.622-14.422 14.948.388 3.81.16 3.661.426 5.894 4.508 84.674-54.483 124.65-125.76 127.61-10.898 10.177-22.898 19.124-22.898 19.124z" fill="#EBBD00"></path><path d="M346.52 173.96l-5.143-5.338c-21.969-22.79-53.04-79.814-13.397-132.5l3.106-4.131-2.731-4.387c-1.706-2.742-3.157-4.508-4.695-6.378-1.25-1.52-2.544-3.092-4.286-5.569l-3.263-4.645-5.368 1.853c-8.07 2.787-16.462 4.261-24.266 4.261-22.641 0-37.476-2.212-55.739-14.304l-4.265-2.824-4.199 2.916c-16.158 11.216-31.733 16.44-49.015 16.44-17.287 0-32.862-5.224-49.02-16.44L120.04-.002l-4.264 2.822C97.513 14.913 82.678 17.125 60.04 17.125c-7.806 0-16.199-1.474-24.269-4.261l-5.368-1.853-3.263 4.645c-1.742 2.476-3.035 4.048-4.286 5.569-1.538 1.87-2.989 3.636-4.695 6.378l-2.731 4.387 3.108 4.131c39.638 52.678 8.569 109.7-13.397 132.5l-5.14 5.333 5.24 5.235c2.96 2.955 8.138 8.341 11.976 12.373l-.024.669c-.016.46-.027.834-.117 1.575l-.041.489c-2.023 37.989 7.877 69.264 29.428 92.955 22.845 25.115 58.547 40.136 100.77 42.456 10.467 9.526 21.095 17.428 21.57 17.78l4.503 3.34 4.497-3.351c.472-.353 11.035-8.25 21.486-17.771 42.217-2.319 77.924-17.342 100.77-42.456 21.551-23.691 31.451-54.965 29.428-92.953l-.041-.489c-.087-.731-.098-1.101-.114-1.554-.008-.213-.013-.438-.024-.69 4.134-4.348 9.144-9.547 11.97-12.368l5.248-5.236zm-24.996 14.844c.388 3.81.16 3.661.426 5.894 4.508 84.674-54.483 124.65-125.76 127.61-10.896 10.177-22.896 19.124-22.896 19.124s-12.065-8.947-22.964-19.124c-71.282-2.954-130.27-42.933-125.76-127.61.266-2.234.043-2.085.429-5.894-4.088-4.326-10.853-11.383-14.422-14.948 25.568-26.533 55.405-87.228 13.991-142.26 2.726-4.379 4.695-5.83 8.748-11.596 8.279 2.859 17.482 4.674 26.732 4.674 23.748 0 39.963-2.357 59.9-15.558 15.759 10.941 32.854 17.787 53.319 17.787 20.466 0 37.554-6.846 53.314-17.787 19.937 13.2 36.152 15.558 59.903 15.558 9.247 0 18.45-1.815 26.729-4.674 4.052 5.765 6.022 7.216 8.748 11.596-41.411 55.038-11.579 115.73 13.994 142.26-3.577 3.565-10.339 10.621-14.424 14.948z" fill="#1D1D1B"></path><path d="M154.32 309.5c.447.022.887.056 1.337.075 13.074.071 24.933.137 35.2 0 .949-.039 1.885-.106 2.829-.158v-118.64H154.32v118.72zm-78.714-23.668c11.273 8.079 24.589 13.969 39.364 17.881v-112.93H75.606v95.053zm157.43-95.053v112.55c14.835-4.086 28.158-10.207 39.369-18.57v-93.978h-39.369z" fill="#A40344"></path><path d="M38.089 190.78h270.34c.193 2.422.369 2.563.619 4.975 3.982 78.081-49.237 110.96-118.19 113.82-10.267.137-22.126.071-35.2 0-68.949-2.856-122.17-35.74-118.19-113.82.249-2.411.423-2.552.618-4.975z" fill="none"></path><path d="M47.073 141.42c12.987-29.771 17.815-68.005-4.014-105.38 5.452.963 11.181 1.565 16.983 1.565 22.348 0 39.944-2.032 59.705-13.202 15.581 9.427 33.036 15.418 53.474 15.431 20.517-.013 37.969-6.005 53.55-15.431 19.763 11.17 37.356 13.202 59.707 13.202 5.799 0 11.528-.602 17.037-1.659-21.887 37.458-17.056 75.698-4.071 105.47H47.074v.001z" fill="#fff"></path><path d="M198.46 141.42h13.489V31.95a100.57 100.57 0 01-13.489 4.598v104.87zM301.83 36.24c-4.991.865-10.137 1.372-15.347 1.372-2.414 0-4.763-.03-7.077-.087v103.9h20.043c-12.624-28.942-17.466-65.888 2.382-102.34v-2.844zm-49.405 105.18h13.492V36.71c-4.601-.477-9.073-1.184-13.492-2.211v106.92zm-79.883-101.6v101.61h12.429V39.1c-3.814.447-7.703.745-11.745.747-.234 0-.453-.023-.684-.025zm52.902-14.649v116.26h13.492V30.271a100.267 100.267 0 01-12.16-5.847c-.437.264-.893.498-1.332.757z" fill="#FFDC00"></path><path d="M225.44 25.164a113.661 113.661 0 01-13.492 6.783v109.47h13.492V25.157zM184.96 141.42h13.492V36.55a97.434 97.434 0 01-13.492 2.547v102.33zm53.97 0h13.489V34.5a92.24 92.24 0 01-13.489-4.242v111.16zM279.4 37.522c-4.663-.114-9.138-.362-13.492-.815v104.71H279.4v-103.9zM95.214 106.97v34.445h37.557V106.97h40.015V69.41h-40.015V31.194a115.964 115.964 0 01-13.026-6.791c-8.39 4.743-16.391 7.827-24.532 9.818V69.41h-39.3c2.639 12.885 2.731 25.53 1.034 37.56h38.267z" fill="#DC052B"></path><path d="M301.13 142.52H45.39l.673-1.545c11.121-25.49 19.462-64.292-3.955-104.38l-1.202-2.057 2.346.415c5.815 1.027 11.466 1.547 16.79 1.547 22.839 0 39.841-2.136 59.162-13.058l.562-.317.553.334c16.961 10.264 34.267 15.259 52.902 15.271 18.684-.012 36.014-5.007 52.978-15.271l.554-.334.561.317C246.638 34.364 263.642 36.5 286.479 36.5c5.495 0 11.159-.551 16.828-1.638l2.387-.457-1.226 2.097c-23.463 40.156-15.133 78.975-4.012 104.47l.673 1.544zm-127.24-2.208h123.88c-10.793-25.527-18.402-63.448 3.616-102.86-5.024.836-10.028 1.26-14.908 1.26-22.986 0-40.175-2.144-59.688-13.03-16.942 10.134-34.264 15.129-52.904 15.256v99.376zm-125.14 0h122.93V40.928c-18.26-.278-35.276-5.273-51.95-15.247-19.511 10.887-36.7 13.03-59.686 13.03-4.747 0-9.738-.404-14.873-1.2 21.997 39.359 14.378 77.273 3.579 102.8zm66.87 43.468h7.682v-14.471h10.351v-7.482h-10.351v-5.665h17.707v-7.531H115.62v35.149zm55.009-28.059c2.753 0 4.69 1.149 5.921 3.51l.179.343 7.101-3.278-.179-.371c-2.479-5.125-6.95-7.834-12.925-7.834-9.22 0-15.662 7.449-15.662 18.114 0 11.006 6.052 18.117 15.418 18.117 6.106 0 10.503-2.685 13.071-7.981l.163-.335-6.458-3.83-.206.347c-1.817 3.04-3.545 4.169-6.374 4.169-4.627 0-7.736-4.214-7.736-10.487 0-6.467 2.946-10.484 7.687-10.484zm55.606 9.008c2.059-1.518 3.228-3.89 3.228-6.617 0-5.938-4.223-9.482-11.297-9.482h-16.153v35.15h16.006c7.901 0 12.621-4.295 12.621-11.491.001-3.327-1.594-6.045-4.405-7.56zm-16.687-8.959h8.322c3.361 0 3.814 1.457 3.814 2.881 0 1.933-1.101 2.833-3.467 2.833h-8.669v-5.714zm8.716 20.676h-8.715v-8.068h8.715c3.071 0 4.5 1.273 4.5 4.009-.001 2.655-1.555 4.059-4.5 4.059z" fill="#1D1D1B"></path><path d="M309.04 195.75c-.25-2.411-.426-2.552-.619-4.975h-36.033v93.986c24.424-18.211 38.789-47.088 36.652-89.011zm-271.58 0c-2.178 42.761 12.822 71.941 38.143 90.082v-95.057H38.079c-.195 2.423-.369 2.564-.619 4.975zm156.21 113.66c13.907-.749 27.149-2.726 39.367-6.092v-112.55H193.67v118.64zm-78.711-5.708c12.242 3.241 25.473 5.135 39.364 5.791v-118.72h-39.364v112.93z" fill="#004A99"></path><path d="M176.92 310.76c-6.497 0-13.446-.037-20.778-.076l-.494-.003c-41.949-1.737-74.83-14.421-95.122-36.679-17.694-19.406-25.823-45.75-24.163-78.3.119-1.18.22-1.823.312-2.422a29.97 29.97 0 00.309-2.585l.081-1.016h272.38l.081 1.017c.1 1.283.198 1.905.304 2.589.095.598.195 1.24.312 2.358 1.663 32.608-6.466 58.952-24.158 78.357-20.292 22.26-53.17 34.943-95.081 36.679-4.4.059-9.06.081-13.978.081zM39.09 191.89a30.084 30.084 0 01-.233 1.733c-.087.571-.184 1.183-.293 2.252-1.625 31.883 6.312 57.688 23.593 76.643 19.888 21.815 52.235 34.249 93.543 35.961l.453.001c12.868.071 24.551.129 34.687-.001 41.276-1.712 73.623-14.146 93.51-35.961 17.281-18.955 25.215-44.76 23.588-76.701-.106-1.008-.203-1.618-.29-2.188-.081-.519-.157-1.005-.236-1.739H39.092z" fill="#1D1D1B"></path><path d="M136.34 248.71c0-20.418 16.552-36.97 36.966-36.97 20.42 0 36.971 16.552 36.971 36.97s-16.551 36.97-36.971 36.97c-20.414 0-36.966-16.552-36.966-36.97z" fill="#EBBD00"></path><path d="M173.11 210.83c20.843 0 37.736 16.895 37.736 37.737 0 20.841-16.893 37.736-37.736 37.736-20.84 0-37.734-16.895-37.734-37.736 0-20.842 16.894-37.737 37.734-37.737zm-19.256 44.584c-6.83-6.218-6.852-18.855-5.018-27.25.51-2.335 1.156-4.625 1.815-7.241-8.026 6.53-13.153 16.488-13.153 27.644 0 4.722.917 9.229 2.588 13.352.602.081 1.22.124 1.847.124 5.272 0 9.583-2.437 11.921-6.629zm36.662 2.726c-1.166 5.97-7.551 10.443-13.562 14.03-6.201 3.697-16.194 5.608-23.718 5.955a35.437 35.437 0 0019.874 6.059c13.432 0 25.126-7.435 31.194-18.412-1.066-8.791-9.421-9.819-13.788-7.632zm-40.042 17.924c7.427.058 18.846-1.812 25.394-5.715 8.457-5.045 15.03-10.432 11.908-17.902-1.579-3.772-6.825-8.139-13.628-3.326-.434 5.577-7.316 10.495-12.255 9.861-2.503-.321-4.603-1.112-6.347-2.255-2.778 4.743-7.747 7.436-13.614 7.436-.287 0-.575-.008-.86-.023a35.714 35.714 0 009.402 11.924zm22.546-49.693c5.889-2.441 14.053.732 20.273 4.207 5.875 3.281 12.008 9.405 15.369 15.834-1.109-18.565-16.438-33.302-35.243-33.461-5.62 3.689-4.852 10.649-.399 13.42zm-.998 22.726c-7.291-5.319-6.844-13.693-3.705-18.662.768-1.219 1.665-2.178 2.664-2.913-4.242-3.384-5.091-9.951-.982-14.437a35.402 35.402 0 00-16.687 5.871c-1.554 6.688-3.534 12.799-3.434 19.782.133 9.419 4.031 17.081 12.288 18.138 3.851.496 9.411-3.607 9.856-7.779zm36.556 2.746c-2.034-7.367-9.339-15.514-16.316-19.413-8.604-4.805-18.016-7.42-22.155-.863-2.658 4.211-3.027 11.165 3 15.696 8.192-5.658 14.734-.156 16.622 4.367.608 1.45.914 2.828.968 4.139 4.836-1.701 12.692-.605 15.111 6.938a35.354 35.354 0 002.77-10.864z" fill="#1D1D1B"></path></svg>
                    <picture class="js-lazy-picture thumbnail__picture-element lazy-load loaded">

                        


                                <source srcset="https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=640&amp;height=400
,             https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=1280&amp;height=800
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=640&amp;height=400
,             https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=1280&amp;height=800
 2x" media="(max-width: 640px)">
                                <source srcset="https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=312&amp;height=184
,             https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=624&amp;height=368
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=312&amp;height=184
,             https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=624&amp;height=368
 2x" media="(max-width: 1025px)">
                                <source srcset="https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=480&amp;height=480
,             https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=960&amp;height=960
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=480&amp;height=480
,             https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=960&amp;height=960
 2x" media="(min-width: 1026px)">


                            <source srcset="https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=312&amp;height=184
,             https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=624&amp;height=368
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=312&amp;height=184
,             https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=624&amp;height=368
 2x" media="(max-width: 380px)">
                            <source srcset="https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=640&amp;height=400
,             https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=1280&amp;height=800
 2x" data-image-src="            https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=640&amp;height=400
,             https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=1280&amp;height=800
 2x" media="(max-width: 640px)">


                        <source srcset="https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=640&amp;height=400, https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=1280&amp;height=800 2x" data-image-src="https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=640&amp;height=400, https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=1280&amp;height=800 2x">
                        <img src="https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=640&amp;height=400" data-image-src="https://www.fcbarcelona.com/photo-resources/2020/11/02/d2c1d3ab-437b-400a-8df2-3e420b9f0799/imatge_avatars02.jpg?width=640&amp;height=400" alt="imatge_avatars02" class="thumbnail__image">

                    </picture>
            </div>


        </div>

          <figcaption class="thumbnail__caption">

                <div class="thumbnail__text">
                        <div class="thumbnail__title">Introducing new Barça features designed just for you</div>
                        <div class="thumbnail__desc">Find out how to personalise our website and make your Barça experience unique to you!</div>
                </div>
                <div class="thumbnail__meta">
                        <div class="content-tag content-tag--left"><span>Feature</span></div>

                        <time class="thumbnail__time">
                            <svg class="thumbnail__time-icon icon" viewBox="0 0 88 88"><path d="M44 12.74a3.47 3.47 0 00-3.47 3.47V44a3.48 3.48 0 001.73 3l22.07 12.74a3.47 3.47 0 103.48-6L47.47 42V16.21A3.47 3.47 0 0044 12.74zM44 7A37.05 37.05 0 117 44 37 37 0 0144 7zm0-7a44 44 0 1044 44A44.05 44.05 0 0044 0z" fill-rule="evenodd"></path></svg>



        23 Jan 21

                        </time>
                </div>
        </figcaption>

    </figure>
</a>

    </div>

</section>
<section class="news-latest-features news-latest-features--3-items">
<!-- Page Wrapper -->
<div class="page-wrapper">

<!-- Post Slider -->
<div class="post-slider">
<h1 class="slider-tittle">Barca News</h1>
<i class="fas fa-chevron-left prev"></i>
<i class="fas fa-chevron-right next"></i>

<div class="post-wrapper">

	<div class="post">
	<img src="mini_3200x2000-MESSI_768-eng.jpg" alt="" class="slider-image">
		<div class="post-info">
		<h4><a href="single.html">Messi surpasses Xavi hernandez record</a></h4>
		<i class="far fa-user"> Barca</i>
		&nbsp;
		<i class="far fa-calendar"> Mar 22, 2021</i>
	</div>

</div>

	<div class="post">
	<img src="mini_MESSI-E-INIESTA-COPA-01.jpg" alt="" class="slider-image">
		<div class="post-info">
		<h4><a href="single.html">The best photos from the great win at Real Sciedad</a></h4>
		<i class="far fa-user"> Barca</i>
		&nbsp;
		<i class="far fa-calendar"> Mar 22, 2021</i>
	</div>

</div>

	<div class="post">
	<img src="mini_2020-01-15_FCBBvsBADALONA_38.jpg" alt="" class="slider-image">
		<div class="post-info">
		<h4><a href="single.html">Barcelona B 0-0 cordella out of luck!</a></h4>
		<i class="far fa-user"> Barca</i>
		&nbsp;
		<i class="far fa-calendar"> Mar 22, 2021</i>
	</div>

</div>

	<div class="post">
	<img src="bmAyWDTB.jpg" alt="" class="slider-image">
		<div class="post-info">
		<h4><a href="single.html">Valencia 64-80: Barcelona perfect week!</a></h4>
		<i class="far fa-user"> Barca</i>
		&nbsp;
		<i class="far fa-calendar"> Mar 22, 2021</i>
	</div>

</div>

</div>
<!-- // Post Slider -->

</div>
<!-- // Page Wrapper -->
</section>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
var deadline = new Date("feb 28, 2021 15:37:25").getTime(); 

var x = setInterval(function() { 

var now = new Date().getTime(); 
var t = deadline - now; 
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 
document.getElementById("day").innerHTML =days ; 
document.getElementById("hour").innerHTML =hours; 
document.getElementById("minute").innerHTML = minutes; 
document.getElementById("second").innerHTML =seconds; 
if (t < 0) { 
		clearInterval(x); 
		document.getElementById("demo").innerHTML = "TIME UP"; 
		document.getElementById("day").innerHTML ='0'; 
		document.getElementById("hour").innerHTML ='0'; 
		document.getElementById("minute").innerHTML ='0' ; 
		document.getElementById("second").innerHTML = '0'; } 
}, 1000); 
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:true,
        navigationText:["",""],
        slideSpeed:1000,
        autoPlay:true
    });
});
$(document).ready(function(){
$('.post-wrapper').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  nextArrow: $('.next'),
  prevArrow: $('.prev'),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
}); 
});  
</script>
<!--slick courasel-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<footer class="footer">
        <div class="footer__text container">
            <p>
                Aliquam erat volutpat. Vestibulum ac magna vel mauris tincidunt laoreet ut at dolor. Curabitur vel risus
                nec tortor mattis sagittis id eu augue. Morbi egestas arcu enim, vel ultricies justo fermentum a.
                Quisque ac venenatis risus. In hac habitasse platea dictumst. Sed semper dui sed malesuada viverra.
            </p>
            <p>
                &copy; Copyright 2019 Your Website
            </p>
            <hr class="footer__hr">
        </div>
        <div class="footer__sections container">
            <div class="footer__section">
                <span class="footer__title">Goalkeepers</span>
                <a href="#" class="footer__link">Marc-Andre ter Stegen</a>
                <a href="#" class="footer__link">Norberto Murara Neto</a>
            </div>
            <div class="footer__section">
                <span class="footer__title">Defenders</span>
                <a href="#" class="footer__link">Sergino dest</a>
                <a href="#" class="footer__link">Gerard Pique</a>
                <a href="#" class="footer__link">Ronald Araujo</a>
				<a href="#" class="footer__link">Clement Lenglet</a>
				<a href="#" class="footer__link">Jordi Alba</a>
				<a href="#" class="footer__link">Sergi Roberto</a>
				<a href="#" class="footer__link">Samuel Umtiti</a>
				<a href="#" class="footer__link">Junior Firpo</a>
            </div>
            <div class="footer__section">
                <span class="footer__title">Midfielders</span>
                <a href="#" class="footer__link">Sergio Busquets</a>
                <a href="#" class="footer__link">Miralem Pjanic</a>
                <a href="#" class="footer__link">Ricard Puig</a>
                <a href="#" class="footer__link">Philipe Coutinho</a>
                <a href="#" class="footer__link">Pedri</a>
				<a href="#" class="footer__link">Matheus Fernandes</a>
				<a href="#" class="footer__link">Frankie de Jong</a>
            </div>
            <div class="footer__section">
                <span class="footer__title">Fowards</span>
                <a href="#" class="footer__link">Antoine Griezmann</a>
                <a href="#" class="footer__link">Martin Braithwaite</a>
                <a href="#" class="footer__link">Lionel Messi</a>
				<a href="#" class="footer__link">Ousmane Dembele</a>
				<a href="#" class="footer__link">Trincao</a>
				<a href="#" class="footer__link">Anssumane Fati</a>
            </div>
			<div class="footer__section">
                <span class="footer__title">Barca Products</span>
                <a href="#" class="footer__link">Culers</a>
                <a href="#" class="footer__link">Membership</a>
                <a href="#" class="footer__link">Barca TV+</a>
				<a href="#" class="footer__link">Tickets & Live</a>
				<a href="#" class="footer__link">Tours</a>
				<a href="#" class="footer__link">Barca App</a>
				<a href="#" class="footer__link">Online store</a>
				<a href="#" class="footer__link">Helpdesk</a>
				<a href="#" class="footer__link">FAQs</a>
            </div>
			<div class="footer__section">
                <span class="footer__title">Club</span>
                <a href="#" class="footer__link">Camp Nou</a>
                <a href="#" class="footer__link">The Crest</a>
                <a href="#" class="footer__link">Anthem</a>
            </div>
			<div class="footer__section">
                <span class="footer__title">History</span>
                <a href="#" class="footer__link">2008-16. The best</a>
                <a href="#" class="footer__link">years in our</a>
                <a href="#" class="footer__link">history</a>
				<a href="#" class="footer__link">The era of the</a>
				<a href="#" class="footer__link">Dream Team</a>
				<a href="#" class="footer__link">1950-1961. The</a>
				<a href="#" class="footer__link">Kubala era</a>
				<a href="#" class="footer__link">1899-1909.</a>
				<a href="#" class="footer__link">Foundation and survival</a>
				<a href="#" class="footer__link">Barca in the Champions League </a>
            </div>
        </div>
    </footer>
</body>
</html>