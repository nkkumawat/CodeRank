<?php
	require 'sample.php';
	if (isset($_SESSION['username'])) {
		echo '
		<!DOCTYPE html>
		<html>
		<head>
			<title>Code Race | Compile your code</title>
			<link rel="stylesheet" type="text/css" href="css/compile.css">
		</head>
		<body>
		<form id="Compile" method="post" action="examples/runsource.php">
			<textarea id="textArea" name="code"></textarea>
			<br><br>
			<select name="lang">
				<option>SELECT LANGUAGE</option>
				<option value="C">C</option>
				<option value="CPP">C++</option>
				<option value="CPP11">CPP11</option>
				<option value="CSHARP">CSHARP</option>
				<option value="JAVA">JAVA</option>
				<option value="JAVASCRIPT">JAVA SCRIPT</option>
				<option value="PERL">PERL</option>
				<option value="PHP">PHP</option>
				<option value="PYTHON">PYTHON</option>
				<option value="RUBY">RUBY</option>
			</select>
			<br><br>
			<input type="submit" name="Submit" value="Submmit">
		</form>

		</body>
		</html>';
	}
	else
	{
		echo '<link rel="stylesheet" type="text/css" href="css/compile.css">
		<div id="error">Please Login For Submit This problem</div>';
	}

?>
