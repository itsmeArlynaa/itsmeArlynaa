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
    <title>About Us</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    *{
	font-family: 'Poppins', sans-serif;
    }
    body{
        background-image: url(wave.svg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .navigation{
        margin-top: 1%;
        margin-bottom: 1%;
    }
    .una{
       display: flex;
       width: 70%;
    }
    .una img{
        width: 80px;
        height: 70px;
       margin-left: 200%;
    }
    .pangalawa{
        display: flex;
        width: 30%;
        float: right;
        margin-left: 50px;

        
    }
    .pangalawa a{
        color:black
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
    .container{
        display: flex;
        border-radius: 10px;
        max-width: 70%;
        margin: auto;
        margin-top: 6%;
    }
    h1{
        font-size: 40px;
    }
    h2{
        font-size: 20px;
    }
    .container1{
        float: left;
        width: 40%;
    }

    
    .container2{
        text-align: center;
        border: 0.5px solid black;
        padding-bottom: 50px;
        border-radius: 30px;
        
       
    }
    .container2 ul{
        text-align: center;
        padding-top: 10px;
        
    }
    .container2 li{
        background-color: rgb(252, 37, 55);
        color: rgb(255, 255, 255);
        border-radius: 10px;
        margin-left: 15px;
        margin-right: 15px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 10px;
        padding-right: 10px;
     
    }
    h3{
        text-align: center;
        padding-top: 30px;
        padding-bottom: 20px;
        font-size: 30px;
    }
    
  li{
    text-align: center;
    list-style: none;
    padding-bottom: 20px;
    padding-right: 20px;
    font-size: 18px;
   }
   .sample{
    padding: 20px 20px;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
   }
   .sample >div{
    width: 100px;
    height: 150px;
    flex-basis: 15%;
    margin-bottom: 1rem;
    
   }
   .sample >div img{
    width: 200px;
    height: 150px;
    transition: 0.1s ease;
    
   }
   .sample >div img:hover{
-webkit-transform: scale(1.2);
-ms-transform: scale(1.2);
transform: scale(1.2);
transition: 0.1s ease;
}

   
    </style>
</head>

<body>
    
    <div class="navigation">
        <ul>
            <div class="una">
                <li><a  href="shop.php">Shop</a></li>
                <li><a class="active" href="about.html">About</a></li>
                <li><a href="socials.php">Socials</a></li>
                <li><a href="buy.php">Order Now</a></li>
                <li><img src="logo.png" alt=""></li>
            </div>
            <div class="pangalawa"> 
                
                <li><a href="">My account</a></li>
                <li><a href="logout.php">Log out</a></li></div>
           
        </ul>
   
        </div>
    </div>
    
    <div class="container2">
         <h3>Services offered:</h3>
<ul>
    <li> Layouts for Invitations Printing </li>
    <li>Sintra Board Wall Decor Frames </li>
    <li>Personalized items</li>
    <li>Souvenirs</li>
    <li>Sticker Labels</li>
    <li>Gift items</li>
    <li>Explosion box</li>
</ul>
    </div>

</div>
<br><br>

<div class="sample">
 
<div><img src="14.png" ></div>
<div><img src="2.png" alt=""></div>
<div><img src="3.png" ></div>
<div><img src="4.png" ></div>
<div><img src="5.png" ></div>
<div><img src="6.png" ></div>
  
<div><img src="13.png" ></div>
<div><img src="8.png" ></div>
<div><img src="9.png" ></div>
<div><img src="15.png" ></div>
<div><img src="11.png" ></div>
<div><img src="12.png" ></div>
  
<div><img src="7.png" ></div>
<div><img src="souv.png" ></div>
<div><img src="10.png" ></div>
<div><img src="16.png" ></div>
<div><img src="17.png" ></div>
<div><img src="18.png" ></div>
</div>

</body>
</html>