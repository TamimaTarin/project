<?php
	require_once('db.php');
	if(isset($_POST['get']))
	{
		echo "Error";
	}
	else
	{
		$id= $_POST['id'];
		$name = $_POST['name'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$type=$_POST['type'];
		$conn=getConnection();
	$sql="insert into product values('{$id}','{$name}','{$quantity}','{$price}','{$type}');";
		if(mysqli_query($conn, $sql))
		{
			header('location: addproduct.php');
		
		}
		else
			echo "Error";
	}
?>