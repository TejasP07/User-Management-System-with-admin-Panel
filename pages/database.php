<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

if (!$conn) {
	die("Connection Server Error") . mysqli_error($conn);
}
echo "Connection Server Successfully";

$database = mysqli_select_db($conn,"user_management");
if (!$database) {
	die("Connection Database Error") . mysqli_error($database);
}
echo "Connection Database Successfully";
?>