<?php
include_once("connection.php");

if(isset($_POST['login'])){
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
			$uid = $row['userID'];
			$_SESSION["userID"] = $userid;
			
			header("location: l.php");
		}
		
	} else {
		echo "<script>alert('Sorry Wrong Username or Password')</script>";
		echo "<script>window.open('login.php','_self')</script>";
	}
	
	
}
?>