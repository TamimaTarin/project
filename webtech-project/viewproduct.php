<?php
session_start();
require('db.php');
if(isset($_SESSION['id']))
{ $id= $_SESSION['id'];
	$conn= getConnection();
	$sql="select  * from users where id='{$id}'";
	$result= mysqli_query($conn,$sql);
	$data= mysqli_fetch_assoc($result);
	
?>
<?php
	
	include('function.php');
	$data = getAllproduct();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #4CAF50;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; 
  font-size: 28px; 
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body background="photo.jpg">
<table border="1" bgcolor="yellow" align="center">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Quantity</th> 
			<th>Price</th> 
			<th>Type</th> 
			<th>Action</th>
		</tr>
		
		
	<div class="sidenav">
	<a href="addproduct.php">Add Product</a> 
    <a href="farmerhome.php">Home</a> 	
	<a href="farmerhome.php">Back</a>	
	<a href="login.php">logout</a>
</div>
	<br>
	<br>

		
		<?php for($i=0; $i<count($data); $i++){ ?>
		<tr>
			<td><?= $data[$i]['id']; ?></td>
			<td><?= $data[$i]['name']; ?></td>
			<td><?= $data[$i]['quantity']; ?></td>
			<td><?= $data[$i]['price']; ?></td>
			<td><?= $data[$i]['type']; ?></td>
			<td>
				<a href="edit.php">Edit</a> | 
				<a href="delete.php?id=<?=$fdata[$i]['id']?>">Delete</a> 
			</td>
		</tr>
		
		<?php	}  ?>
	</table>
</body>
</html>
<?php		
	}else{
		header('location: login.php');
	}

?>