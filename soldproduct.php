<?php
session_start();
include 'connection.php';

if (isset($_POST['userID']) && isset($_POST['productID'])) {
  $userID = $_POST['userID'];
  $productID = $_POST['productID'];

  try {
    $query = $pdo->prepare("INSERT INTO orders (userID, productID) VALUES (:userID, :productID)");
    $query->bindParam(':userID', $userID);
    $query->bindParam(':productID', $productID);
    $query->execute();

    echo "Order placed successfully!";
  } catch (PDOException $e) {
    echo "Order placement failed: " . $e->getMessage();
  }
} else {
  echo "Invalid request.";
}
?>
