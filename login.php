<?php
	require 'sample.php';
	// require('connect.php');
	if (isset($_POST['Login'])) 
	{
		require 'connect.php';
		$username=($_POST['username']);
		$pass=($_POST['password']);
		$query="SELECT *FROM login WHERE username='$username'";
		$result = mysqli_query($dbc,$query);
		$ans=mysqli_fetch_assoc($result);

		if($username!='')
		{
			if($username==$ans['username']&&$pass==$ans['password'])
			{
				session_start();
				$_SESSION['username']=$username;
				$_SESSION['check']=1;
				header( "Location: index.php" );

			}
			else
			{
				echo '<div id="error">Username or Password not match.......</div>';
			}
		}
		else
		{
			echo '<div id="error">Username or Password not match.......</div>';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Code Race | LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

	<form method="post" id="loginForm">
		<input type="text" class="inputs" name="username" placeholder="Username or Email" required><br><br><br><br>
		<input type="password" class="inputs" name="password" placeholder="Password" required><br><br><br><br>
		<input type="submit" class="buttonLogin" name="Login" value="Login">

	</form>
	<input type="button" class="buttonsignup" name="buttonSignup" value="Sign Up" onclick="ClickOnSignin()">


	<script type="text/javascript" src="js/onclick.js"></script>


</body>
</html>