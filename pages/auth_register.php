<?php

session_start();
require('database.php');

if (isset($_POST['register'])) {
	
	$userid = $_POST['userid'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Date_Of_Birth = $_POST['Date_Of_Birth'];
	$email = $_POST['email'];
	$Mobile_Number = $_POST['Mobile_Number'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$State = $_POST['State'];
	$Country = $_POST['Country'];
	$pincode = $_POST['pincode'];
	$Password = $_POST['Password'];

	$query = "INSERT INTO `users`( `user_id`, `firstname`, `lastname`, `DOB`, `email`, `mob_no`, `gender`, `address`, `city`, `state`, `country`, `pincode`, `password`) VALUES ('$userid','$FirstName','$LastName','$Date_Of_Birth','$email','$Mobile_Number','$gender','$address','$city','$State','$Country','$pincode','$Password')";
	$result = mysqli_query($conn,$query);


		if($result){
			echo "<script>document.location.href='userlogin.php';</script>";
		}else{
			echo "<script>document.location.href='user_registration.php';</script>";
		}

}

if (isset($_POST['userlogin'])) {
	
	$email = $_POST['User_Name'];
	$password = $_POST['Password'];

	$query = "SELECT * FROM user where email = '$email' and password = '$password'";

	$result = mysqli_query($conn,$query);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo "<script>document.location.href='admindashboard.php';</script>";
	}
	else{
		echo "<script>document.location.href='adminlogin.php';</script>";
	}

}
if (isset($_POST['admin'])) {
	
	$email = $_POST['User_Name'];
	$password = $_POST['Password'];

	$query = "SELECT * FROM admin where email = '$email' and password = '$password'";

	$result = mysqli_query($conn,$query);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo "<script>document.location.href='admindashboard.php';</script>";
	}
	else{
		echo "<script>document.location.href='adminlogin.php';</script>";
	}

}

if (isset($_POST['change_password'])) {
	
	$current_password = $_POST['current_password'];
	$new_password = $_POST['new_password'];
	$confirm_password = $_POST['confirm_password'];

	if ($new_password == $confirm_password) {
		$query1 = "SELECT * FROM admin where password = '$current_password'";
		$result1 = mysqli_query($conn,$query1);
		$count = mysqli_num_rows($result1);
		if ($count == 1) {
			$query2 = "UPDATE `admin` SET `password`='$new_password' WHERE 1";
			$result2 = mysqli_query($conn,$query2);
			if ($result2) {
				echo "<script>alert('Changed Password Successfully');</script>";
				echo "<script>document.location.href='admindashboard.php';</script>";
			}
			else {
				echo "<script>alert('Current Password Not Matched.');</script>";
				echo "<script>document.location.href='admin_profile.php';</script>";
			}
		}else{
			echo "<script>alert('Current Password Not Matched.');</script>";
				echo "<script>document.location.href='admin_profile.php';</script>";
		}
	}
	else{
		echo "<script>alert('New & Comfirm Password Not Matched');</script>";
		echo "<script>document.location.href='admin_profile.php';</script>";
	}

}
?>