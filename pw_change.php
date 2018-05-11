<HTML>
	<?php include('dbcon.php'); ?>

	<body>
		<h1><center>Change Password</center></h1>

		<form action = "pwQuery.php" method = "POST">
			Enter Username<input type = "text" name = "chUser"><br>
			Enter Old Password<input type ="Password" name = "oldPass"><br>
			Enter New Password<input type ="Password" name = "newPass"><br>
			Verify Password<input type = "Password" name = "verPass"><br>
			<input type = "submit" name ="changePw" value = "Change Password">
		</form>
	</body>
<HTML>