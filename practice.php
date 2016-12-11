<?php
require 'sample.php';
session_start();
if(isset($_SESSION['username']))
{
	echo "nk";
}
else
echo "string";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/practice.css">
</head>
<body>
<div id="main">
<div id="problems">
	<h1>Fit to play</h1>
	<p>Rayne Wooney has been one of the top players for his football club for the last few years. But unfortunately, he got injured during a game a few months back and has been out of play ever since.

	He's got proper treatment and is eager to go out and play for his team again. Before doing that, he has to prove to his fitness to the coach and manager of the team. Rayne has been playing practice matches for the past few days. He's played N practice matches in all.

	He wants to convince the coach and the manager that he's improved over time and that his injury no longer affects his game. To increase his chances of getting back into the team, he's decided to show them stats of any 2 of his practice games. The coach and manager will look into the goals scored in both the games and see how much he's improved. If the number of goals scored in the 2nd game(the game which took place later) is greater than that in 1st, then he has a chance of getting in. Tell Rayne what is the maximum improvement in terms of goal difference that he can show to maximize his chances of getting into the team. If he hasn't improved over time, he's not fit to play. Scoring equal number of goals in 2 matches will not be considered an improvement. Also, he will be declared unfit if he doesn't have enough matches to show an improvement.
	</p>
	<h4>inputs</h4>
	<p>The first line of the input contains a single integer T, the number of test cases. Each test case begins with a single integer N, the number of practice matches Rayne has played.
	The next line contains N integers. The ith integer, gi, on this line represents the number of goals Rayne scored in his ith practice match. The matches are given in chronological order i.e. j > i means match number j took place after match number i.
	</p>
	<h4>outputs</h4>
	<p>For each test case output a single line containing the maximum goal difference that Rayne can show to his coach and manager. If he's not fit yet, print "UNFIT".</p>
	<h4>Example<br>input</h4>
	<p>3
	6
	3 7 1 4 2 4<br>
	5<br>
	5 4 3 2 1<br>
	5<br>
	4 3 2 2 3<br>
	</p>
	<h4>Output</h4>
	
	<p>4<br>
	UNFIT<br>
	1</p>
	<br><br>
	<form method="post" action="compilecode.php">
		 <input type="submit" name="submit" value="submit">
	</form>
	</div>
</div>

</body>
</html>