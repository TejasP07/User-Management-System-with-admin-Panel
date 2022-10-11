<?php

session_start();
require('database.php');

if (isset($_POST['User_Name']) and isset($_POST['Password'])) {
	
	$email = $_POST['User_Name'];
	$password = $_POST['Password'];

	$query = "SELECT * FROM admin where name = '$email' and password = '$password'";

	$result = mysqli_query($conn,$query);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo "<script>document.location.href='admindashboard.php';</script>";
	}
	else{
		echo "<script>document.location.href='adminlogin.php';</script>";
	}

}

?>