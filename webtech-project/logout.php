<?php
	setcookie("name", $name, time()-3, "/");
	header('location: login.php');
?>