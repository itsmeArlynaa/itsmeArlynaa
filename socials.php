<?php
include_once("connection.php");
include_once("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Social Media</title>
    
        <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    *{
	font-family: 'Poppins', sans-serif;
    padding: 0;
    margin: 0;
    }
    body{
        background: url(wave.svg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .navigation{
        margin-top: 1%;
        margin-bottom: 1%;
    }
    .una{
       display: flex;
       width: 80%;
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
    .socialmedia img{
        width: 90px;
        display: block;
        margin: auto;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    h1{
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="lagayan">
        <div class="navigation">
            <ul>
                <div class="una">
                    <li><a  href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a  class="active" href="socials.php">Socials</a></li>
                    <li><a href="buy.php">Order Now</a></li></div>
                <div class="pangalawa"> 
                    <li><a href="">My account</a></li>
                    <li><a href="logout.php">Log out</a></li></div>
            </ul>
            </div>
            <h1>Follow and contact us</h1>
            <div class="socialmedia">
                <a href="https://www.facebook.com/ailyn.hularseno"><img src="fb.png" alt=""></a>
                <a href="https://www.facebook.com/aaExplosionbox"><img src="fb.png" alt=""></a>
                <a href="aaprintsncrafts@gmail.com"><img src="gmail.png" alt=""></a>
                <a href="https://shopee.ph/aaprintsncrafts"><img src="shopee.png" alt=""></a>
                <a href="ateaiiexplosionbox101"><img src="ig.png" alt=""></a>
             
            </div>
        </div>
</body>
</html>