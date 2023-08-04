<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
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
        margin-top: 50px;
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
        padding-bottom: 10px;
    }
   button {
    font-size: 20px;
    background-color: rgb(255, 124, 150);
    background-size:initial;
    color: rgb(0, 0, 0);
    border: 0.5px solid black;
    border-radius:10px;
    padding: 5px;
    cursor: pointer;
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
            <center><h3>To keep connected with us please sign in with your username and password below</h3></center>
            <center><a href="signin.php"><input type="submit" value="Sign in"  class="signin-button"></a></center> 
        </div>

        <div class="container-2">
            <center><h1>Create an Account</h1></center>
            <form class="my-form" action="insert.php" method="post">
                
                <div class="form-group">
                <input type="hidden" placeholder="" style="width: 100%" name="userID" required>
                    <label for="">First Name</label>   <br> 
                    <input type="text" placeholder="Type your Name" style="width: 100%" name="fname" required>
                    <label for="">Middle Name</label> 
                    <input type="text" placeholder="Type your Midle Name" style="width: 100%" name="mname"><br>
                    <label for="">Last Name</label> <br>
                    <input type="text" placeholder="Type your Last Name" style="width: 100%" name="lname" required>
                    <label for="">Gender</label>
                    <select name="gender" required>
						<option value="Male" name="gender">Male</option>
						<option value="Female" name="gender">Female</option>
						<option value="other" name="gender">Other</option>
                    </select>
                    <label for="">Birthdate</label>
                    <input type="date" required name="bdate"><br>
                    <label for="">Phone Number</label><br>
                    <input type="text" placeholder="Type your Phone Number" required style="width: 100%" name="pnumber"><br>
                    <label for="">Email Address</label>
                    <input type="email" placeholder="Type your Email" required style="width: 100%" name="email">
                    <label for="">Username</label>
                    <input type="text" placeholder="Type your Username" required style="width: 100%" name="uname">
                    <label for="">Password</label>
                    <input type="text" placeholder="Type your Password" required style="width:100%" name="pword">
                    <BR></BR>
                   <center><input type="submit" value="Sign up" name="add" class="signin-button"></center> 
                   
                   
                    
                
                </div>

            </form>

        </div>
    </div>
    
</body>
</html>