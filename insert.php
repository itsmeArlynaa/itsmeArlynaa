<?php
include_once("connection.php");
if(isset($_POST['add'])){
    $userID= $_POST['userID'];
	$firstname= $_POST['fname'];
    $middlename = $_POST['mname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $birthdate= $_POST['bdate'];
    $phonenumber = $_POST['pnumber'];
    $email = $_POST['email'];
    $username= $_POST['uname'];
    $passwordd = sha1($_POST['pword']);
}
    $insertQuery = $pdo->prepare("INSERT INTO user (userID, firstname, middlename, lastname, gender, birthdate, phonenumber, email, username, passwordd) 
	VALUES (:userID, :ufname, :umname, :ulname, :ugender, :udate, :unumber, :uemail, :uuser, :upword)");
    $insertQuery->bindParam(':userID', $userID);
    $insertQuery->bindParam(':ufname',$firstname);
    $insertQuery->bindParam(':umname',$middlename);
    $insertQuery->bindParam(':ulname',$lastname);
    $insertQuery->bindParam(':ugender',$gender);
    $insertQuery->bindParam(':udate',$birthdate);
    $insertQuery->bindParam(':unumber',$phonenumber);
    $insertQuery->bindParam(':uemail',$email);
    $insertQuery->bindParam(':uuser',$username);
    $insertQuery->bindParam(':upword',$passwordd);
    $insertQuery->execute();

    echo "<script>alert('Successfully Registered')</script>";
    echo "<script>window.open('signup.php','_self')</script>";
?> 