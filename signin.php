<?php
	require 'sample.php';
	
	if(isset($_POST['signup']))
	{
		require 'connect.php';
		$username=htmlentities($_POST['username']);
		$pass=$_POST['password'];
		$email=$_POST['name'];
		$college=$_POST['college'];
		$query="INSERT INTO login (username,password,email,college) values('".mysqli_real_escape_string($dbc,$username)."','".mysqli_real_escape_string($dbc,$pass)."','".mysqli_real_escape_string($dbc,$email)."','".mysqli_real_escape_string($dbc,$college)."')";
		if($username!=''&&$pass!=''&&$email!=''&&$college!='')
		{
			
			$result = mysqli_query($dbc,$query);
			session_start();
			if(mysqli_query($dbc,$query))
			header( "Location: login.php" );
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Code Race | Signup</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<form method="post" id="loginForm">
		<input type="text" class="inputs"  name="name" placeholder="Name" required ><br><br><br><br>
		<input type="text" class="inputs" name="username" placeholder="Username or Email" required><br><br><br><br>
		<input type="password" class="inputs" name="password" placeholder="Password" required><br><br><br><br>
		<input type="text" class="inputs"  name="college" placeholder="College Name" required ><br><br><br><br>
		<input type="submit" class="buttonLogin" name="signup" value="Signup">

	</form>

</body>
</html>