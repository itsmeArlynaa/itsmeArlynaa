<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUY PRODUCTS</title>
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    *{
	font-family: 'Poppins', sans-serif;
    padding: 0;
    margin: 0;
    }
    body{

        background-image: linear-gradient(to left, rgba(255,0,0,0), rgb(243, 59, 89));
    }
    .navigation{
        margin-top: 1%;
        margin-bottom: 1%;
    }
    .una{
       display: flex;
       width: 80%;
       color: rgb(253, 253, 253);
    }
    .pangalawa{
        display: flex;

        
    }
    .pangalawa a{
        color: black;
    }
    ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        display: flex;
    }   
    li a{
        text-decoration: none;
        display: block;
        border-radius: 50px;
    }
    li a:hover:not(.active) {
        background-color: #ddd;
        
    }
    li a.active {
        color: rgb(255, 255, 255);
        background-color: rgb(252, 37, 55);
    }
    .navigation a{
        margin-left: 10px;
        padding: 20px 30px; 
    }
    .wrapper >div img:hover{
-webkit-transform: scale(1.2);
-ms-transform: scale(1.2);
transform: scale(1.2);
transition: 0.1s ease;
}

/* Slideshow container */
.slideshow-container >div img:hover{
-webkit-transform: scale(1.2);
-ms-transform: scale(1.2);
transform: scale(1.2);
transition: 0.1s ease;
}
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
box-sizing:border-box

}
.slideshow-container img{
  border-radius: 50px;
}
/* Hide the images by default */
.mySlides {
  display:none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.2s ease;
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
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
    .wrapper {
  height: 420px;
  width: 654px;
  margin: 50px 50px;
  display: inline-block;
  border-radius: 7px 7px 7px 7px;
  /* VIA CSS MATIC https://goo.gl/cIbnS */
  -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  
}

.product-img {
  float: left;
  height: 420px;
  width: 327px;
}

.product-img img {
  border-radius: 7px 0 0 7px;
}

.product-info {
  float: left;
  height: 420px;
  width: 327px;
  border-radius: 0 7px 10px 7px;
  background-color: #ffffff;
}

.product-text {
  height: 300px;
  width: 327px;
}

.product-text h1 {
  margin: 0 0 0 38px;
  padding-top: 52px;
  font-size: 34px;
  color: #474747;
}



.product-text h2 {
  margin: 0 0 47px 38px;
  font-size: 13px;
  font-weight: 400;
  text-transform: uppercase;
  color: rgb(252, 37, 55);
  letter-spacing: 0.2em;
}

.product-text p {
  height: 125px;
  margin: 0 0 0 38px;
  color: #8d8d8d;
  line-height: 1.7em;
  font-size: 15px;
  font-weight: lighter;
  overflow: hidden;
}

.product-price-btn {
  height: 103px;
  width: 327px;
  margin-top: 17px;
  position: relative;
}

.product-price-btn p {
  display: inline-block;
  position: absolute;
  top: -13px;
  height: 50px;
  margin: 0 0 0 38px;
  font-size: 28px;
  font-weight: lighter;
  color: #474747;
}

span {
  display: inline-block;
  height: 50px;
  font-family: 'Suranna', serif;
  font-size: 20px;
}

.product-price-btn button {
  
  display: inline-block;
  height: 50px;
  width: 176px;
margin-left: 70px;

  box-sizing: border-box;
  border: transparent;
  border-radius: 60px;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: #ffffff;
  background-color: rgb(252, 37, 55);
  cursor: pointer;
  outline: none;
}

.product-price-btn button:hover {
  background-color: #79b0a1;
}
    </style>
</head>
<body>
    <div class="buysection">
        
        <div class="navigation">
            <ul>
                <div class="una">
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="socials.php">Socials</a></li>
                    <li><a class="active" href="">Order Now</a></li>
                </div>
                    
                <div class="pangalawa"> 
                    <li><a href="">My account</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </div>
            </ul>
            </div>
           <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="banner.jpg" style="width:100%">
      
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="xmas.jpg" style="width:100%">
      
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="88.jpg" style="width:100%">
      
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
            </div>
            <div class="wrapper">
                <div class="product-img">
                  <img src="sintra.jpg" height="420" width="327">
                </div>
                <div class="product-info">
                  <div class="product-text">
                    <h1>BOX TYPE SINTRA BOARD </h1>
                    <h2>₱50 - ₱150</h2>
                    <p>Picture Frame: Sintra Board <br>
                        Print: Ultra High Quality Setting 
                        Thickness frame:  3mm </p>
                  </div>
                  <div class="product-price-btn">
                   
                    <button type="button">buy now</button>
                  </div>
                </div>
              </div>


              <div class="wrapper">
                <div class="product-img">
                  <img src="rect.png" height="420" width="327">
                </div>
                <div class="product-info">
                  <div class="product-text">
                    <h1>RECTANGULAR SINTRA BOARD </h1>
                    <h2>₱250</h2>
                    <p>Picture Frame: Sintra Board <br>
                        Print: Ultra High Quality Setting 
                        Thickness frame:  3mm </p>
                  </div>
                  <div class="product-price-btn">
                    
                    <button type="button">buy now</button>
                  </div>
                </div>
              </div>


              <div class="wrapper">
                <div class="product-img">
                  <img src="half.jpg" height="420" width="327">
                </div>
                <div class="product-info">
                  <div class="product-text">
                    <h1>HALF FACE <br> SINTRA BOARD </h1>
                    <h2>₱150 - ₱200</h2>
                    <p>Picture Frame: Sintra Board <br>
                        Print: Ultra High Quality Setting 
                        Thickness frame:  3mm </p>
                  </div>
                  <div class="product-price-btn">
                   
                    <button type="button">buy now</button>
                  </div>
                </div>
              </div>


              <div class="wrapper">
                <div class="product-img">
                  <img src="mug.jpg" height="420" width="327">
                </div>
                <div class="product-info">
                  <div class="product-text">
                    <h1>Souvenier <br> Mug</h1>
                    <h2>₱115</h2>
                    <p>Perfect Gift for your friends and family <br>
                        Personalized with their name, favorite quote, photo etc<br> </p>
                  </div>
                  <div class="product-price-btn">
                   
                    <button type="button">buy now</button>
                  </div>
                </div>
              </div>


              <div class="wrapper">
                <div class="product-img">
                  <img src="bday.jpg" height="420" width="327">
                </div>
                <div class="product-info">
                  <div class="product-text">
                    <h1>Birthday Souvenier</h1>
                    <h2>₱25 - ₱45</h2>
                    <p>Perfect Gift for your friends and family <br>
                        Personalized with their name, favorite quote, photo etc<br> </p>
                  </div>
                  <div class="product-price-btn">
                    
                    <button type="button">buy now</button>
                  </div>
                </div>
              </div>


              <div class="wrapper">
                <div class="product-img">
                  <img src="coffee.jpg" height="420" width="327">
                </div>
                <div class="product-info">
                  <div class="product-text">
                    <h1>Coffee <br> Cups</h1>
                    <h2>₱10</h2>
                    <p>Perfect Gift for your friends and family <br>
                        Personalized with their name, favorite quote, photo etc<br> </p>
                  </div>
                  <div class="product-price-btn">
                    
                    <button type="button">buy now</button>
                  </div>
                </div>
              </div>

            
        </div>
    
</body>
</html>
<script>let slideIndex = 1;
    showSlides(slideIndex);
    
    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
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
    }</script>