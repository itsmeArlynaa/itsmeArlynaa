<?php
include_once("connection.php");
include_once("session.php");
if(isset($_POST['add'])){
    $productName = $_POST['pname'];
	$productDescription = $_POST['pdescription'];
	$productPrice = $_POST['pprice'];

	// image process
	
	$productPicture = $_FILES['pimage']['name'];
	$tempName = $_FILES['pimage']['tmp_name'];
	$size = $_FILES['pimage']['size'];
	
	//UPLOAD PATH
	$path = 'productPicture/';
	
	//TO GET THE IMAGE EXTENTION
	$imgExt = strtolower(pathinfo($productPicture, PATHINFO_EXTENSION));
	
	//acceptable file ext
	$validExt = array('jpg','jpeg','png','gif','webp');
	
	//new name once uploaded
	$newname = rand(1000, 99999).".".$imgExt;
	
	if(in_array($imgExt,$validExt)){
		if($size < 5000000000){ 
			move_uploaded_file($tempName,$path.$newname);
		} else {
			echo "<script>alert('Sorry! your file is to large')</script>";
			echo "<script>window.open('upload.php','_self')</script>";
		}
	} else {
		echo "<script>alert('Sorry! Invalid Extension')</script>";
		echo "<script>window.open('upload.php','_self')</script>";
	}
	
	
	//end image process
	
	$insertQuery = $pdo->prepare("INSERT INTO products (productPicture, productName, productDescription, productPrice) 
	VALUES (:uPicture, :uName, :uDescription, :uPrice)");
	$insertQuery->bindParam(':uPicture',$newname);
	$insertQuery->bindParam(':uName',$productName);
	$insertQuery->bindParam(':uDescription',$productDescription);
	$insertQuery->bindParam(':uPrice',$productPrice);
	
	$insertQuery->execute();
	
	echo "<script>alert('Successfully Register')</script>";
	echo "<script>window.open('buy1.php','_self')</script>";
}
?>