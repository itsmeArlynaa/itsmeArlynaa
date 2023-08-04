<?php
include_once("connection.php");
?>
<head>
	<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

*{ 
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
 font-family: 'Poppins', sans-serif;
}
body{
    background: url('wave.svg');
        background-repeat: no-repeat;
        background-size: cover;
}
.container{
    margin-top: 100px;
}
tbody th {
    background-color: rgba(248, 34, 80);
  padding: 10px;
  color: #fff;
  text-align: center;
  border:none;
  border-radius:15px;
}
tr:hover {background-color: rgba(248, 34, 80, 0.1);;}
.btn{
	background-color: rgba(248, 34, 80);
	color:white;
	border-radius: 10px;
	padding:  10px;
	margin:auto;
}



	</style>
</head>
<body>
<div class="container">
<center><table cellspacing="3" border="0"></center>
	<tr>
		<th>Product Picture</th>
		<th>Product Name</th>
		<th>Product Description</th>
		<th>Product Price</th>
		<th width="20%">Action</th>
		
	</tr>
	<?php
		$viewQuery = $pdo->prepare("SELECT * FROM products ORDER BY productID DESC");
		$viewQuery->execute();
		
		$totalRecords = $viewQuery->rowCount();
		
		
		while($rows = $viewQuery->fetch()){
			$productPicture = $rows['productPicture'];
			$productName = $rows['productName'];
			$productDescription = $rows['productDescription'];
			$productPrice = $rows['productPrice'];
			//unique id (data)
			$productID = $rows['productID'];
			
		
	?>
	<tr>
		<td><img src="productPicture/<?php echo $productPicture;?>" alt="Product Picture" width="100"></td>
		
		<td><?php echo $productName;?></td>
		<td><?php echo $productDescription;?></td>
		<td><?php echo $productPrice;?></td>
		
		<td>
		<a href="delete
        .php?pid=<?php echo $productID;?>" class="btn" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> 
		<a href="update.php?pid=<?php echo $productID;?>"class="btn">Update</a>
		</td>
	
	</tr>
	</div>
	
		<?php } ?>

</table>
	<strong>Total Records: <?php echo $totalRecords;?></strong>
	</body>