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
    <title>Shop</title>
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
    
    .container3 {
        float: left;
        margin: 50px 40px;
        width: 50%;
    }
    h1{
        font-size: 80px;
        text-align: center;
        padding-bottom: 50px;
    }
    h3{
        font-size: 30px;
        text-align: center;
        padding-bottom: 20px;
    }
    h4{
        font-size: 20px;
        text-align: center;
        padding-bottom: 40px;
    }
    .order{
        text-align: center;
        color: rgb(255, 255, 255);
        background-color: rgb(252, 37, 55);
        margin-left: 35%;
        width: 30%;
        padding: 10px;
        border-radius: 40px;
       
        
    }
    .order a{
        text-decoration: none;
        color: rgb(255, 255, 255)    ;
       
    }
    .container4{
       float: right;
       width: 40%;
    }
    .container4 img{
        margin-top: 7%;
        margin-right: 1%;
    }
    
    </style>
</head>
<body>
    
    <div class="lagayan">
        <div class="navigation">
            <ul>
                <div class="una">
                    <li><a  class="active" href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="socials.php">Socials</a></li>
                    <li><a  href="buy.php">Order Now</a></li></div>
                    
                <div class="pangalawa"> 
                    <li><a href="">My account</a></li>
                    <li><a href="logout.php">Log out</a></li></div>
               
            </ul>
       
            </div>
        </div>
       <div class="container3">

        <h1>A&A Prints n' Crafts Est. 2017</h1>
        <h3>This store provides unique and quality gift items.</h3>
        <h4>“Great things are done by a series of small things"</h4>
        

        <div class="order">
            <div class="vertical-center">
                <a href="buy1.php">Order Now</a>

            </div>
       </div>
    </div>
    <div class="container4">
        <img src="logo.png" alt="">
    
    </div>
       
</body>
</html>
