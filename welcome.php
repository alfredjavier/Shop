<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: indexlog.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my Homepage</title>
      <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,100;1,200;1,300&display=swap" rel="stylesheet">
</head>
<body>
   

<nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="home.html">Your Logo</a>
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
            <li><a href="welcome.php">Home</a></li>
            <li><a href="index.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="History.php">About us</a></li>
            </ul>
        </div>
        <span class="navTrigger">
            <i></i>
            <i></i>
            <i></i>
        </span>
    </div>
</nav>

<section class="home">
</section>

    <!-- Product -->
        <div class="small-container">
            <h2 class="title">Featured Products</h2>
            <div class="row2">
                <div class="col-4">
                    <img src="images/p1-min.jpg">
                    <h4>Black Hoodie</h4>
                    <div class="rating">
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star-half"></span1>
<span>(3896)</span>
                    </div>
                    <p>₱500.00</p>
                   
                </div>
                <div class="col-4">
                    <img src="images/p2-min.jpg">
                    <h4>Double-Color T-shirt</h4>
                    <div class="rating">
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star-o"></span1>
<span>(3542)</span>
                    </div>
                    <p>₱800.00</p>
                   
                </div>
                <div class="col-4">
                    <img src="images/p3-min.jpg">
                    <h4>Multi-color RainCoat</h4>
                    <div class="rating">
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star-half"></span1>
<span1 class="fa fa-star-o"></span1>
<span>(4385)</span>
                    </div>
                    <p>₱600.00</p>
                   
                </div>
                <div class="col-4">
                    <img src="images/p4-min.jpg">
                    <h4>T-shirt Ghost</h4>
                    <div class="rating">
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star-o"></span1>
<span>(3214)</span>
                    </div>
                    <p>₱600.00</p>
                    
                </div>
            </div>
            <h2 class="title">Latest Products</h2>
            <div class="row2">
                <div class="col-4">
                    <img src="images/p5-min.jpg">
                    <h4>Cristos T-shirt</h4>
                    <div class="rating">
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star-o"></span1>
<span>(4513)</span>
                    </div>
                    <p>₱500.00</p>
                   
                </div>
                <div class="col-4">
                    <img src="images/p6-min.jpg">
                    <h4>Valenciaga Comouflage Jacket</h4>
                    <div class="rating">
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star-half"></span1>
<span1 class="fa fa-star-o"></span1>
<span1 class="fa fa-star-o"></span1>
<span>(3954)</span>
                    </div>
                    <p>₱700.00</p>
                   
                </div>
                <div class="col-4">
                    <img src="images/p7-min.jpg">
                    <h4>Black Jacket With Monalisa Print</h4>
                    <div class="rating">
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star-half"></span1>
<span1 class="fa fa-star-o"></span1>
<span1 class="fa fa-star-o"></span1>
<span>(3584)</span>
                    </div>
                    <p>₱600.00</p>
                  
                </div>
                <div class="col-4">
                    <img src="images/p8-min.jpg">
                    <h4>White Long-sleeve & Belt </h4>
                    <div class="rating">
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star-half"></span1>
<span>(4562)</span>
                    </div>
                    <p>₱800.00</p>
                  
                </div>
            </div>
            <div class="row2">
                <div class="col-4">
                    <img src="images/p9-min.jpg">
                    <h4>Black T-shirt & rainbow Stripe</h4>
                    <div class="rating">
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star-half"></span1>
<span1 class="fa fa-star-o"></span1>
<span>(4321)</span>
                    </div>
                    <p>₱600.00</p>
                   
                </div>
                <div class="col-4">
                    <img src="images/p10-min.jpg">
                    <h4>Light Blue Cloud T-Shirt</h4>
                    <div class="rating">
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star-o"></span1>
<span1 class="fa fa-star-o"></span1>
<span1 class="fa fa-star-o"></span1>
<span1 class="fa fa-star-o"></span1>
<span>(1342)</span>
                    </div>
                    <p>₱850.00</p>
                    
                </div>
                <div class="col-4">
                    <img src="images/p11-min.jpg">
                    <h4>T-shirt flay lay</h4>
                    <div class="rating">
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star-o"></span1>
<span1 class="fa fa-star-o"></span1>
<span1 class="fa fa-star-o"></span1>

<span>(2312)</span>
                    </div>
                    <p>₱900.00</p>
                    
                </div>
                <div class="col-4">
                    <img src="images/p12-min.jpg">
                    <h4>Black Hoodie</h4>
                    <div class="rating">
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star checked"></span1>
<span1 class="fa fa-star-half"></span1>
<span1 class="fa fa-star-o"></span1>
<span>(3256)</span>
                    </div>
                    <p>₱550.00</p>
                   
                </div>
            </div>
        </div>

        <!-- footer -->
          <div class="footerr">
<nav class="footer-inner">
    <section class="footer-item">
        <h1>LOGO</h1>

        <h2>We create possibilities <br>for the connected world.<br><b class="color">Be Bold.</b></h2>
    </section>

    <section class="footer-item">
        <h3>Explore</h3>
        <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="product.html">Products</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="History.html">About</a></li>
        </ul>
    </section>

    <section class="footer-item">
        <h3>Visit</h3>
        <a href="#">
            <p>Envoy So. California</p>
            <p>34 Tesla, Ste 100</p>
            <p>Irvine, Ca, USA 92618</p>
        </a>

        <h3 class="desktop">New Business</h3>
        <p class="desktop"><a href="#">engage@weareenvoy.com</a></p>
        <p class="desktop"><a href="#">949.333.3106</a></p>
    </section>

    <section class="footer-item">
        <h3>New Business</h3>
        <p><a href="#">Email us</a></p>
        <p><a href="#">949.333.3106</a></p>
    </section>

    <section class="footer-item">
        <h3>Follow</h3>
        <ul>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">LinkedIn</a></li>
        </ul>
    </section>

    <section class="footer-item">
        <h3>Legal</h3>
        <ul>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
        </ul>
    </section>

    <section class="footer-item">

    </section>
</nav>



</div>

        
              
            
        
          
        <!-- Jquery needed -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>
        
        <!-- Function used to shrink nav bar removing paddings and adding black background -->
        <script>
            $(window).scroll(function () {
                if ($(document).scrollTop() > 50) {
                    $('.nav').addClass('affix');
                    console.log("OK");
                } else {
                    $('.nav').removeClass('affix');
                }
            });
        </script>
        
        <script>
            $('.navTrigger').click(function () {
                $(this).toggleClass('active');
                console.log("Clicked menu");
                $("#mainListDiv").toggleClass("show_list");
                $("#mainListDiv").fadeIn();

            });

        </script>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}

span1 {
  color: #faca51;
  height: 12px;
  width: 12px;
}
h4 {
  color: #111;
  font-size: 20px;
  padding: 10px 1px;
  margin: auto;
}

p {
  margin-left: 1px 1px;
}
.row1 {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  justify-content: space-around;
  position: relative;
  bottom: 40px;
}
.row2 {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  justify-content: space-around;
  position: relative;
}
.row3 {
  display: flex;
  align-items: left;
  flex-wrap: wrap;
  justify-content: space-around;
  position: relative;
  right: 25%;
}
.col-2 {
  flex-basis: 50%;
  min-width: 200px;
}

.col-2 img {
  max-width: 100%;
  padding: 131px 0;
}
.col-2 h1 {
  font-size: 50px;
  line-height: 60px;
  margin: 25px 0;
}

.btn {
  display: inline-block;
  background: #ff523b;
  color: #fff;
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 30px;
  transition: background 0.5s;
  font-size: 10px;
}
.headers {
  background-color: #c0c0c0;
}
.headers .row {
  margin-top: 200px;
}

.btn:hover {
  background: #563434;
}

.categories {
  margin: 70px 0;
}

.col-3 {
  flex-basis: 30%;
  min-width: 250px;
  margin-bottom: 30px;
}
.col-3 img {
  width: 100%;
}

.small-container {
  height: auto;
  padding: 30px;
  max-width: 1000px;
  margin: auto;
  padding-top: 20px;
  padding-left: 25px;
}

.col-4 {
  flex-basis: 25%;
  padding: 10px;
  min-width: 200px;
  margin-bottom: 50px;
  transition: transform 0.5s;
}

.col-4 img {
  width: 100%;
}

.title {
  text-align: center;
  margin: 0 auto 80px;
  position: relative;
  line-height: 60px;
  color: #555;
  font-size: 30px;
  font-family: roboto;
}

.col-4 p {
  font-size: 14px;
}

.col-4:hover {
  transform: translateY(-5px);
  box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
}
/* brands */
.brands {
  margin: 100px auto;
}
.col-5 {
  width: 160px;
}

.col-6 {
  margin-top: 10%;
  flex-basis: 40%;
  font-size: 20px;
  line-height: 50px;
  margin-left: 50px;
  margin-bottom: 20%;
}
.col-6 img {
  padding-left: 20px;
  flex: auto;
  margin-left: 90px;
}
.col-6 p {
  font-size: 18px;
  line-height: 20px;
}
.col-5 img {
  width: 100%;
  cursor: pointer;
  filter: grayscale(100%);
}
.col-5 img:hover {
  filter: grayscale(0);
}

/* all products */
.row-2 {
  justify-content: space-between;
  margin: 100px auto 50px;
}

/* selection */

.selectdiv {
  position: relative;

  /*Don't really need this just for demo styling*/

  float: left;
  min-width: 200px;
  margin: 1px 1%;
}

/* IE11 hide native button (thanks Matt!) */
select::-ms-expand {
  display: none;
}

.selectdiv select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  /* Add some styling */

  display: block;
  width: 250%;
  max-width: 400px;
  height: 50px;
  float: left;
  margin: 1px 1px;
  padding: 1px 1px;
  font-size: 25px;
  line-height: 1.75;
  color: #333;
  background-color: #ffffff;
  background-image: none;
  border: 1px solid #cccccc;
  -ms-word-break: normal;
  word-break: normal;
}
/* btn add to cart */

.bttn {
  display: inline-block;
  background: #ff523b;
  color: #fff;
  padding: 0px 35px;
  margin: 20px 0;
  border-radius: 30px;
  transition: background 0.5s;
  font-size: 15px;
}
.bttn:hover {
  background: #563434;
}

/* single product */
.single-product .col-6 {
  padding: 20px;
}

.single-product input {
  width: 50px;
  height: 48px;
  padding-left: 10px;
  font-size: 20px;
  margin-right: 10px;
  border: 1px solid #ff523b;
}

.small-img-row {
  display: flex;
  justify-content: space-between;
}

* {
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
}

.hero {
  height: 100vh;
  width: 100%;
  background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
    url(https://i.postimg.cc/QCCpjgRN/vincent-chan-04-Kmj0pru5-M-unsplash.jpg);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  position: absolute;
}

.form-box {
  width: 380px;
  height: 480px;
  position: relative;
  margin: 6% auto;
  background: #fff;
  padding: 5px;
  overflow: hidden;
}

.button-box {
  width: 220px;
  margin: 35px auto;
  position: relative;
  box-shadow: 0 0 20px 9px #4a3b54;
  border-radius: 30px;
}

.toggle-btn {
  padding: 10px 30px;
  cursor: pointer;
  background: transparent;
  border: 0;
  outline: none;
  position: relative;
}

.social-icons {
  margin: 30px auto;
  text-align: center;
}

.social-icons img {
  width: 30px;
  margin: 0 12px;
}

.input-group {
  top: 180px;
  position: absolute;
  width: 280px;
  transition: 0.5s;
}

.input-field {
  width: 100%;
  padding: 10px 0;
  margin: 5px 0;
  border-left: 0;
  border-top: 0;
  border-right: 0;
  border-bottom: 1px solid #999;
  outline: none;
  background: transparent;
}

.submit-btn {
  width: 85%;
  padding: 10px 30px;
  cursor: pointer;
  display: block;
  margin: auto;
  background: linear-gradient(to right, #46588c, #d46e75);
  border: 0;
  outline: none;
  border-radius: 30px;
}

.check-box {
  margin: 30px 10px 30px 0;
}

#login {
  left: 50px;
}

#register {
  left: 450px;
}

@import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,700');
html,
body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Quicksand', sans-serif;
  font-size: 62.5%;
  font-size: 10px;
}

/*-- Inspiration taken from abdo steif -->
/* --> https://codepen.io/abdosteif/pen/bRoyMb?editors=1100*/

/* Navbar section */

.nav {
  width: 100%;
  height: 65px;
  position: fixed;
  line-height: 65px;
  text-align: center;
}

.nav div.logo {
  float: left;
  width: auto;
  height: auto;
  padding-left: 3rem;
}

.nav div.logo a {
  text-decoration: none;
  color: #fff;
  font-size: 2.5rem;
}

.nav div.logo a:hover {
  color: #00e676;
}

.nav div.main_list {
  height: 65px;
  float: right;
}

.nav div.main_list ul {
  width: 100%;
  height: 65px;
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.nav div.main_list ul li {
  width: auto;
  height: 65px;
  padding: 0;
  padding-right: 3rem;
}

.nav div.main_list ul li a {
  text-decoration: none;
  color: white;
  line-height: 65px;
  font-size: 2.4rem;
}

.nav div.main_list ul li a:hover {
  color: #00e676;
}

/* Home section */

.home {
 width: 100%;
  height: 100vh;
  background: url(images/shopshop.jpg);
  background-position: center top;
  background-size: cover;
}

.navTrigger {
  display: none;
}

.nav {
  padding-top: 20px;
  padding-bottom: 20px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  z-index: 3;
}

/* Media qurey section */

@media screen and (min-width: 768px) and (max-width: 1024px) {
  .container {
    margin: 0;
  }
}

@media screen and (max-width: 768px) {
  .navTrigger {
    display: block;
  }
  .nav div.logo {
    margin-left: 15px;
  }
  .nav div.main_list {
    width: 100%;
    height: 0;
    overflow: hidden;
  }
  .nav div.show_list {
    height: auto;
    display: none;
  }
  .nav div.main_list ul {
    flex-direction: column;
    width: 100%;
    height: 100vh;
    right: 0;
    left: 0;
    bottom: 0;
    background-color: #111;
    /*same background color of navbar*/
    background-position: center top;
  }
  .nav div.main_list ul li {
    width: 100%;
    text-align: right;
  }
  .nav div.main_list ul li a {
    text-align: center;
    width: 100%;
    font-size: 3rem;
    padding: 20px;
  }
  .nav div.media_button {
    display: block;
  }
}

/* Animation */
/* Inspiration taken from Dicson https://codemyui.com/simple-hamburger-menu-x-mark-animation/ */

.navTrigger {
  cursor: pointer;
  width: 30px;
  height: 25px;
  margin: auto;
  position: absolute;
  right: 30px;
  top: 0;
  bottom: 0;
}

.navTrigger i {
  background-color: #fff;
  border-radius: 2px;
  content: '';
  display: block;
  width: 100%;
  height: 4px;
}

.navTrigger i:nth-child(1) {
  -webkit-animation: outT 0.8s backwards;
  animation: outT 0.8s backwards;
  -webkit-animation-direction: reverse;
  animation-direction: reverse;
}

.navTrigger i:nth-child(2) {
  margin: 5px 0;
  -webkit-animation: outM 0.8s backwards;
  animation: outM 0.8s backwards;
  -webkit-animation-direction: reverse;
  animation-direction: reverse;
}

.navTrigger i:nth-child(3) {
  -webkit-animation: outBtm 0.8s backwards;
  animation: outBtm 0.8s backwards;
  -webkit-animation-direction: reverse;
  animation-direction: reverse;
}

.navTrigger.active i:nth-child(1) {
  -webkit-animation: inT 0.8s forwards;
  animation: inT 0.8s forwards;
}

.navTrigger.active i:nth-child(2) {
  -webkit-animation: inM 0.8s forwards;
  animation: inM 0.8s forwards;
}

.navTrigger.active i:nth-child(3) {
  -webkit-animation: inBtm 0.8s forwards;
  animation: inBtm 0.8s forwards;
}

@-webkit-keyframes inM {
  50% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(45deg);
  }
}

@keyframes inM {
  50% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(45deg);
  }
}

@-webkit-keyframes outM {
  50% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(45deg);
  }
}

@keyframes outM {
  50% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(45deg);
  }
}

@-webkit-keyframes inT {
  0% {
    -webkit-transform: translateY(0px) rotate(0deg);
  }
  50% {
    -webkit-transform: translateY(9px) rotate(0deg);
  }
  100% {
    -webkit-transform: translateY(9px) rotate(135deg);
  }
}

@keyframes inT {
  0% {
    transform: translateY(0px) rotate(0deg);
  }
  50% {
    transform: translateY(9px) rotate(0deg);
  }
  100% {
    transform: translateY(9px) rotate(135deg);
  }
}

@-webkit-keyframes outT {
  0% {
    -webkit-transform: translateY(0px) rotate(0deg);
  }
  50% {
    -webkit-transform: translateY(9px) rotate(0deg);
  }
  100% {
    -webkit-transform: translateY(9px) rotate(135deg);
  }
}

@keyframes outT {
  0% {
    transform: translateY(0px) rotate(0deg);
  }
  50% {
    transform: translateY(9px) rotate(0deg);
  }
  100% {
    transform: translateY(9px) rotate(135deg);
  }
}

@-webkit-keyframes inBtm {
  0% {
    -webkit-transform: translateY(0px) rotate(0deg);
  }
  50% {
    -webkit-transform: translateY(-9px) rotate(0deg);
  }
  100% {
    -webkit-transform: translateY(-9px) rotate(135deg);
  }
}

@keyframes inBtm {
  0% {
    transform: translateY(0px) rotate(0deg);
  }
  50% {
    transform: translateY(-9px) rotate(0deg);
  }
  100% {
    transform: translateY(-9px) rotate(135deg);
  }
}

@-webkit-keyframes outBtm {
  0% {
    -webkit-transform: translateY(0px) rotate(0deg);
  }
  50% {
    -webkit-transform: translateY(-9px) rotate(0deg);
  }
  100% {
    -webkit-transform: translateY(-9px) rotate(135deg);
  }
}

@keyframes outBtm {
  0% {
    transform: translateY(0px) rotate(0deg);
  }
  50% {
    transform: translateY(-9px) rotate(0deg);
  }
  100% {
    transform: translateY(-9px) rotate(135deg);
  }
}

.affix {
  padding: 0;
  background-color: #111;
}

.myH2 {
  text-align: center;
  font-size: 4rem;
}
.myP {
  text-align: justify;
  padding-left: 15%;
  padding-right: 15%;
  font-size: 20px;
}
@media all and (max-width: 700px) {
  .myP {
    padding: 2%;
  }
}

/* // footer */

footer {
  font-family: 'Lato', sans-serif;
}

.footer-inner {
  width: 90%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 150px;
  margin-bottom: 100px;
  max-width: 1170px;
  position: relative;
  padding-top: 60px;
}

.footer-item {
  float: left;

  margin: 0 7.2% 0 0;
}

.footer-item:nth-of-type(4) {
  display: none;
}

.footer-item:nth-of-type(7) {
  float: right;
  margin-right: 0;
}

.footer-button {
  color: white;
  position: relative;
  font-weight: 400;
  font-size: 16px;
  transition: 1s;
  transition-delay: 0.2s;
  padding: 14px;
}

.footer-button:after {
  content: '';
  position: absolute;
  top: 45px;
  right: 13px;
  height: 1px;
  width: 86px;
  transition: 0.6s;
}

.footer-button:hover {
  color: white;
}

.footer-button:hover:after {
  width: 112px;
  right: 0px;
}

h1 {
  font-weight: 900;
  color: white;
  font-size: 24px;
  letter-spacing: 2px;
  margin: 0;
  padding-bottom: 50px;
}

h2 {
  font-weight: 300;
  line-height: 1.8;
  font-size: 13px;
  color: white;
  letter-spacing: 0.03em;
  padding: 15px 0 0 0;
}

.color {
  color: white;
  font-weight: 400;
}

h3 {
  font-weight: 400;
  font-size: 13px;
  color: white;
  margin: 0;
  padding-bottom: 9px;
  letter-spacing: 0.03em;
}

h3.desktop {
  padding-top: 30px;
}

ul {
  line-height: 1.8;
  list-style-type: none;
  padding: 0;
}

li {
  font-weight: 300;
  font-size: 13px;
  color: white;
  letter-spacing: 0.03em;
}

p {
  font-weight: 300;
  font-size: 13px;
  padding: 0;
  line-height: 1.8;
  letter-spacing: 0.03em;
}

a {
  text-decoration: none;
  color: white;
}

a:hover {
  color: white;
}

.desktop {
  display: auto;
}

.footer-inner:after {
  content: '© 2020 Envoy. All Rights Reserved.';
  font-weight: 300;
  letter-spacing: 0.03em;
  font-size: 13px;
  color: white;
  position: absolute;
  top: 260px;
  clear: both;
  display: block;
}

@media (max-width: 1024px) {
  footer {
    padding: 50px 0 70px 0 !important;
  }

  .footer-inner {
    border-bottom: 1px solid #333;
    padding-bottom: 490px;
    margin-bottom: 50px;
  }

  .footer-item {
    margin: 0 0 42px 0;
    width: 50%;
  }

  .footer-item:nth-of-type(1) {
    border-bottom: 1px solid #333;
    padding-bottom: 32px;
    float: none;
    width: 100%;
  }

  .footer-item:nth-of-type(2) {
    clear: both;
  }

  .footer-item:nth-of-type(4) {
    clear: both;
    display: block;
  }

  .footer-item:nth-of-type(6) {
    clear: both;
  }

  .footer-item:nth-of-type(7) {
    clear: both;
    float: left;
    margin: 20px 0 0 -13px;
  }

  .desktop {
    display: none;
  }

  .footer-inner:after {
    top: 730px;
  }
}

.footerr {
  background-color: black;
  height: 30vh;
  width: 100%;
}





</style>



</body>
</html>