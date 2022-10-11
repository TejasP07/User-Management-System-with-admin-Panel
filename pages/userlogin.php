<!DOCTYPE html>
<html>
<title>User Login</title>
<style >
	h1 {
		text-align: center;
		padding-top: 30px;
	}

	
	body{
		background-image: url("abcd.jpg");
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;


		text-align: center;
		margin-top:130px;
	
		font-size: 30px;

		color: white;
		}

	a{
	 margin-right: 150px;

	}
	.button3 {border-radius: 18px;
		padding: 5px 30px;}
	
	select{

		padding:08px 10px ;
		margin-left: 01px;
		border-radius: 10px;

		}

		input
		{
			border-radius: 20px;
		}
		div
		{
			font-size: 20px;		
		}
	
	
</style>


<body style="text-align: center;">

	<h2 >USER LOGIN</h2>
	<form method="POST" action="auth_register.php">
		<label style=>Email ID</label><br>
		<input type="text" name="User_Name1" placeholder="Enter User Name" style="padding: 10px 40px;" ><br><br>
		<label>Password</label><br>
		<input type="Password" name="Password1" placeholder="Enter Password"style="padding: 10px 40px"><br><br>
		<button class="button button3;" style="background-color:transparent;color: white; border-radius: 15px; width: 100px ; height: 50px;">Login</button>
	</form>
    <br>
	
	<a href="user_registration.php" style="font-size: 17px; color: white; text-decoration: none">Create New User Account</a> 
	<a href="forgot.php" style="font-size: 17px;margin-right: 85px; color: white;text-decoration: none;">Forgot Password?</a> 






</body>
</html>