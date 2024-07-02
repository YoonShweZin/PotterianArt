<!DOCTYPE html>
<html lang="en">
<head>
	<title>Potterian Art</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

  		
	<style type="text/css">
	/*Header*/


.header
{
	width: 100%;
	height: 100px;
}
.logo
{
	width: 13%;
	height: 100px;
	background-image: url("images/logo.png");
	background-repeat: no-repeat;
	margin-left: 25px;
	background-size: 100% 100%;
	float: left;
}
/*nav*/

.nav{
	width: 84%;
	height: 100px;
	float: right;
	}

	ul
	{
    list-style-type: none;
    margin : 0;
    padding: 0;
    float: right;
    overflow: hidden;
    color:brown;
}

li 
{
    float: left;
    padding-top: 20px;
    padding-right: 25px;

}

li a, .dropbtn
 {
    display: inline-block;
    color:black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 25px;
    font-family:serif; 
    text-shadow:2px 2px 8px pink; 

}

li a:hover, .dropdown:hover .dropbtn 
{
    background-color:lightblue;
    color:oldlace; 
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:#D2B48C;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color:brown;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-style: italic;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content 
{
    display: block;
}

li a:hover{
    background-color:transparent;
    color:brown;
}

/*end nev*/

/*go to shop*/

.shop
{
	width: 70%;
	height: 300px;
	margin: auto;
	background-color: transparent;
}
.earthenware1
{
		width: 30%;
		height: 250px;
		float: left;
		margin-right: 5%;

}

.stoneware1
{
		width: 30%;
		height: 250px;
		float: left;
		margin-right: 5%;

}

.porcelian1
{
		width: 30%;
		height: 250px;
		float: left;

}

h2
{
	font-family: serif;
	padding-top: 25px;
}

p
{
	font-size: 18px;
	font-family: serif;
	padding-left: 50px;
}
/*end to shop*/

/*start of about us*/
.about
{
	padding: 80px 0;
	background-color: white;
}

.container
{
	width: 70%;
	height: 400px;
	background-color: white;
	margin: auto;
}
h2
{
	font-family: serif;
}
.letter
{
	width: 50%;
	height: 200px;
	background-color: white;
	margin-top: 115px;
	float: left;
}

.img
{
	width: 48%;
	height: 250px;
	background-image: url("images/8.jpg");
	background-repeat: no-repeat;
	background-size: 100% 100%;
	float: right;
}
/*end of about us*/

/*start of contact us*/
.contact
{
	padding: 80px 0;
	background-color: white;
}

.container2
{
	width: 70%;
	height: 600px;
	background-color: white;
	margin: auto;
}

.location1
{
	width: 50%;
	height: 230px;
	float: left; 
	text-align: left;
	background-color: white;
	margin-top: 30px;
}

h3
{
	font-family: serif;
	padding-left: 50px;
}		

.map
{
	width: 45%;
	height: 230px;
	float: right;
	margin-top: 30px;
	margin-right: 20px;
	background-color: black;
}

.location2
{
	width: 50%;
	height: 230px;
	float: left; 
	text-align: left;
	background-color: white;
	margin-top: 30px;
}

.map1
{
	width: 45%;
	height: 230px;
	float: right;
	margin-top: 30px;
	margin-right: 20px;
	background-color: black;
}
/* end contact and map */



/* img slider */
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 65%;
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
  color: black;
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
</style>

	
</head>
<body>

<!--	<div class="all">-->
	<!-- Header  and nav-->
	<div class="header">
	<div class="logo">	</div>

  <div class="nav">
  <ul>
  <li><a href="index.php">Home </a></li>
  <li class="dropdown">
    <a class="dropbth">Categories</a>
    <div class="dropdown-content">
      <a href="earthenware.php">Earthenware</a>
      <a href="earthenware.php#stoneware">Stoneware</a>
      <a href="earthenware.php#porcelian">Porcelian</a>
    </div>
  </li>
  <li>
      <a href="#about">About us</a>
	  <a href="#contact">Contact us</a>
	  <a href="cus_search.php"><img src="images/search.png" width="25px" height="25px"></a> 
	  <a href="earthenware.php#list"><img src="images/wicked-basket.png" width="25px" height="25px"></a>

  </li>
</ul>
	</div>	
	</div>


	<!-- img slide -->


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="images/1.jpg" style="width:100%">
  <div class="text">HandMade Potteries</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="images/2.jpg" style="width:100%">
  <div class="text" style="color: white">Clay Ceramic teapot set</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="images/5.jpg" style="width:100%">
  <div class="text">Stoneware teapot set</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="images/11.jpg" style="width:100%">
  <div class="text">Potterian Art Branch Studio</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="images/6.jpg" style="width:100%">
  <div class="text">Products Packaging</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>

	
<script>

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
</script>

<!-- end img slide -->

<!-- start shop now with different categories -->
<h2 align="center">Shop with Different Categories</h2>	
<div class="shop">
	<div class="earthenware1">
		<a href="earthenware.php" >
		<img src="earthenware/pot8.jpg" width="100%" height="100%" class="imgcorner"></a><p><b>Earthenware Potteries</b></p>
	</div>

	<div class="stoneware1">
		<a href="earthenware.php#stoneware" >
		<img src="stoneware/1.jpg" width="100%" height="100%" class="imgcorner"></a><p><b>Stoneware Potteries</b></p>
	</div>

	<div class="porcelian1">
		<a href="earthenware.php#porcelian" >
		<img src="porcelian/1.jpg" width="100%" height="100%" class="imgcorner"></a><p><b>Porcelian Potteries</b></p>
	</div>	
</div>
<!-- end shop now with different categories -->

<!-- start about us -->
<section id="about">
	<div class="container">
		<hr color="chocolate" width="100%">
		<h2 align="center">About Potterian Art</h2>
		<div class="letter">
			<p align="justify" style="font-size: 20px">
				For over 40 years, Potterian Art has represented exceptional quality and unparalled value. A member of Williams - Sonoma, Inc. Family of brands, our home is in San Francisco, but our site, catalog and store reach around the world.
			</p>
		</div>
		<div class="img">			
		</div>
	</div>
</section>

<!-- end about us -->

<!-- start contact us -->
<section id="contact">
	<div class="container2">
		<h2><center>Contact us</center> </h2>
		<div class="location1">
			<h3>Head Quarter</h3>
			<p>
				<img src="images/location.png" width="20px" height="20px">
				 35 Street - Cheyenne, CO 80810
			</p>
			<p>
				 <img src="images/phone.png" width="25px" height="25px">
				 +123 4567 898
			</p>
			<p>
				 <img src="images/email.png" width="23px" height="23px">
				 potterianArt@gmail.com
			</p>
		</div>
		<div class="map">
			<div class="goo">
				<iframe width="100%" height="230px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2950.539193467475!2d-71.81283258524816!3d42.30969704627441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e407759a64bdff%3A0x593653d2dc24ff93!2s35%20Cheyenne%20Rd%2C%20Worcester%2C%20MA%2001606%2C%20USA!5e0!3m2!1sen!2smm!4v1590677274421!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>				
			</div>
		</div>

			<div class="location2">
			<h3>Branch</h3>
			<p>
				<img src="images/location.png" width="20px" height="20px">
				 29 Eccleston Place London 
			</p>
			<p>
				<img src="images/phone.png" width="25px" height="25px">
				 +123 4567 897
			</p>
			<p>
				 <img src="images/email.png" width="23px" height="23px">
				 potterianArt@gmail.com
			</p>
		</div>
			<div class="map1">
			<div class="goo">
				<iframe width="100%" height="230px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.051477797168!2d-0.15029318486646515!3d51.493922819510495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487605220a991da3%3A0xb2aac67874bfdb02!2s29%20Eccleston%20Pl%2C%20Belgravia%2C%20London%20SW1W%209NF%2C%20UK!5e0!3m2!1sen!2smm!4v1590678174611!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>				
			</div>
		</div>
	</div>
</section>

<!-- end contact us -->
	<hr color="chocolate" width="100%">
	<p align="center"><i><b>
	Design and Developed by Yoon Ei Shwe Zin</b></i></p>
	<hr color="chocolate" width="100%">
	<!-- all end --><!--</div>-->
	

</body>
</html>

