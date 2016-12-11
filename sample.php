<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>
<!-- Header Section -->
<div id="header">
	<img id="logo" src="images/logo.png" onclick="ClickOnHome()">
	<table id="Button">
		<tr><td class="clickButton" onclick="Learn()">LEARN</td>
		<td class="clickButton" onclick="Practice()">PRACTICE</td>
		<td class="clickButton">CONTESTS</td>
		<td class="clickButton">JOBS</td></tr>
	</table>


	<?php
		session_start();
		if(isset($_SESSION['username']))
		{
			echo '<div id="NameUser">'.$_SESSION['username'].'&nbsp &nbsp &nbsp   <a href="logout.php">Logout</a><a href="profile.php">&nbsp&nbsp&nbspProfile</a></div>';
		}
		else
		{
			echo '<div id="loginButton" onclick="ClickOnLogin()">LOGIN</div>';
		}

	?>
</div>
<script type="text/javascript" src="js/onclick.js"></script>
</body>
</html>