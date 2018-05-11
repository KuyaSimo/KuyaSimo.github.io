<HTML>
	<?php include('dbcon.php'); ?>
	<body>
		<h1><center>Change Username</center></h1>

	<form action = "userQuery.php" method = "POST">
		Enter Old Username<input type ="text" name = "oldUser"><br>
		Enter New Username<input type = "text" name ="newUser"><br>
		Verify Username<input type = "text" name ="veUser"><br>
		Enter Password<input type = "text" name ="VePass"><br>
		<input type = "submit" name="changeUser" value = "Change Username">
	</form>
	</body>
</HTML