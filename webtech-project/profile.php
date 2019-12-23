<?php
session_start();
if(isset($_SESSION['id']))
{ $id= $_SESSION['id'];
$conn= getConnection();
	$sql ="select  * from users where id='{$id}'";
	$result= mysqli_query($conn,$sql);
	$data= mysqli_fetch_assoc($result);

?>

<html>
<body background="photo.jpg">
Profile
<table border="1">
<tr>
<td> ID </td>
<td> <?php echo $data['id'];?> </td>
</tr>
<tr>
<td> Name</td>
<td> <?php echo $data['name'];?> </td>
</tr>
<tr>
<td> Password</td>
<td> <?php echo $data['pass'];?> </td>
</tr>
<tr>
<td> DOB</td>
<td> <?php echo $data['dob'];?> </td>
</tr>
<tr>
<td> Contact no </td>
<td> <?php echo $data['cno'];?> </td>
</tr>
<tr>
<td> Email</td>
<td> <?php echo $data['email'];?> </td>
</tr>
<tr>
<td> Address</td>
<td> <?php echo $data['address'];?> </td>
</tr>
<tr>
<td> Gender</td>
<td> <?php echo $data['gender'];?> </td>
</tr>
<tr>
<td> User Type</td>
<td> <?php echo $data['type'];?> </td>
</tr>

</table>
</body>


</html>
<?php		
	}else{
		header('location: login.php');
	}

?>