<?php
include_once("connection.php");

if(isset($_POST['signin'])){
	$username = $_POST['uuser'];
	$passwordd = sha1($_POST['pword']);
	
	session_start();
	
	$query = $pdo->prepare("SELECT * FROM user WHERE username=:uuser AND passwordd =:pword");
	$query->bindParam(':uuser',$username);
	$query->bindParam(':pword',$passwordd);
	$query->execute();
	
	$bilang = $query->rowCount();
	
	if($bilang > 0){
		while($row = $query->fetch()){
			$userid = $row['userID'];
			$_SESSION["userID"] = $userid;
			
			header("location: shop.php");
		}
		
	} else {
		echo "<script>alert('Sorry Wrong Username or Password')</script>";
		echo "<script>window.open('signin.php','_self')</script>";
	}
	
	
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    *{
	font-family: 'Poppins', sans-serif;
    }
    body{
        background-image: url(bg.svg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    .container{
        background-color: rgb(253, 253, 253);
        display: flex;
        border-radius: 10px;
        max-width: 70%;
        margin: auto;
        margin-top: 6%;
    }
    .container-1{
        float: left;
        width: 40%;
        height: 600px;
        box-sizing: border-box;
        background-image: url(wave.svg);
        background-size: cover;
        border-radius: 10px;
        border: none;
    }
    .container-1 img{

        width: 200px;
        padding: 40px 120px ;
    }
    .container-1 button{
        margin-top: 20px;
        margin-left: 150px;
    }
    .container-2 button{
       
        margin-left: 200px;
    }
    .container-2{
        
        margin-left: 20px;
        box-sizing: border-box;
        float: right;
        width: 60%;
        padding: 20px;
    }
    .my-form{
        padding-bottom: 20px;
    }
   button{
    font-size: 20px;
    background-color: rgb(255, 124, 150);
    background-size:initial;
    color: rgb(0, 0, 0);
    border: 0.5px solid black;
    border-radius:10px;
    padding: 8px;
   }
   .container-2 a{
    font-size: 20px;
    background-color: rgb(255, 124, 150);
    background-size:initial;
    color: rgb(0, 0, 0);
    border-radius:10px;
    padding: 8px;
   }
   .signin-button {
    background-color: rgb(255, 124, 150);
    color: black;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.25);
  }
  .signin-button:hover {
    background-color: pink;
  }

   
    </style>
</head>
<body>
    <div class="container">

        <div class="container-1">
            <img src="logo.png" alt="logo">
           <center><h1> Welcome Back!</h1></center> 
            <center><h3>To keep connected with us please login with your personal info</h3></center>
           
           <center><a href="signup.php"><input type="submit" value="Sign up" class="signin-button"></a></center> 
        </div>

        <div class="container-2">
            <center><h1>Already have an account? </h1></center>
           <form class="my-form" action="" method="post">
                <div class="form-group">
                    
                   
                    <label for="">Username</label>
                    <input type="text" placeholder="Type your Username" name="uuser" required style="width: 90%">
                    <label for="">Password</label>
                    <input type="text" placeholder="Type your Password" name="pword" required style="width: 90%">
                    <BR></BR>
                    <center><input type="submit" value="Sign In" name="signin" class="signin-button"></center>
                
                </div>

            </form>

        </div>
    </div>
</body>
</html>
