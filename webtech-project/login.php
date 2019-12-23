<?php
session_start();
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "webtech";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if(mysqli_connect_errno()){
echo "Error: ".mysqli_connect_err();}

if(isset($_POST['id']))
{
	$id=$_POST['id'];
	$pass=$_POST['pass'];
	
	$sql = "select * from user where id='$id' AND pass='$pass';";
	$result = mysqli_query($conn,$sql);
	$rowCount = mysqli_num_rows($result);
	if(mysqli_num_rows($result)!=0)
	{
		$_SESSION['id']=$id;
		//$_SESSION['pass']=$pass;
		header("location: farmerhome.php");
	}
	else
	{
		echo "invalid";
	}
}
?>
<html>
<head>
<title>Login Page</title>
</head>


<body background="photo.jpg">
<br><br><br><br><br><br><br><br>

	<form method="POST" action="#">
		<table  align="center" border="0" width="20" height="200" bgcolor="yellow" >
			<tr>
				<td> User Id:</td>
				<td><input type="text"  id="id" placeholder="Enter your id" name="id"></td>
			</tr>
			
			<tr>
				<td>Password:</td>
				<td><input type="password"  id="pass" placeholder="Enter your password" name="pass"></td>
			</tr>
				
</tr>
				<tr>
				
			<tr align="center">
				<td colspan="2"><input type="submit" name="submit" onclick="loadDoc()" value="Log in"></td>
				<td></td>
			</tr>
			
			<tr align="center">
			<td colspan="2"><a href="registration.html">Registration</a></td>
			</tr>
			
			<tr align="center">
			<td colspan="2"><a href="loginfornt.php">Back</a></td>
			</tr>
			
			<div id="logindiv"> </div> 
		</table>
	</form>
</body>
</html> 