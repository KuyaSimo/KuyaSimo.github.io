<HTML>
	<?php
	include ('dbcon.php');
	?> 

	<h1><center>Admin Setting<center></h1>
	<form method = "POST" action = "user_change.php">
	<center><input type ="submit" name="chguser" value ="Change Username"></center>
	</form>
	<br>
	<form method = "POST" action = "pw_change.php">
	<center><input type = "submit" name="chgpw" value ="Change Password"></center>
	</form>


</HTML>