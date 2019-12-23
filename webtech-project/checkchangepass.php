<?php

session_start();

if (isset($_REQUEST['submit'])) {

	$password = $_REQUEST['password'];
	$newpassword = $_REQUEST['newpassword'];
	$cpassword = $_REQUEST['cpassword'];

	if(empty($password) == true || empty($newpassword) == true || empty($cpassword) ==true)
	{
		header('location: changepass.php');
	}
	else
	{
			$myFile = fopen('info.txt', 'r');
			$data = fgets($myFile);
			$user = explode("|", $data);
			fclose($myFile);
			if($_SESSION['PASSWORD'== ""])
			for ($i=0; $i < count($user) ; $i=$i+6) { 
				if ($id == $user[$i] && $pass == $user[$i+2]) {
					$temp = TRUE;
					$_SESSION['NAME'] = $user[$i+1];
					$_SESSION['TYPE'] = $user[$i+5];
					break;
				}
				else
					$temp = false;
			}

			if ($temp == TRUE) {

				if ($_SESSION['TYPE'] == "admin") {
					header('location: AdminDashBoard.php');
				}
				elseif($_SESSION['TYPE'] == "user"){
					header('location: farmerhome.php');
				}

			}
			else
				header('location: login.php');
	}
}
?>