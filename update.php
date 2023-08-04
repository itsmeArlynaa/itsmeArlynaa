<?php
include_once("connection.php");
$pid = $_GET['pid'];

$select = $pdo->prepare("SELECT * FROM products WHERE productID = '$pid'");
$select->execute();


while($rows = $select->fetch()){
			$productPicture = $rows['productPicture'];
			$productName = $rows['productName'];
			$productDescription = $rows['productDescription'];
			$productPrice = $rows['productPrice'];
			
}
	
	if(isset($_POST['update'])){
	$productPicture = $_FILES['pimage']['name'];
	$productName = $_POST['pname'];
	$productDescription = $_POST['pdescription'];
	$productPrice = $_POST['pprice'];

	
$updateQuery = $pdo->prepare("UPDATE products  SET productPicture=:uPicture, productName= :uName, productDescription=:uDescription,
 productPrice=:uPrice   WHERE productID = '$pid'");
	$updateQuery->bindParam(':uPicture',$productPicture);
	$updateQuery->bindParam(':uName',$productName);
	$updateQuery->bindParam(':uDescription',$productDescription);
	$updateQuery->bindParam(':uPrice',$productPrice);
	
	$updateQuery->execute();
	
	echo "<script>alert('Successfully Updated')</script>";
	echo "<script>window.open('view.php','_self')</script>";
}
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

*{ 
	margin:0;
	padding:0;
	font-family: 'Poppins', sans-serif;
}
body{
	background: url(wave.svg);
	background-repeat:none;
	background-size:cover;
}
.container{
	
	width: 70%;
	margin:auto;
	margin-top:100px;
	border-radius:5px;

}
.form-group{
	padding:10px;
}
.form-group input[type="text"], .my-form textarea, .my-form input [type="file"]{
	width:100%;
	border-radius:5px;
	background:transparent;
	border:2px solid black;
}
.button{
	text-align:center;
	padding-bottom:10px;
}
textarea{
	border-radius:5px;
	border:2px solid black;
	background:transparent;
}

</style>

 <form  action="" method="post" enctype="multipart/form-data">
 <div class="container">
 <h1>UPDATE PRODUCTS</h1>

       
            
						<div class="form-group">
							
								 <div class="form-group">
									<span>Product Name</span>
									<input type="text" name="pname" value="<?php echo $productName;?>">
								  </div>
								  
										
											 <div class="form-group">
												<span class="details">Product Description</span>
												<textarea cols="160" rows="3" name="pdescription"  value="<?php echo $productDescription;?>" ></textarea>
											  </div>
													 <div class="form-group">
														<span class="details">Product Price</span>
														<input type="text" name="pprice" value="<?php echo $productPrice;?>">
											</div> 
															
																
																<div class="form-group">
																	<span >Product Picture</span>
																	<input type="file"  name="pimage" accept="image/*" value="<?php echo $productPicture;?>" >
																</div>
																
															  </div> 
																	<div class="button">
																	<input type="submit" name="update" value="UPDATE RECORDS">
																</div>
						</div>
						</form>
        </form>