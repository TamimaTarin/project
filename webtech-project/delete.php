<?php
	include_once('function.php');
	if(isset($_GET['id'])){
		$status = deleteproduct($_GET['id']);
		if($status){
			header('location:viewproduct.php');
		}else{
			echo "Error: try again";
		}
	}else{
		echo "invalid request";
	}
?>