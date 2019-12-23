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
	<table border="0" width="1000" height="30" >
<div class="sidenav">
		<a href="profile.php" >Profile</a>
	    <a href="viewproduct.php">View product</a> 
		<a href="addproduct.php">Add product</a>
		<a href="deleteproduct.php">Delete Product</a> 
		<a href="customerinfo.php">Customer Info</a> 
		<a href="changepass.php">Change Password</a>
		<a href="loginfornt.php">Log Out</a>
		</div>
			</table>
		
			<br><br><br><br><br><br><br><br>
			<table align="center">
			<tr>
			<td bgcolor="yellow"><h1 align="center">Welcome <//?= $_SESSION['id'] ?></h1></td>
			</tr>
			</table>
</body>	
</html>
<?php		
	}else{
		header('location: login.php');
	}

?>