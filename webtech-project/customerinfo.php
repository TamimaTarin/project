<?php
	
	include('function.php');
	$data = getAllcustomer();
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
			<th>DOB</th> 
			<th>Contact no</th> 
			<th>Email</th> 
			<th>Address</th>
			<th>Gender</th> 
		</tr>
		
		
	<div class="sidenav">
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
			<td><?= $data[$i]['dob']; ?></td>
			<td><?= $data[$i]['contact_no']; ?></td>
			<td><?= $data[$i]['email']; ?></td>
			<td><?= $data[$i]['address']; ?></td>
			<td><?= $data[$i]['gender']; ?></td>
		</tr>
		
		<?php	}  ?>
	</table>
</body>
</html>