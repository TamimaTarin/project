
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
<br><br><br><br><br>
<form method="POST" action="addproductcheck.php">

		   
			<table align="center" bgcolor="yellow" height="250" width="350">
		
			<tr>
					<th colspan="5px" align="center" >Add Products</th>
				</tr>
				<tr>
			<td><input type="text" placeholder="Search.."></td>
			</tr>
		<tr>
					<td> Product Id: </td>
					<td><input type="text" name="id" placeholder="Enter product id"></td>
				</tr>
			<tr>
					<td>prooduct name: </td>
					<td><input type="text" name="name" placeholder="Enter product name"></td>
				</tr>
				<tr>
					<td>prooduct quantity: </td>
					<td><input type="text" name="quantity" placeholder="Enter quantity"></td>
				</tr>
					<tr>
					<td>prooduct price: </td>
					<td><input type="text" name="price" placeholder="Enter price"></td>
				</tr>
	              <tr>
					<td>Product Type</td>
					<td>
						<input type="radio" name="type" value="vegetable"> vegetable &emsp;
						<input type="radio" name="type" value="fruit"> fruit
					</td>
				</tr>		
					  
					</td>
				</tr>
				
				<div class="sidenav"> 
    <a href="farmerhome.php">Home</a> 	
	<a href="farmerhome.php">Back</a>	
	<a href="login.php">logout</a>
</div>
			
				<tr align="center">
			<td colspan="2"><input type="submit" name="reg" value="confirm">
			</tr>
			</table>
	
				</form>
				</body>
				</html>
			