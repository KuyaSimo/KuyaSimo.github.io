<!DOCTYPE HTML>
	<?php 
	include('dbcon.php');
	session_start();
	?>
	<head>
	 

	
	<title>Welcome faggot</title>
</head>
		<body>
			<center><h1><b>Welcome Summoner <?php echo $_SESSION['useruse']; ?></b></h1></center>
			
			<h2><center> Menu </center></h2>
			<form method = "POST" action = "admin.php">
			<center><input type = "submit" name = "adset" value = "Admin Setting"></center>
			</form>
			<form method = "POST" action = "register.php">
			<center><input type = "submit" name = "regstud" value ="Register Student"></center>
			</form>
			<form method = "POST" action = "edit_questions.php">
			<center><input type = "submit" name = "quest" value = "View Questions"></center>
			</form>
			<form method = "POST" action = "score.php">
			<center><input type ="submit" name = "view" value = "View Score"></center>
			</form>
			<form method = "POST" action = "index.php">
			<center><input type ="submit" name = "view" value = "Logout"></center>
			</form>
		</body>
	</HTMl>