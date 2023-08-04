<?php
session_start();

if(isset($_SESSION["userID"])){
	
	$userID = $_SESSION["userID"];
	
	$query = $pdo->prepare("SELECT * FROM user WHERE userID = :userID");
	$query->bindParam(':userID',$userID);
	$query->execute();
	
	while($row = $query->fetch()){
			$pangalan = $row['firstname'];
			
	}
	
	
} else {
	header("location: signin.php");
	die();
}
?>