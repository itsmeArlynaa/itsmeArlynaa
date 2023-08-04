<?php
include_once("connection.php");
$pid = $_GET['pid'];
$deleteQuery = $pdo->prepare("DELETE FROM products WHERE productID = :id");
$deleteQuery->bindParam(':id',$pid);
$deleteQuery->execute();
echo "<script>alert('Succesfully Deleted!')</script>";
echo "<script>window.open('view.php','_self')</script>";
?>