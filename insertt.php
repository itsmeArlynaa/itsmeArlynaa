<?php
include_once("connection.php");
if(isset($_POST['sigin'])){
    $username= $_POST['uuser'];
    $passwordd= $_POST['pword'];
}
    $insertQuery = $pdo->prepare("INSERT INTO user (username, passwordd) 
	VALUES (:uuser, :upword)");

  
    $insertQuery->bindParam(':uuser',$username);
    $insertQuery->bindParam(':upword',$password);
    $insertQuery->execute();

    echo "<script>alert('Log-in Successfully ')</script>";
?> 