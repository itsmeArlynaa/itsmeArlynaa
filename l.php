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
			$userid = $row['id'];
			$_SESSION["id"] = $userid;
			
			header("location: about.php");
		}
		
	} else {
		echo "<script>alert('Sorry Wrong Username or Password')</script>";
		echo "<script>window.open('login.php','_self')</script>";
	}
	
	
}
?>
<html>
	<head>
		<title>Insert Data</title>
	</head>
	
	<body>
	<h1>Login Form</h1>
	<form action="" method="post">
	
		<table>
			
			<tr>
				<td>Username</td>
				<td><input type="text" name="uuser" placeholder="Enter your Username" />
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pword" placeholder="Enter your Password" />
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="login" value="Login"/>
			</tr>
		</table>
	</form>
	</body>
</html>