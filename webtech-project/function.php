<?php
require_once('db.php');

function loginCheck($id, $pass)
	{
		$conn = mysqli_connect("localhost","root","","webtech");
		$sql = "select * from users where id=".$id and "pass=".$pass;
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}
	
	function getAllCustomer(){
		$conn = getConnection();
		$sql = "select * from user where type='customer'";
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}
function getAllproduct()
{
		$conn = getConnection();
		$sql = "select * from product";
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}
	function deleteproduct($id){
		$conn = getConnection();
		$sql = "delete from product where id=".$id;
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>