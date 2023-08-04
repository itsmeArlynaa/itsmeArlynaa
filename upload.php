
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="inputtt.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>A&A</title>
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
    .form{
      float: left;
      width: 50%;
      margin-left: 200px;
      margin-top: 80px;
      width: 500px;
      height: 630px;
      background-color: rgba(248, 34, 80);
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.75);
      border-radius: 10px;
      color: rgb(255, 255, 255);
     
    }
    .form2{
      float: right;
      width: 40%;
      margin-top: 100px;
    }
    ul{
      list-style: none;
    }
    .form input[type="text"], .form textarea, .form input[type="file"]{
      width: 90%;
      margin-bottom: 10px;
      margin-top: 5px;
      padding-bottom: 20px;
      border-radius: 10px;
      border: none;
    }
    .btn{
      border: 2px solid white;
      border-radius: 10px;
      width: 20%;
      padding-left: 30px;
      padding-bottom: 10px;
      padding-top: 10px;
      margin-left: 130px;
      margin-top: 20px;
    }
    a{
      text-decoration: none;
      color: white;
    }
    h1{
      text-align: center;
    }
   </style>
   </head>
<body>

      <form class="my-form" action="insertproduct.php" method="post" enctype="multipart/form-data">
        <div class="kahon">
          <div class="form">
            <h1>Insert your Product Details Below</h1>
          <ul>
              <li>Product Name</li>
              <input type="text" placeholder="Enter your product name" name="pname" required>

              <li>Product Picture</li>
              <input type="file"  name="pimage" accept="image/*" required>

              <li>Product Description</li>
              <textarea cols="10" rows="5" placeholder="Enter your product description" name="pdescription" required></textarea>
              
              <li>Product Price</li>
              <input type="text" placeholder="Enter your product price" name="pprice" required>
              <li><input type="submit" value="Submit!" class="btn" name="add"></li>
            </ul>
          </div>
  
              
          
      </div>
      </form>
      <div class="form2">
        <img src="logo.png" alt="">
      </div>
        </div>
     
  
</body>
</html>